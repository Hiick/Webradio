module.exports = (app) => {

    const passport = require('passport');
    const config = require('config');
    const mysql = require('mysql');
    const axios = require('axios');
    const FacebookStrategy = require('passport-facebook').Strategy;

    //Define MySQL parameter in Config.js file.
    const pool = mysql.createPool({
        host: config.host,
        port: config.port,
        user: config.username,
        password: config.password,
        database: config.database
    });

    // Passport session setup.
    passport.serializeUser(function (user, done) {
        done(null, user);
    });

    passport.deserializeUser(function (obj, done) {
        done(null, obj);
    });

    passport.use(new FacebookStrategy({
            clientID: config.facebook_api_key,
            clientSecret: config.facebook_api_secret,
            callbackURL: config.callback_url
        },
        function (accessToken, refreshToken, profile, done) {
            let getFacebookDatas = "https://graph.facebook.com/" + profile.id + "?fields=birthday,email,hometown,name,picture.type(large)&access_token=" + accessToken + "";
            process.nextTick(function () {
                axios.get(getFacebookDatas).then((res) => {
                    if (config.use_database) {
                        pool.query("SELECT * from users where facebook_user_id=" + res.data.id, (err, rows) => {
                            if (err) throw err;
                            if (rows && rows.length === 0) {
                                pool.query("" +
                                    "INSERT into users(facebook_user_id,facebook_access_token,email,name,picture) " +
                                    "VALUES('" + res.data.id + "','" + accessToken + "','" + res.data.email + "','" + res.data.name + "','" + res.data.picture.data.url + "')");
                                console.log("New user added with Facebook !");
                            } else {
                                console.log("User already exists in database");
                            }
                        });
                    }
                    return done(null, res.data);
                });
            });
        }));

    app.get('/auth/facebook', passport.authenticate('facebook', { scope: 'email' }));

    /**
     * @TODO Dans cette url, il faudra changer la "successRedirect" vers la page d'accueil et non la login
     */
    app.get('/auth/facebook/callback', passport.authenticate('facebook', { successRedirect: '/login', failureRedirect: '/login' }));
};
