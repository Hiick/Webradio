const express= require('express'),
    app = express();
    bodyParser = require('body-parser'),
    mongoose = require('mongoose'),
    config = require('config');


mongoose.connect(config.host, {
    useNewUrlParser: true,
    useUnifiedTopology: true
});

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

require('./src/routes/books')(app);

app.listen(3000);
console.log('App listen in : https://localhost:3000');

module.exports = app;
