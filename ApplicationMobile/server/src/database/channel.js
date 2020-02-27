require('dotenv').config();
const Channel = require('../models/channel');

const getAllChannels = async () => {
    return await Channel.find({});
};

const getChannel = async (channel_id) => {
    return await Channel.findById({ _id: channel_id})
};

const updateChannelByID = async (channel_id, data) => {
    return await Channel.updateOne({_id: channel_id}, {
        $set: {
            channel_name: data.channel_name,
            avatar: data.avatar
        }
    })
};

const getAllStreamChannels = async () => {
    return await Channel.find({ live: true });
};

module.exports = {
    getAllChannels,
    getChannel,
    updateChannelByID,
    getAllStreamChannels
};
