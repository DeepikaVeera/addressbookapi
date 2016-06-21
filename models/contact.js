// Dependencies
var restful = require('node-restful');
var mongoose = restful.mongoose;

// Schema
var contactSchema = new mongoose.Schema({
    name: String,
    email: String,
    mobile: Number
});

// Return model
module.exports = restful.model('Contacts', contactSchema);
