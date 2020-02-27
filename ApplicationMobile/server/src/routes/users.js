module.exports = (app) => {
    app.get('/login', function (req, res) {
        res.render('index', { user: req.user });
    });

    app.get('/logout', function (req, res) {
        req.logout();
        res.redirect('/');
    });
};
