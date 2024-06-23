Berikut hasil projek laravel kelas yang saya buat

Sebelum menjalankan projek laravel kelas, lakukan lah hal berikut
1. buat database kelas di mySQL
2. buat file .env dalam projek laravel kelas, dan ganti nama database ke kelas
3. lakukan composer update
4. jalakan perintah migrate:refresh --seed untuk membuat tabel dan memasukan data kedalam tabel
5. Jalankan perintah untuk generate app key
6. jalankan projek laravel kelas

Halaman awal yang terbuka pada projek laravel kelas, merupakan halaman landing page responsive
dalam halaman landing page ini sudah ada bagian yang dinamis, sehingga bisa di ubah melalui halaman admin, dengan cara akses url /admin atau /admin/login

Halaman admin terdapat bagian, dimana satu untuk mengatur konten dinamis landing page dan melakukan simulasi perhitungan pendapatan
Sebelum melakukan simulai pendapatan, data di menu admin seperti mentor, kelas, dan video di isi terlebih dahulu.

Perhitungan dapat dilakukan di menu admin pendapatan, dimana di dalamnya sudah ada list mentor yang terdaftar dalam projek laravel kelas.
tekan hitung untuk mengeluarkan hasil perhitungan pendapatan Mentor.

Pada projek laravel kelas ini, user bisa melakukan register dan login untuk membeli paket
user harus terdaftar, dan jika sudah bisa masuk ke akun dan memilih paket untuk dibeli melalui halaman awal (landing page).
Jika user sudah membeli paket, user bisa masuk ke kelas melalui dropdown menu di halaman landing page dan menu kelas.
Dalam kelas ada video yang bisa di buka, dan proses simulai durasi waktu tonton bisa dilakukan.
tombol start akan memulai durasi dan jika di hentikan maka otomatis akan mengirim waktu durasi ke database
