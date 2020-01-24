module.exports = (app) => {

    const book = require('../controllers/books');

    app.post('/book', book.postBook);
    app.get('/books', book.getBooks);
    app.get('/book/:id', book.getOneBook);
    app.put('/book/:id', book.updateBook);
    app.delete('/book/:id', book.deleteBook);

};
