const {
    registerSignalement,
    getAllSignalements,
    getSignalementsByID,
    deleteSignalementByID,
    updateSignalementByID,
    banishChannelByID
} = require('../../controller/signalements');

const {
    getAllChannels,
    getChannel,
    updateChannelByID,
    getAllStreamChannels,
    deleteChannelByID,
    getAllBanishChannels
} = require('../../controller/channel');

const {
    updateOneUser,
    updateOneUserPassword,
    getAllUsers,
    getUserById,
    getAllActiveUsers,
    getAllInactiveUsers,
    deleteUserById,
    getUserWithOAuthToken
} = require('../../controller/user');

const {
    addNewRadio,
    getAllRadios,
    getRadioByID,
    updateRadioByID,
    deleteRadioByID
} = require('../../controller/radio');

const {
    recordVoice,
    stopRecordVoice
} = require('../../controller/stream');

const {
    costAllUsers,
    costAllSubscribers,
    costAllListen,
    costAllStreamsListen,
    costAllRadiosListen,
    costAllActiveChannels,
    costAllRadios,
    costAllCreatedStream,
    costAllCreatedStreamByUser,
    costAllFavoriteForUser,
    costAllListenForUser,
    costAllSignalementsForUser,
    costAllSignalements,
    costAllActiveUsers,
    costAllInactiveUsers,
    costAllInactiveChannels,
    costAllBanishChannels,
    costAllRegisteredThisMonth,
    costAllPlanStreamForUser,
    costAllPlan
} = require('../../controller/statistique');

const Channel = require('../../models/channel'),
    TailingReadableStream = require('tailing-stream');

/**
 * SIGNALEMENTS METHODES
 */
