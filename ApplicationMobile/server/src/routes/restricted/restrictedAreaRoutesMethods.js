const {
    registerSignalement,
    getAllSignalements,
    getSignalementsByID,
    banishChannelByID
} = require('../../database/signalements');

const {
    getAllChannels,
    getChannel,
    updateChannelByID,
    getAllStreamChannels
} = require('../../database/channel');

const {
    updateOneUser,
    updateOneUserPassword
} = require('../../database/user');

const {
    generateStreamChunks,
    recordVoice,
    stopRecordVoice
} = require('../../database/stream');

const ObjectID = require('mongodb').ObjectID;
const Channel = require('../../models/channel'),
    mongodb = require('mongodb'),
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
/**
 * END CHANNELS METHODES
 */

/**
 * RADIOS METHODES
 */
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
/**
 * END USERS METHODES
 */

/**
 * STREAM METHODES
 */
const listenStream = (req, res) => {
    res.set('content-type', 'audio/mp3');
    res.set('accept-ranges', 'bytes');
    const stream = TailingReadableStream.createReadStream("record/Stream.mp3", { timeout: 0 });

    stream.on('data', buffer => {
        res.write(buffer)
    });
};
const recordStream = async (req, res) => {
    let channel = req.params.channel_id;
    try {
        const file = await recordVoice(channel);
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
const stopStream = async (req, res) => {
    try {
        await stopRecordVoice();
    } catch (err) {
        res.status(400).send({
            message: err
        });
    }
};
/**
 * END STREAM METHODES
 */

/**
 * PAYMENT METHODES
 */

/**
 * END PAYMENT METHODES
 */

module.exports = {
    newSignalement: newSignalement,
    banishChannel: banishChannel,
    getSignalements: getSignalements,
    getSignalementsByChannelID: getSignalementsByChannelID,

    getChannels: getChannels,
    getOneChannel: getOneChannel,
    updateChannel: updateChannel,
    getStreamChannel: getStreamChannel,

    updateUser: updateUser,
    updateUserPassword: updateUserPassword,

    listenStream: listenStream,
    recordStream: recordStream,
    stopStream: stopStream
};
