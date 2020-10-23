
const express = require('express')
let appInsights = require('applicationinsights');
appInsights.setup("0bbba709-d776-48a2-9333-383f9ccb1479").start();
const app = express()
const port = 80

app.get('/hw', (req, res) => {
  res.send('Hello World!')
})

app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`)
})
app.use('/', express.static('/public'));
module.exports = app;