require('dotenv').config();
const express = require('express');
const bodyParser = require('body-parser');
const Twilio = require('twilio');

const app = express();
app.use(bodyParser.json());

// Set up environment variables for security
const TWILIO_ACCOUNT_SID = process.env.TWILIO_ACCOUNT_SID;
const TWILIO_AUTH_TOKEN = process.env.TWILIO_AUTH_TOKEN;
const TWILIO_PHONE_NUMBER = process.env.TWILIO_PHONE_NUMBER;

const twilioClient = new Twilio(TWILIO_ACCOUNT_SID, TWILIO_AUTH_TOKEN);

// Endpoint to send SMS
app.post('/send-sms', (req, res) => {
    const { to, body } = req.body;
    twilioClient.messages.create({
        body: body,
        to: to,
        from: TWILIO_PHONE_NUMBER
    }).then(message => {
        console.log(message.sid);
        res.send('SMS sent successfully!');
    }).catch(error => {
        console.error(error);
        res.status(500).send('Failed to send SMS');
    });
});

const PORT = process.env.PORT || 3001;
app.listen(PORT, () => {
    console.log(`Server running on port ${PORT}`);
});
