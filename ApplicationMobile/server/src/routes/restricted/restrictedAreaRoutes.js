const multer = require('multer'),
    upload = multer();

module.exports =  (router, app, restrictedAreaRoutesMethods) => {

    /**
     * ALL ROUTES FOR SIGNALEMENTS
     */
    router.post('/signalements/channel/:id',  app.oauth.authorise(), restrictedAreaRoutesMethods.newSignalement);
    router.delete('/signalements/banish/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.banishChannel);
    router.get('/signalements/all', app.oauth.authorise(), restrictedAreaRoutesMethods.getSignalements);
    router.get('/signalements/channel/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.getSignalementsByChannelID);

    /**
     * ALL ROUTES FOR CHANNELS
     */
    router.get('/channels/all', app.oauth.authorise(), restrictedAreaRoutesMethods.getChannels);
    router.get('/channels/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.getOneChannel);
    router.get('/channels/stream/all', app.oauth.authorise(), restrictedAreaRoutesMethods.getStreamChannel);
    router.put('/channels/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.updateChannel);

    /**
     * ALL ROUTES FOR USERS
     */
    router.put('/users/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.updateUser);
    router.put('/users/password/:id', app.oauth.authorise(), restrictedAreaRoutesMethods.updateUserPassword);

    /**
     * ALL ROUTES FOR STREAMS
     */
    router.get('/stream/record/:channel_id', restrictedAreaRoutesMethods.recordStream);
    router.get('/stream/record/stop', restrictedAreaRoutesMethods.stopStream);
    router.get('/stream/listen', restrictedAreaRoutesMethods.listenStream);

    return router

};
