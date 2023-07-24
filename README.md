# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

## Tutorial Penggunaan Perpustakaan Web SI Unmer Malang
1. Masuk ke menu login lalu masukkan username dan password setelah itu klik login
2. Berikutnya masuk di dashboard terdapat menu peminjaman dan menu masters terdapat pegawai dan menu mahasiswa terdapat buku selanjutnya logout.
3. Pada menu mahasiswa klik tambah mahasiswa kemudian masukkan nama lengkap, kelas, Nim, alamat, jenis kelamin lalu klik simpan
4. Pada menu buku klik tambah buku kemudian masukkan kode buku, tahun terbit, judul buku, pengarang dan penerbit lalu klik simpan
5. Pada menu pegawai klik tambah pegawai kemudian masukkan nama lengkap, username dan password lalu klik simpan
6. Lalu pada menu peminjaman klik tambah peminjaman buku kemudian masukkan nama mahasiswa, pilih buku yang akan dipinjam setelah itu masukkan keterangan lalu klik simpan.
7. Setelah semuanya selesai pada bagian dashboard jumlah peminjaman, jumlah mahasiswa, dan jumlah buku akan bertambah dan akan muncul peminjaman terbaru.
8. Terakhir klik pada menu logout untuk keluar.
