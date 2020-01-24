const mongoose = require('mongoose'),
    Schema = mongoose.Schema;

const BookSchema = new Schema({
    title: { type: String, required: true },
    description: { type: String, required: true }
});

BookSchema.pre('save', next => {
    if (!this.createdAt) {
        this.createdAt = new Date();
    }
    next();
});

module.exports = mongoose.model('book', BookSchema);
