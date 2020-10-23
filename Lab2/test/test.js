var assert = require('assert')
var app = require('../index')
let chai = require('chai');
const chaiHttp = require('chai-http')

chai.use(chaiHttp)



describe('GET Home', () => {
    it('Should return 200', () => {
      chai
        .request(app)
        .get('/', (err, res) => {
          const result = res.statusCode
          expect(result).to.equal(200)
        })
    })
    it('Should say Hello World', () => {
        chai
        .request(app)
        .get('/', (err, res) => {
          const result = res.body
          expect(result).to.equal("Hello World")
        })
    });
  })