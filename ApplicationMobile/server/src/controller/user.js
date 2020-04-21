require('dotenv').config();
const mysql = require('mysql'),
    crypto = require('crypto'),
    bcrypt = require('bcrypt'),
    Channel = require('../models/channel'),
    mongoose = require('mongoose'),
    axios = require('axios');

let idUser;

const pool = mysql.createPool({
    host: process.env.MYSQL_HOST,
    port: process.env.PORT,
    user: process.env.USERNAME,
    password: process.env.PASSWORD,
    database: process.env.DATABASE
});

module.exports = generateOAuth2Token = (id) => {
    return new Promise(async (resolve) => {
        const token = await new Promise(async (resolveToken) => {
            await crypto.randomBytes(256, async (ex, buffer) => {
                resolveToken(await crypto
                    .createHash('sha1')
                    .update(buffer)
                    .digest('hex'));
            })
        });

        resolve(new Promise((resolveToken, rejectToken) => {
                const query = "UPDATE users SET oauth_access_token = " + JSON.stringify(token) + " WHERE user_id = "+id;

                pool.query(query, (err, rows) => {
                    (err) ? rejectToken(err) : resolveToken(token);
                });
            }))
    });
};

const updateOneUser = (user) => {
    return new Promise((resolve, reject) => {
        const query = `
        UPDATE users 
        SET 
        username = '${user.username}', 
        avatar = '${user.avatar}'
        WHERE user_id = ${user.user_id}`;

        pool.query(query, async (err, rows) => {
            if (err) throw err;
            if (rows && rows.length === 0 || !rows) {
                reject('Aucun utilisateur trouvé')
            }
            resolve(rows);
        });
    });
};

const updateOneUserPassword = (user) => {
    return new Promise((resolve, reject) => {
        bcrypt.hash(user.password, 10, (err, hash) => {
            const query = `
               UPDATE users 
               SET 
               password = '${hash}'
               WHERE user_id = ${user.user_id}`;

            pool.query(query, async (err, rows) => {
                if (err) throw err;
                if (rows && rows.length === 0 || !rows) {
                    reject('Aucun utilisateur trouvé')
                }
                resolve(rows);
            });
        })
    });
};

const facebookUserLogin = async (token) => {
    return new Promise(async (resolve, reject) => {
        let getFacebookProfile = "https://graph.facebook.com/me?fields=birthday,email,hometown,name,picture.type(large)&access_token=" + token + "";

        await axios.get(getFacebookProfile).then(async (profile) => {
            if(process.env.USE_DATABASE){
                await pool.query("SELECT * FROM users WHERE facebook_user_id=" + profile.data.id, async (err, rows) => {
                    if(err) throw err;
                    if (rows && rows.length === 0) {
                        pool.query("" +
                            "INSERT into users(facebook_user_id,facebook_access_token,email,username,avatar,status,subscribe) " +
                            "VALUES('" + profile.data.id + "','" + token + "','" + profile.data.email + "','" + profile.data.name + "','" + profile.data.picture.data.url + "','ACTIVE', false)",
                            async (err, rows) => {
                                idUser = rows.insertId;
                                if(err) throw err;
                                let channel = {
                                    user_id: rows.insertId,
                                    channel_name: "",
                                    avatar: profile.data.picture.data.url,
                                    Flux: [{
                                        stream_url: "",
                                        first_source: {
                                            source_url: "",
                                            name: "",
                                            volume_source: ""
                                        },
                                        second_source: {
                                            source_url: "",
                                            name: "",
                                            volume_source: ""
                                        }
                                    }],
                                    Stream: [{
                                        _id: new mongoose.Types.ObjectId,
                                        volume_1: "",
                                        volume_2: "",
                                        direct_url: "",
                                        createdAt: new Date(),
                                    }],
                                    radio: false,
                                    status: "ACTIVE",
                                    live: false,
                                    createdAt: new Date()
                                };

                                const newChannel = Channel(channel);
                                newChannel.save((e) => {
                                    if (e) {
                                        throw new Error('Error with Facebook register');
                                    }
                                });
                                const oauth2_token = await generateOAuth2Token(rows.insertId);
                                resolve({
                                    message: "Registered",
                                    facebook: profile.data,
                                    oauth2_token: oauth2_token
                                })
                            });
                    } else {
                        const oauth2_token = await generateOAuth2Token(rows[0].user_id);
                        resolve({
                            message: "Connected",
                            facebook: profile.data,
                            oauth2_token: oauth2_token
                        })
                    }
                })
            }
        })
    });
};

const getAllUsers = () => {
    return new Promise((resolve, reject) => {
        const query = `
            SELECT *
            FROM users`;

        pool.query(query, async (err, rows) => {
            if (err) throw err;
            if (rows && rows.length === 0 || !rows) {
                reject('Aucun utilisateur trouvé')
            }
            resolve(rows);
        });
    })
};

const getUserById = (id) => {
    return new Promise((resolve, reject) => {
        const query = `
            SELECT *
            FROM users
            WHERE user_id = ${id}`;

        pool.query(query, async (err, rows) => {
            if (err) throw err;
            if (rows && rows.length === 0 || !rows) {
                reject('Aucun utilisateur trouvé')
            }
            resolve(rows);
        });
    })
};

const getUserWithOAuthToken = (token) => {
    return new Promise((resolve, reject) => {
        const query = `
            SELECT *
            FROM users
            WHERE oauth_access_token = ${JSON.stringify(token)}`;

        pool.query(query, async (err, rows) => {
            if (err) throw err;
            if (rows && rows.length === 0 || !rows) {
                reject('Aucun utilisateur trouvé')
            }
            resolve(rows);
        });
    })
};

const getAllActiveUsers = () => {
    return new Promise((resolve, reject) => {
        const query = `
            SELECT *
            FROM users
            WHERE status = 'ACTIVE' AND status = 'ACTIVE '`;

        pool.query(query, async (err, rows) => {
            if (err) throw err;
            if (rows && rows.length === 0 || !rows) {
                reject('Aucun utilisateur trouvé')
            }
            resolve(rows);
        });
    })
};

const getAllInactiveUsers = () => {
    return new Promise((resolve, reject) => {
        const query = `
            SELECT *
            FROM users
            WHERE status = 'INACTIVE'`;

        pool.query(query, async (err, rows) => {
            if (err) throw err;
            if (rows && rows.length === 0 || !rows) {
                reject('Aucun utilisateur trouvé')
            }
            resolve(rows);
        });
    })
};

const deleteUserById = async (id) => {
    return new Promise((resolve, reject) => {
        const query = `
        DELETE FROM users 
        WHERE user_id = ${id}`;

        pool.query(query, async (err, rows) => {
            if (err) reject(err);
            if (rows && rows.length === 0 || !rows) {
                reject('Aucun utilisateur trouvé')
            }
            resolve(rows);
        });
    });
};

module.exports = {
    generateOAuth2Token,
    updateOneUser,
    updateOneUserPassword,
    facebookUserLogin,
    getAllUsers,
    getUserById,
    getUserWithOAuthToken,
    getAllActiveUsers,
    getAllInactiveUsers,
    deleteUserById
};
