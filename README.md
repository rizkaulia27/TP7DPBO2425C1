# TP7DPBO2425C1

# Penjelasan Tema Website
Website Thrift Yuk merupakan sebuah platform berbasis web yang dirancang untuk memudahkan pengguna dalam mencari barang-barang thrift atau barang bekas berkualitas yang masih layak pakai. Melalui website ini, pengguna dapat melihat daftar barang thrift lengkap dengan informasi harga, warna, lokasi penjualan, dan nama penjual (seller) yang menawarkan produk tersebut. Website ini juga menyediakan sistem pengelolaan data berupa fitur CRUD (Create, Read, Update, Delete) untuk tiga entitas utama:
1. Barang → Menampilkan daftar barang thrift yang dijual.
2. Seller → Menampilkan data penjual atau pemilik barang thrift.
3. Lokasi → Menunjukkan lokasi tempat barang tersebut dijual atau disimpan.

Dengan konsep ini, website “Thrift Yuk” tidak hanya berfungsi sebagai katalog produk, tetapi juga sebagai sistem manajemen data penjual dan lokasi barang.

# Penjelasan Database
Database yang digunakan pada website Thrift Yuk terdiri dari tiga tabel utama, yaitu tabel Barang, tabel Seller, dan tabel Lokasi. Ketiga tabel ini saling berhubungan untuk membentuk sistem secara terorganisir dan mudah dipahami.
1. Tabel Barang berfungsi untuk menyimpan informasi mengenai setiap barang thrift yang dijual di website. Data yang tersimpan meliputi nama barang, harga, warna, serta informasi mengenai penjual (seller) dan lokasi tempat barang tersebut berada. Kolom seller dan lokasi di tabel ini merupakan relasi ke tabel Seller dan Lokasi, sehingga setiap barang dapat diketahui siapa penjualnya dan di mana barang tersebut tersedia.
2. Tabel Seller digunakan untuk menyimpan data para penjual yang terdaftar di website. Data yang tercatat pada tabel ini mencakup nama seller dan kontak yang bisa dihubungi. Dengan adanya tabel ini, pengguna dapat mengetahui siapa penjual dari setiap barang yang ditampilkan serta dapat menghubungi seller jika ingin menanyakan lebih lanjut mengenai produk.
3. Tabel Lokasi berfungsi untuk menyimpan informasi mengenai tempat atau toko fisik di mana barang thrift tersedia. Data yang tersimpan meliputi nama lokasi, alamat lengkap, dan kota. Tabel ini berguna agar pengguna dapat mengetahui lokasi penjual atau tempat thrift tersebut berada.

# Penjelasan Flow Code
Struktur kode pada website Thrift Yuk dibagi menjadi beberapa folder utama yang memiliki fungsi masing-masing agar sistem mudah dikelola dan dikembangkan. Secara garis besar, proyek ini menerapkan konsep MVC sederhana (Model–View–Controller), di mana setiap bagian memiliki peran yang spesifik untuk memisahkan logika program, tampilan, dan pengaturan data.
1. Folder assets/ : Folder ini berisi asset-asset yang akan digunakan pada website, bisa berupa gambar, video, audio dan lain-lain. 
2. Folder class/ : Folder ini berisi file-file PHP yang berperan sebagai model dalam sistem. Masing-masing file di sini berfungsi untuk mengatur koneksi dan interaksi antara program dengan database. Barang.php, Lokasi.php, dan Seller.php berisi class dan fungsi yang digunakan untuk melakukan operasi CRUD (Create, Read, Update, Delete) terhadap tabel masing-masing di database. Misalnya, Barang.php digunakan untuk menambah, mengedit, menampilkan, atau menghapus data barang thrift. Begitu pula Lokasi.php dan Seller.php menangani data lokasi dan penjual. Folder ini menjadi penghubung utama antara sistem dan database.
3. Folder config/ : Folder ini berfungsi untuk menyimpan pengaturan atau konfigurasi yang berkaitan dengan koneksi database. File db.php berisi kode untuk membuat koneksi ke database menggunakan mysqli atau PDO, sehingga file lain bisa mengakses data tanpa perlu menulis ulang kode koneksi. Dengan cara ini, struktur kode menjadi lebih efisien dan mudah dikelola.
4. Folder database/ : Folder ini berisi file db_thrift.sql, yaitu file yang digunakan untuk menyimpan struktur dan data awal database. File ini biasanya digunakan untuk meng-import database ke dalam sistem MySQL agar tabel dan datanya langsung terbentuk sesuai kebutuhan aplikasi.
5. Folder view/ : Folder ini berisi seluruh file yang berhubungan dengan tampilan antarmuka (frontend) yang akan dilihat oleh pengguna.
Beberapa file di dalamnya di antaranya: addBarang.php, addLokasi.php, addSeller.php → digunakan untuk menampilkan form penambahan data. editBarang.php, editLokasi.php, editSeller.php → digunakan untuk menampilkan form pengeditan data. barang.php, lokasi.php, seller.php → menampilkan daftar data barang, lokasi, dan seller yang telah tersimpan di database. header.php dan footer.php → digunakan untuk menampilkan bagian atas dan bawah halaman agar tampilan antar halaman tetap konsisten. Folder view ini memastikan semua interaksi pengguna dengan sistem ditampilkan dengan rapi melalui halaman web.
6. File index.php : File ini berfungsi sebagai halaman utama atau pintu masuk dari website Thrift Yuk. Di dalamnya terdapat pengaturan navigasi antar halaman serta pemanggilan file view sesuai dengan menu yang dipilih pengguna (misalnya ke halaman Barang, Seller, atau Lokasi). File ini juga berfungsi untuk menangani logika dasar seperti pemrosesan action saat menambah, mengedit, atau menghapus data.
7. File CSS (style.css) : File ini digunakan untuk mengatur tampilan website agar lebih menarik dan responsif. Di dalamnya terdapat pengaturan warna, ukuran, tata letak, serta elemen visual lainnya yang digunakan pada seluruh halaman.
8. File testcase.txt : Hanya file biasa untuk menyimpan testcase agar mudah saat ingin mencoba code

# Dokumentasi
- Tampilan Awal Program
<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/4078ed9b-849c-49fd-b810-b5801bd236bf" />

- CRUD Barang
https://github.com/user-attachments/assets/b211ae92-7447-4c1a-b281-145a7183a58e

- CRUD Seller
https://github.com/user-attachments/assets/e8a089e8-cadf-46e8-ab88-2fb37b16c58c

- CRUD Lokasi
https://github.com/user-attachments/assets/1431e9ea-f21f-45f6-969d-5c127b4a5b0a


