var connection = require('./../config');
module.exports.register = function(req, res) {
    var today = new Date();
    var users = {
        "fullname": req.body.fullname,
        "email": req.body.email,
        "password": req.body.password,
        "confirmpassword": req.body.confirmpassword,
        "mobile": req.body.mobile,
        "birthdate": req.body.birthdate,
        "streetno": req.body.streetno,
        "streetname": req.body.streetname,
        "complement": req.body.complement,
        "city": req.body.city,
        "state": req.body.state,
        "country": req.body.country,
        "postalcode": req.body.postalcode,
        "isactive": 1,
        "createddate": today,
        "modifieddate": today
    }
    connection.query('INSERT INTO users SET ?', users, function(error, results, fields) {
        if (error) {
            res.json({
                status: false,
                message: 'there are some error with query'
            })
        } else {
            res.json({
                status: true,
                data: results,
                message: 'user registered sucessfully'
            })
        }
    });
}