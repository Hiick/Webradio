const mongoose = require('mongoose'),
    Book = require('../models/books');

const getBooks = (req, res) => {
    Book.find().exec( (e, books) => {
        if (e) {
            res.status(401).send(e)
        } else {
            res.status(200).json({
                book: books,
                code: 200
            })
        }
    });
};

const postBook = (req, res) => {
    let data = req.body;
    if (data.title === undefined || data.title.trim() === '') {
        res.status(204).json({
            error: true,
            code: 204
        })
    } else if (data.description === undefined || data.description.trim() === ''|| data.description.length <= 5) {
        res.status(204).json({
            error: true,
            code: 204
        })
    } else {
        let book = Book(data);
        book.save((e) => {
            if (e) {
                res.status(401).send(e)
            } else {
                res.status(201).json({
                    message: "Book has been added",
                    code: 201
                })
            }
        });
    }
};

const getOneBook = (req, res) => {
    Book.findById(req.params.id).exec( (e, book) => {
        if (e) {
            res.status(401).send(e)
        } else {
            res.status(200).json({
                book: book,
                code: 200
            })
        }
    });
};

const deleteBook = (req, res) => {
    Book.findOneAndRemove(req.params.id).exec((e) => {
        if (e) {
            res.status(401).send(e)
        } else {
            res.status(200).json({
                product: "Book has been deleted",
                code: 200
            })
        }
    })
};

const updateBook = (req, res) => {
    let data = req.body;
    Book.findOneAndUpdate(req.params.id, data).exec((e) => {
        if (e) {
            res.status(401).send(e)
        } else {
            res.status(201).json({
                message: "Book has been updated",
                code: 201
            })
        }
    });
};

module.exports = {
    postBook,
    getBooks,
    getOneBook,
    updateBook,
    deleteBook
};
