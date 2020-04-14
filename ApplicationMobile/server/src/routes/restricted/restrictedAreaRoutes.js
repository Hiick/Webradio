
module.exports =  (router, app, restrictedAreaRoutesMethods) => {

    /**
     * ALL ROUTES FOR SIGNALEMENTS
     */
    router.post('/signalements/channel/:id',  app.oauth.authorise(), restrictedAreaRoutesMethods.newSignalement);
    router.get('/signalements/all', app.oauth.authorise(), restrictedAreaRoutesMethods.getSignalements);
    router.get('/signalements/channel/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.getSignalementsByChannelID);
    router.put('/signalement/update/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.updateSignalement);
    router.delete('/signalements/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.deleteSignalement);

    /**
     * ALL ROUTES FOR CHANNELS
     */
    router.get('/channels/all', app.oauth.authorise(), restrictedAreaRoutesMethods.getChannels);
    router.get('/channels/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.getOneChannel);
    router.get('/channels/stream/all', app.oauth.authorise(), restrictedAreaRoutesMethods.getStreamChannel);
    router.get('/channels/banish/all', app.oauth.authorise(), restrictedAreaRoutesMethods.getBanishChannels);
    router.put('/channels/update/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.updateChannel);
    router.put('/channels/banish/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.banishChannel);
    router.put('/channels/unbanish/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.unbanChannel);
    router.delete('/channels/delete/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.deleteChannel);

    /**
     * ALL ROUTES FOR RADIOS
     */
    router.post('/radios', app.oauth.authorise(), restrictedAreaRoutesMethods.addRadio);
    router.get('/radios/all', app.oauth.authorise(), restrictedAreaRoutesMethods.getRadios);
    router.get('/radios/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.getOneRadio);
    router.put('/radios/update/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.updateOneRadio);
    router.delete('/radios/delete/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.deleteOneRadio);

    /**
     * ALL ROUTES FOR USERS
     */
    router.get('/user/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.getOneUser);
    router.get('/users', app.oauth.authorise(), restrictedAreaRoutesMethods.getUsers);
    router.get('/users/active', app.oauth.authorise(), restrictedAreaRoutesMethods.getActiveUser);
    router.get('/users/inactive', app.oauth.authorise(), restrictedAreaRoutesMethods.getInactiveUser);
    router.put('/users/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.updateUser);
    router.put('/users/password/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.updateUserPassword);
    router.delete('/users/delete/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.deleteUser);

    /**
     * ALL ROUTES FOR STREAMS
     */
    router.get('/stream/record/:channel_id', restrictedAreaRoutesMethods.recordStream);
    router.get('/stream/stop', restrictedAreaRoutesMethods.stopStream);
    router.get('/stream/generate/:channel_id', restrictedAreaRoutesMethods.getFirstStream);

    return router

};
