var express = require("express");
var bodyParser = require('body-parser');
var app = express();
   var authenticateController = require('./controllers/authentication');
var registerController = require('./controllers/register');
app.use(bodyParser.urlencoded({
    extended: true
}));
app.use(function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "*");
    next();
});
app.use(bodyParser.json());
/* route to handle login and registration */
app.post('/api/register', registerController.register);
app.post('/api/authenticate', authenticateController.authenticate);
app.listen(8012);