process.env.NODE_ENV = 'test';

const mongoose = require('mongoose'),
    Book = require('../src/models/books'),
    mocha = require('mocha'),
    chai = require('chai'),
    chaiHttp = require('chai-http'),
    server = require('../app'),
    should = chai.should();

chai.use(chaiHttp);

describe('Remove all books', () => {
    beforeEach(next => {
        Book.deleteMany({}, err => {
           next();
       })
    })
});

describe('Add book', () => {
    it('it should add book', (next) => {
        let book = {
            title: 'Zoubida',
            description: 'Zoubidou'
        };

        chai.request(server)
            .post('/book')
            .send(book)
            .end((err, res) => {
                res.should.have.status(201);
                //res.should.have.property('message').eql('Product has been added');
                //res.should.have.property('code');
                res.should.be.a('object');
                next();
            });
    });

    it('it should not add book', (next) => {
        let book = {
            name: 'Zoubido',
            description: 'Ah',
        };

        chai.request(server)
            .post('/book')
            .send(book)
            .end((err, res) => {
                res.should.have.status(204);
                //res.should.have.property('message', 'Product has been added');
                //res.should.have.property('code');
                res.should.be.a('object');
                next();
            });
    });
});


