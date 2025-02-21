const express = require('express');
const router = express.Router();
const User = require('../models/user');
const bcrypt = require('bcryptjs');

// Register route
router.post('/register', async (req, res) => {
    const { fullname, birthDate, nationalId, address, phoneNumber, email, password } = req.body;
    try {
        const userExists = await User.findOne({ email });
        if (userExists){
            return res.status(6).json({ message: 'User already exists' });
        }

        const user = new User({ fullname, birthDate, nationalId, address, phoneNumber, email, password });
        await user.save();
        req.session.user = user;
        res.status(201).json({ message: 'User registered successfully' });
    } catch (err) {
        res.status(500).json({ message: err.message });
    }
});

// Update user route
router.put('/update', isAuthenticated, async (req, res) => {
    const { fullname, phoneNumber, email } = req.body;
    try {
        const user = await User.findOne({ email });
        if (!user) return res.status(404).json({ message: "User Not Found" });

        user.phoneNumber = phoneNumber || user.phoneNumber;
        user.fullname = fullname || user.fullname;

        await user.save();
        req.session.user = user;
        res.json({ message: 'User updated successfully', user });
    } catch (err) {
        res.status(500).json({ message: err.message });
    }
});

// Login route
router.post('/login', async (req, res) => {
    const { email, password } = req.body;
    try {
        const user = await User.findOne({ email }); 
        if (!user) return res.status(400).json({ message: 'Invalid email or password' });

        const isMatch = await user.matchPassword(password);
        if (!isMatch) return res.status(400).json({ message: 'Invalid email or password' });

        req.session.user = user;
        res.json({ message: 'Login successful' });
    } catch (err) {
        res.status(500).json({ message: err.message });
    }
});

// Logout route
router.post('/logout', (req, res) => {
    req.session.destroy((err) => {
        if (err) return res.status(500).json({ message: 'Logout failed' });
        res.clearCookie('connect.sid');
        res.json({ message: 'Logout successful' });
    });
});

// Protected route example
router.get('/profile', isAuthenticated, (req, res) => {
    res.json({ user: req.session.user });
    
});

function isAuthenticated(req, res, next) {
    if (req.session.user) return next();
    res.status(401).json({ message: 'Unauthorized' });
}

module.exports = router;