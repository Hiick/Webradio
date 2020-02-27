require('dotenv').config();
const Channel = require('../models/channel'),
    AudioRecorder = require('node-audiorecorder'),
    fs = require('fs'),
    moment = require('moment'),
    path = require('path');

const recordVoice = (channel) => {
    const DIRECTORY = 'record';
    const audioRecorder = new AudioRecorder({
        program: process.platform === 'win32' ? 'sox' : 'rec',
        silence: 0
    }, console);

    if (!fs.existsSync(DIRECTORY)) {
        fs.mkdirSync(DIRECTORY);
    }

    const file = 'Stream_'+channel+moment().format('_MMMM_Do_YYYY_h_mm_ss');
    const filename = path.join(DIRECTORY, file.concat('.mp3'));

    const fileStream = fs.createWriteStream(filename, { encoding: 'binary' });
    audioRecorder.start().stream().pipe(fileStream);
    return file;
};
const stopRecordVoice = () => {
    const audioRecorder = new AudioRecorder({
        program: process.platform === 'win32' ? 'sox' : 'rec',
        silence: 0
    }, console);
    audioRecorder.stop();
};

module.exports = {
    recordVoice,
    stopRecordVoice
};
