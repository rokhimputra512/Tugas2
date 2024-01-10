<h3>Cara Menginstall atau setup Code Laravel ini</h3>
<p>Pertama cuma CMD di C:\xampp\htdocs</p>
<p>Kemudian ketik " git clone https://github.com/rokhimputra512/Tugas2.git "</p>
<p>Kemudian ketik " composer update "</p>
<p>Lalu ketik " cp .env.example .env "</p>
<p>Ganti env nya sesuai dibawah ini :</p>
<p>DB_CONNECTION=mysql</p>
<p>DB_HOST=127.0.0.1</p>
<p>DB_PORT=3306</p>
<p>DB_DATABASE=tugas2</p>
<p>DB_USERNAME=root</p>
<p>DB_PASSWORD=</p>
<p>Buat database di MySQL dengan nama "tugas2"</p>
<p>Setelah itu ketik ini juga</p>
<p>" php artisan key:generate "</p>
<p>" php artisan migrate --seed "</p>
<p>" php artisan serve "</p>