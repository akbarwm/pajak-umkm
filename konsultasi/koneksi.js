const mysql = require('mysql');

// Konfigurasi koneksi MySQL
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'pajak2'
});

// Membuka koneksi ke MySQL
connection.connect((err) => {
  if (err) {
    console.error('Koneksi ke MySQL gagal:', err);
    return;
  }
  console.log('Terhubung ke MySQL');
});

function insertData(message) {
  const query = 'INSERT INTO tb_entry VALUES (?)'; // Sesuaikan dengan struktur tabel dan kolom Anda
  connection.query(query, [message], (err, result) => {
    if (err) {
      console.error('Gagal menyimpan data ke MySQL:', err);
      return;
    }
    console.log('Data berhasil disimpan ke MySQL');
  });
}

module.exports = {
  insertData
};