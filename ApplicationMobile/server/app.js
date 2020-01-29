const express= require('express'),
    passport = require('passport'),
    mongoose = require('mongoose'),
    session = require('express-session'),
    cookieParser = require('cookie-parser'),
    bodyParser = require('body-parser'),
    config = require('config');
    app = express();


mongoose.connect(config.mongo_host, {
    useNewUrlParser: true,
    useUnifiedTopology: true
});

app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');
app.use(cookieParser());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(session({
    secret: config.session_secret,
    resave: false,
    saveUninitialized: true,
    key: 'sid'
}));
app.use(passport.initialize());
app.use(passport.session());

require('./src/routes/books')(app);
require('./src/routes/users')(app);
require('./src/controllers/users/facebookLoginRegister')(app);

app.listen(3000);
console.log('App listen on https://localhost:3000/');

module.exports = app;
