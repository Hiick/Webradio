require('dotenv').config();
const express= require('express'),
    mySqlConnection = require('./src/database/mysql'),
    mongoose = require('mongoose'),
    user = require('./src/database/oauth')(mySqlConnection),
    token = require('./src/database/token')(mySqlConnection),
    oAuth2Server = require('node-oauth2-server'),
    oAuthModel = require('./src/authorisation/accessTokenModel')(user, token),
    passport = require('passport'),
    session = require('express-session'),
    cookieParser = require('cookie-parser'),
    bodyParser = require('body-parser'),
    cors = require('cors');
    app = express();

app.oauth = oAuth2Server({
    model: oAuthModel,
    grants: ['password'],
    debug: true
});

app.all('/*', function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "X-Requested-With");
    next();
});

const restrictedAreaRoutesMethods = require('./src/routes/restricted/restrictedAreaRoutesMethods'),
    restrictedAreaRoutes = require('./src/routes/restricted/restrictedAreaRoutes')(express.Router(), app, restrictedAreaRoutesMethods),
    authRoutesMethods = require('./src/routes/open/authRoutesMethodes')(user),
    authRoutes = require('./src/routes/open/authRoutes')(express.Router(), app, authRoutesMethods);

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser());

app.use(app.oauth.errorHandler());

app.use('/auth', authRoutes);
app.use('/authorized', restrictedAreaRoutes);

require('./src/controllers/facebookLoginRegister')(app);
mongoose.connect('mongodb://localhost:27017/TestDb', {
   useNewUrlParser: true,
   useUnifiedTopology: true
}).then((database) => {
    console.log('Connected to MongoDB !');

    global.db = database
});

app.listen(3000, () => { console.log('App running on : https://localhost:3000/') });

app.get('/', (req, res) => {
    res.sendFile(__dirname + '/index.html')
});
