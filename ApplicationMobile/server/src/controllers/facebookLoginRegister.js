let mySqlConnection;
let idUser;
const { generateOAuth2Token } = require('../database/user');

module.exports = injectedMySqlConnection => {
    mySqlConnection = injectedMySqlConnection;
};

module.exports = (app) => {

    require('dotenv').config();
    require('../database/mysql');

    const passport = require('passport'),
        mysql = require('mysql'),
        axios = require('axios'),
        mongoose = require('mongoose'),
        Channel = require('../models/channel'),
        FacebookStrategy = require('passport-facebook').Strategy;

    const pool = mysql.createPool({
        host: process.env.MYSQL_HOST,
        port: process.env.PORT,
        user: process.env.USERNAME,
        password: process.env.PASSWORD,
        database: process.env.DATABASE
    });

    // Passport session setup.
    passport.serializeUser(function (user, done) {
        done(null, user);
    });

    passport.deserializeUser(function (obj, done) {
        done(null, obj);
    });

    passport.use(new FacebookStrategy({
        clientID: process.env.FACEBOOK_API_KEY,
        clientSecret: process.env.FACEBOOK_API_SECRET,
        callbackURL: process.env.FACEBOOK_CALLBACK_URL
    },
        function (accessToken, refreshToken, profile, done) {
            let getFacebookProfile = "https://graph.facebook.com/me?fields=birthday,email,hometown,name,picture.type(large)&access_token=" + accessToken + "";
            process.nextTick(() => {
                axios.get(getFacebookProfile).then(async (profile) => {
                    if(process.env.USE_DATABASE){
                        await pool.query("SELECT * FROM users WHERE facebook_user_id=" + profile.data.id, async (err, rows) => {
                            if(err) throw err;
                            if (rows && rows.length === 0) {
                                pool.query("" +
                                    "INSERT into users(facebook_user_id,facebook_access_token,email,username,avatar,status,subscribe) " +
                                    "VALUES('" + profile.data.id + "','" + accessToken + "','" + profile.data.email + "','" + profile.data.name + "','" + profile.data.picture.data.url + "','ACTIVE', false)",
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

                                    return done(null, {
                                        message: "New user and channel added with Facebook !",
                                        facebook: profile.data,
                                        oauth2_token: oauth2_token
                                    })
                                });
                            } else {
                                const oauth2_token = await generateOAuth2Token(rows[0].user_id);

                                return done(null, {
                                    message: "User already exists in database",
                                    facebook: profile.data,
                                    oauth2_token: oauth2_token
                                })
                            }
                        })
                    }
                })
            })
        }));

    app.get('/auth/facebook', passport.authenticate('facebook', { scope: 'email' }));

    //'facebook' , { successRedirect: '/login', failureRedirect: '/login' }
    app.get('/auth/facebook/callback', passport.authenticate('facebook', { failureRedirect: '/' }), (req, res) => {
        res.send({
            facebook_user: req.user,
        });
    });

};
