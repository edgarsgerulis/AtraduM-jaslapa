const express = require('express');
const bodyParser = require('body-parser');
const mongoose = require('mongoose');

const app = express();
const port = 3000;

app.use(bodyParser.urlencoded({ extended: true }));

// Connect to MongoDB
mongoose.connect('mongodb://localhost:27017/lostfound', { useNewUrlParser: true, useUnifiedTopology: true });

// Create a schema for your lost and found items
const itemSchema = new mongoose.Schema({
    what: String,
    where: String,
    when: String
});

const Item = mongoose.model('Item', itemSchema);

// Endpoint to handle form submissions
app.post('/submit', (req, res) => {
    const newItem = new Item({
        what: req.body.what,
        where: req.body.where,
        when: req.body.when
    });

    newItem.save((err) => {
        if (err) {
            console.error(err);
            res.status(500).send('Error saving item');
        } else {
            res.status(200).send('Item saved successfully');
        }
    });
});

app.listen(port, () => {
    console.log(`Server running on port ${port}`);
});
