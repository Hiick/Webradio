require('dotenv').config();
const mysql = require('mysql'),
    crypto = require('crypto'),
    bcrypt = require('bcrypt');

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

module.exports = {
    generateOAuth2Token,
    updateOneUser,
    updateOneUserPassword
};
