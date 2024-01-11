<h3>Cara Menginstall atau setup Code Laravel ini</h3>
<p>Pertama-tama buka folder di C:\xampp\htdocs</p>
<p>Lalu extract file .zip ini di C:\xampp\htdocs</p>
<p>Buka CMD di C:\xampp\htdocs\Tugas2-main</p>
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
<p>Atau bisa Download SQL Nya Disini</p>
<p>https://drive.google.com/file/d/14IDGsvW_NhuFYHElyrfpGd4mVDWTlqPx/view?usp=sharing</p>
<p>Setelah didownload kemudian diimport ke MySQL dengan nama "tugas2"</p>
<p>Setelah itu ketik ini juga diterminal</p>
<p>" php artisan key:generate "</p>
<p>" php artisan migrate --seed "</p>
<p>" php artisan serve "</p>
<p>Lalu buka browser buka link ini</p>
<p>http://127.0.0.1:8000/</p>
