CREATE DATABASE fakultas;

CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum('laki-laki','perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOt NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);




/* id selalu unik
id kode dan nama
foreign key adalah relasi
kenpaa data jurusan dulu?
karena pada data mahasiswa ada id jurusan

ke sheel xampp untuk menghubungkan database
- comment mysql -u root : untuk mengyhubungakn koding kita ke mysql
ket : kalo tidak bisa di cmd ke xampp ---> shell
- comment show database ---> 
- comment (CREATE DATABASE fakultas)--> memhubungkan database fakutas
- comment use database --> untuk menggunakan database
- comment show database; ---> untuk melihat data kita
- comment show table; --->untuk melihat tabel kita
ket : sebelumnya copy paste koding tabel trs dienter
- comment desc jurusan --> untuk melihat deskripsi
-select * from jurusan; 
    --> mrngambil data
- insert into jurusan (kode, nama) values ("APBL", "Administrasi Publik");
  ----> untuk mennmbahkan data
-update mahasiswa set alamat = "Jl. jombang gang 1A" where id = 1;
 ---> untuk update data, oenting set sama whre idnya
- delete from mahasiswa where id = 2;
    --> untuk menghapus