const newSignalement = async (req, res) => {
    let channel_id = req.params.id;

    Channel.findById(channel_id, async (err, channel) => {
        let signalement = {
            channel_id: channel_id,
            user_id: channel.user_id,
            channel: channel.channel_name,
            url_stream: channel.Stream[0].direct_url,
            date_stream: channel.Stream[0].createdAt,
            motif: req.body.motif
        };

        try {
            await registerSignalement(signalement);

            res.status(200).send({
                message: 'Le signalement à bien été envoyé',
                signalement: signalement,
            });
        } catch (err) {
            res.status(400).send({
                message: err
            });
        }
    })

};
const getSignalements = async (req, res) => {
    try {
        const signalements = await getAllSignalements();

        res.status(200).send({
            signalements,
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const getSignalementsByChannelID = async (req, res) => {
    let signalement = {
        channel_id: req.params.id
    };

    try {
        const signalements = await getSignalementsByID(signalement);

        res.status(200).send({
            signalements,
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const deleteSignalement = async (req, res) => {
    let signalement = {
        signalement_id: req.params.id
    };

    try {
        const signal = await deleteSignalementByID(signalement);

        res.status(200).send({
            signal,
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const updateSignalement = async (req, res) => {
    let data = {
        id: req.params.id,
        motif: req.body.motif
    };

    try {
        await updateSignalementByID(data);

        res.status(200).send({
            message: 'Signalement mis à jour',
            update: data
        })
    } catch (err) {
        res.status(400).send(err);
    }
};
/**
 * END SIGNALEMENTS METHODES
 */

/**
 * CHANNELS METHODES
 */
const banishChannel = async (req, res) => {

    let channel = {
        channel_id: req.params.id
    };

    Channel.findById(channel, () => {

        try {
            banishChannelByID(channel).then(async () => {
                return await Channel.updateOne({ _id: req.params.id },{
                    $set: {
                        status: "BANISH"
                    }
                });
            });

            res.status(200).send({
                message: 'La chaîne est bannie. Ses signalements ont étés supprimés',
                banish: channel,
            });
        } catch (err) {
            res.status(400).send({
                message: err
            });
        }

    })

};
const unbanChannel = async (req, res) => {
    let channel = {
        channel_id: req.params.id
    };

    Channel.findById(channel, () => {

        try {
            banishChannelByID(channel).then(async () => {
                return await Channel.updateOne({ _id: req.params.id },{
                    $set: {
                        status: "ACTIVE"
                    }
                });
            });

            res.status(200).send({
                message: 'La chaîne n\'est plus bannie.',
                banish: channel,
            });
        } catch (err) {
            res.status(400).send({
                message: err
            });
        }

    })
};
const getChannels = async (req, res) => {
    try {
        const channels = await getAllChannels();

        res.status(200).send(channels);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const getOneChannel = async (req, res) => {
    try {
        const channel = await getChannel(req.params.id);

        res.status(200).send(channel);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const updateChannel = async (req, res) => {
    let data = {
        channel_name: req.body.name,
        avatar: req.body.avatar,
    };

    try {
        await updateChannelByID(req.params.id, data);

        res.status(200).send({
            message: 'Chaîne mise à jour',
            update: data
        })
    } catch (err) {
        res.status(400).send(err);
    }
};
const getStreamChannel = async (req, res) => {
    try {
        const channels = await getAllStreamChannels();

        res.status(200).send(channels);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const deleteChannel = async (req, res) => {
    try {
        await deleteChannelByID(req.params.id);

        res.status(200).send({
            message: 'Chaîne supprimée'
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const getBanishChannels = async (req, res) => {
    try {
        let channels = await getAllBanishChannels();

        res.status(200).send(channels)
    } catch (err) {
        res.status(400).send(err);
    }
};
/**
 * END CHANNELS METHODES
 */

/**
 * RADIOS METHODES
 */
const addRadio = async (req, res) => {
    let radio = {
        radio_name: req.body.radio_name,
        logo: req.body.logo,
        direct_url: req.body.direct_url
    };

    try {
       let newRadio = await addNewRadio(radio);

        res.status(200).send(newRadio);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const getRadios = async (req, res) => {
    try {
        let radios = await getAllRadios();

        res.status(200).send(radios);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const getOneRadio = async (req, res) => {
    try {
        let radio = await getRadioByID(req.params.id);

        res.status(200).send(radio);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const updateOneRadio = async (req, res) => {
    let newRadio = {
        radio_name: req.body.radio_name,
        logo: req.body.logo,
        direct_url: req.body.direct_url
    };

    try {
        let radio = await updateRadioByID(newRadio, req.params.id);

        if (radio) {
            res.status(200).send({
                message: 'Radio mise à jour avec succès !',
                data: newRadio
            });
        }
    } catch (err) {
        res.status(400).send({
            message: 'La radio n\'existe pas'
        });
    }
};
const deleteOneRadio = async (req, res) => {
    try {
        const deleted = await deleteRadioByID(req.params.id);

        if (deleted) {
            res.status(200).send({
                message: 'Chaîne supprimée'
            });
        }
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
/**
 * END RADIOS METHODES
 */

/**
 * USERS METHODES
 */
const updateUser = async (req, res) => {

    let updateUser = {
        user_id: req.params.id,
        username: req.body.username,
        avatar: req.body.avatar
    };

    try {
        await updateOneUser(updateUser);

        res.status(200).send('Utilisateur mis à jour !');
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const updateUserPassword = async (req, res) => {

    let updateUser = {
        user_id: req.params.id,
        password: req.body.password
    };

    try {
        await updateOneUserPassword(updateUser);

        res.status(200).send('Mot de passe mis à jour !');
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const getUsers = async (req, res) => {
    try {
        const users = await getAllUsers();

        res.status(200).send(users);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const getOneUser = async (req, res) => {
    try {
        const user = await getUserById(req.params.id);

        res.status(200).send(user);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const getUserWithOAuth = async (req, res) => {
    try {
        let token = req.headers.authorization;
        const [bearer, receivedToken] = token.split(" ");

        if (bearer !== "Bearer") {
            res.status(400).send('Unauthorized');
        }

        const user = await getUserWithOAuthToken(receivedToken);

        res.status(200).send(user);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const getActiveUser = async (req, res) => {
    try {
        const users = await getAllActiveUsers();

        res.status(200).send(users);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const getInactiveUser = async (req, res) => {
    try {
        const users = await getAllInactiveUsers();

        res.status(200).send(users);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const deleteUser = async (req, res) => {
    try {
        await deleteUserById(req.params.id);

        res.status(200).send({
            message: "Utilisateur supprimé avec succès !"
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
/**
 * END USERS METHODES
 */

/**
 * STREAM METHODES
 */
const getFirstStream = (req, res) => {
    let channel = req.params.channel_id;
    let radio = req.query.radio_id;

    res.set('content-type', 'audio/mp3');
    res.set('accept-ranges', 'bytes');
    try {
        const stream = TailingReadableStream.createReadStream("Stream/Stream_"+channel+"_"+radio+".mp3", { timeout: 0 });

        stream.on('data', buffer => {
            res.write(buffer)
        });
    } catch (e) {
        res.status(404).send(e);
    }
};
const recordStream = async (req, res) => {
    let channel = req.params.channel_id;
    let radio = req.query.radio_id;

    try {
        await recordVoice(channel, radio);

        res.status(200).send({
            message: 'Record : On'
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const stopStream = async (req, res) => {
    try {
        await stopRecordVoice();
        res.status(200).send({
            message: 'Record : Off'
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
// Don't forget to register stream
// Mixe 2 stream
// Diffuse mixed stream ?
/**
 * END STREAM METHODES
 */

/**
 * STATISTIQUES METHODES
 */
const costUsers = async (req, res) => {
    try {
        let users = await costAllUsers();

        res.status(200).send(users);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costSubscribe = async (req, res) => {
    try {
        let users = await costAllSubscribers();

        res.status(200).send(users);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costListen = async (req, res) => {
    try {
        let listen = await costAllListen();

        res.status(200).send({
            total_ecoute: listen
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costStreamsListen = async (req, res) => {
    try {
        let listen = await costAllStreamsListen();

        res.status(200).send({
            total_ecoute_stream: listen
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costRadiosListen = async (req, res) => {
    try {
        let listen = await costAllRadiosListen();

        res.status(200).send({
            total_ecoute_radios: listen
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costRadios = async (req, res) => {
    try {
        let radios = await costAllRadios();

        res.status(200).send({
            nombre_radios: radios
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costCreatedStream = async (req, res) => {
    try {
        let created_stream = await costAllCreatedStream();

        res.status(200).send({
            stream_crée: created_stream
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costCreatedStreamForUser = async (req, res) => {
    try {
        let created_stream = await costAllCreatedStreamByUser(req.params.id);

        res.status(200).send({
            stream_crée: created_stream
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costFavoriteForUser = async (req, res) => {
    try {
        let favoris = await costAllFavoriteForUser(req.params.id);

        res.status(200).send({
            favoris: favoris
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costListenForUser = async (req, res) => {
    try {
        let listen = await costAllListenForUser(req.params.id);

        res.status(200).send({
            nombre_ecoutes: listen
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costSignalementsForUser = async (req, res) => {
    try {
        let signalements = await costAllSignalementsForUser(req.params.channel_id);

        res.status(200).send(signalements);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costSignalements = async (req, res) => {
    try {
        let signalements = await costAllSignalements();

        res.status(200).send(signalements);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costActiveUsers = async (req, res) => {
    try {
        let users = await costAllActiveUsers();

        res.status(200).send(users);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costInactiveUsers = async (req, res) => {
    try {
        let users = await costAllInactiveUsers();

        res.status(200).send(users);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costActiveChannels = async (req, res) => {
    try {
        let channels = await costAllActiveChannels();

        res.status(200).send({
            nombre_chaines_active: channels
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costInactiveChannels = async (req, res) => {
    try {
        let channels = await costAllInactiveChannels();

        res.status(200).send({
            nombre_chaines_inactive: channels
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costBanishChannels = async (req, res) => {
    try {
        let channels = await costAllBanishChannels();

        res.status(200).send({
            nombre_chaines_bannie: channels
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costRegisteredThisMonth = async (req, res) => {
    try {
        let registered = await costAllRegisteredThisMonth();

        res.status(200).send(registered);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costPlanStreamForUser = async (req, res) => {
    try {
        let plan = await costAllPlanStreamForUser(req.params.id);

        res.status(200).send({
            nombre_plannification: plan
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const costPlan = async (req, res) => {
    try {
        let plan = await costAllPlan();

        res.status(200).send({
            nombre_plannification: plan
        });
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
/**
 * END STATISTIQUES METHODES
 */

module.exports = {
    newSignalement: newSignalement,
    getSignalements: getSignalements,
    getSignalementsByChannelID: getSignalementsByChannelID,
    deleteSignalement: deleteSignalement,
    updateSignalement: updateSignalement,

    banishChannel: banishChannel,
    unbanChannel: unbanChannel,
    getChannels: getChannels,
    getOneChannel: getOneChannel,
    updateChannel: updateChannel,
    getStreamChannel: getStreamChannel,
    deleteChannel: deleteChannel,
    getBanishChannels: getBanishChannels,

    addRadio: addRadio,
    getRadios:getRadios,
    getOneRadio:getOneRadio,
    updateOneRadio: updateOneRadio,
    deleteOneRadio: deleteOneRadio,

    updateUser: updateUser,
    updateUserPassword: updateUserPassword,
    getUsers: getUsers,
    getOneUser: getOneUser,
    getUserWithOAuth: getUserWithOAuth,
    getActiveUser: getActiveUser,
    getInactiveUser: getInactiveUser,
    deleteUser: deleteUser,

    getFirstStream: getFirstStream,
    recordStream: recordStream,
    stopStream: stopStream,

    costUsers: costUsers,
    costSubscribe: costSubscribe,
    costListen: costListen,
    costStreamsListen: costStreamsListen,
    costRadiosListen: costRadiosListen,
    costActiveChannels: costActiveChannels,
    costRadios: costRadios,
    costCreatedStream: costCreatedStream,
    costCreatedStreamForUser: costCreatedStreamForUser,
    costFavoriteForUser: costFavoriteForUser,
    costListenForUser: costListenForUser,
    costSignalementsForUser: costSignalementsForUser,
    costSignalements: costSignalements,
    costActiveUsers: costActiveUsers,
    costInactiveUsers: costInactiveUsers,
    costInactiveChannels: costInactiveChannels,
    costBanishChannels: costBanishChannels,
    costRegisteredThisMonth: costRegisteredThisMonth,
    costPlanStreamForUser: costPlanStreamForUser,
    costPlan: costPlan
};
