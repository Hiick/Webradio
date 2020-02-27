module.exports =  (router, app, authRoutesMethods) => {

    //route for registering new users
    router.post('/register', authRoutesMethods.register);

    //route for allowing existing users to login
    router.post('/login', app.oauth.grant(), authRoutesMethods.login);

    return router

};
