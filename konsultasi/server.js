const express = require('express');
const app = express();
const server = require('http').createServer(app);
const io = require('socket.io')(server);
const { SerialPort } = require('serialport')
const { ReadlineParser } = require('@serialport/parser-readline')
const koneksi = require('./koneksi'); // Import file koneksi.js

const bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// Create a port
const port = new SerialPort({
  path: 'COM3',
  baudRate: 9600,
})

// Read data that is available but keep the stream in "paused mode"
port.on('readable', function () {
  console.log('Data:', port.read().toString('hex'));
  
})

// Switches the port into "flowing mode"
port.on('data', function (data) {
  console.log('Data:', data)
  io.emit('message', data.toString());
})

// Pipe the data into another stream (like a parser or standard out)
const parser = port.pipe(new ReadlineParser({ delimiter: '\r\n' }))
parser.on('data', console.log)

// Rute untuk menerima permintaan insertData
app.post('/insertData', (req, res) => {
  const message = req.body.message; // Mengambil data dari permintaan
  
  // Memanggil fungsi insertData dari koneksi.js
  koneksi.insertData(message);
  
  // Mengirim respons sukses ke client
  res.send('Data berhasil disimpan');
});



// Serve static files
app.use(express.static('public'));

// Start the server
const portNumber = 8000;
server.listen(portNumber, () => {
  console.log(`Server running on http://localhost:${portNumber}`);
});

