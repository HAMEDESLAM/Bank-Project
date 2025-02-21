// app.js
require('dotenv').config();
const express = require('express');
const mongoose = require('mongoose');
const session = require('express-session');
const path = require('path');
const app = express();
const MongoStore = require('connect-mongo');

console.log("http://localhost:8000/")
app.use(express.json());

// Session configuration
app.use(
    session({
        secret: process.env.SESSION_SECRET,
        resave: false,
        saveUninitialized: false,
        store: MongoStore.create({ mongoUrl: process.env.DataBase_URL }),
        cookie: { 
            secure: false, 
            httpOnly: true, 
            maxAge: 1000 * 60 * 60 * 24 
        },
    })
);

// db connection
mongoose.connect(process.env.DataBase_URL);
const db = mongoose.connection;
db.on('error', (error) => console.log(error.message));
db.on('open', () => console.log("Database connected"));

// html setup
app.use('/', express.static('Public'));

// user api route
const usersRoute = require('./routes/users');
app.use('/user', usersRoute);

app.listen(8000, () => console.log('Server running on port 8000'));