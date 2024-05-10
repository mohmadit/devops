// server.js
const express = require('express');
const bodyParser = require('body-parser');

const app = express();
const PORT = process.env.PORT || 3000;

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// Route for receiving code from the front end
app.post('/save-code', (req, res) => {
    const code = req.body.code;
    // يمكنك تنفيذ الإجراءات المناسبة هنا، مثل حفظ الكود في ملف أو قاعدة بيانات
    res.send('Code saved successfully!');
});

app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
