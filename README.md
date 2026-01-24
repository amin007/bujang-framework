# Dokumentasi Bujang Framework (Versi Fungsi Sepenuhnya)

## Pengenalan

Bujang Framework ialah rangka kerja PHP yang ringkas, pantas dan berasaskan fungsi sepenuhnya tanpa penggunaan kelas. Ia direka untuk memberikan struktur asas yang mudah dikembangkan mengikut keperluan projek. Rangka kerja ini menekankan minimalisme, modulariti dan kefungsian yang jelas.

---

## Ciri Utama &#128421;

* Berasaskan fungsi sepenuhnya (tiada OOP)
* Pengurusan laluan melalui fungsi carian fail
* Struktur folder yang konsisten dan mudah diurus
* Tetapan projek melalui `tatarajah.php`
* Sokongan untuk subfolder dan hierarki paparan
* Debug boleh dihidupkan atau dimatikan melalui tetapan

---

## Struktur Direktori

```
/
|-- index.php
|-- bujang.php
|-- tatarajah.php
|
|-- mencari/
	|-- utama.php
	|-- 404.php
	|
	|-- khidmat/
	|	|-- pengaturcaraan.php
	|
	|-- barang/
	|	|-- komputer.php
	|
	|-- cinta/
		|-- diterima/
		|	|--  senarai.php
		|-- ditolak/
		|	|-- senarai.php
|
```

---

## Fungsi Penting

### 1. `bujang_segmen()`

Menjana senarai segmen URL untuk menentukan paparan.

### 2. `bujang_tentukan_fail($seg)`

Menentukan fail paparan berdasarkan segmen URL, menggunakan carian automatik.

### 3. `GetContents($dir)`

Mengambil semua fail dalam folder termasuk subfolder.

### 4. `GetMatchingFiles($files, $search)`

Mencari fail berdasarkan padanan corak (wildcard disokong).

### 5. `bujang_papar($fail, $data)`

Memaparkan fail paparan yang sepadan.

---

## Fail Tetapan: `tatarajah.php`

Digunakan untuk mengawal tetapan asas rangka kerja:

* Halaman utama
* Halaman ralat
* Mod debug

---

## Aliran Operasi

1. Pengguna melayari URL
2. URL dipecahkan menjadi segmen
3. Fail dicari dalam folder `mencari/`
4. Jika padanan ditemui, halaman diload
5. Jika gagal, halaman `404.php` dipaparkan

---

## Lesen

Projek ini menggunakan lesen **GNU AGPL-3.0**.
Ringkasan lesen:

* Bebas digunakan, diubah suai dan diedarkan
* Kod sumber mesti didedahkan jika diedar
* Lesen yang sama mesti dikekalkan
* Aplikasi rangkaian wajib mendedahkan kod sumber

Teks penuh lesen boleh dirujuk di:
[https://choosealicense.com/licenses/agpl-3.0/](https://choosealicense.com/licenses/agpl-3.0/)


**Kebenaran**
- &#x2705; Penggunaan komersial
- &#x2705; Pengedaran
- &#x2705; Pengubahsuaian
- &#x2705; Penggunaan paten
- &#x2705; Penggunaan peribadi

**Syarat**
- &#x2139; Dedahkan sumber
- &#x2139; Notis lesen dan hak cipta
- &#x2139; Lesen yang sama
- &#x2139; Nyatakan perubahan

**Had**
- &#x274C; Liabiliti
- &#x274C; Jaminan

---

## Nota

Dokumentasi ini boleh dikembangkan lagi dengan bahagian:

* Contoh penggunaan
* Panduan modul lanjutan
* Pembangunan versi 1.2
* Standard penamaan fungsi dan folder

---

## nota dalam markdown daa
* [markdown NOTE-test](https://github.com/sinsukehlab/NOTE-test)
* [markdown emoji-cheat-sheet](https://github.com/ikatyang/emoji-cheat-sheet)

> [!NOTE]
> This is a note.

> [!TIP]
> This is a tip. (Supported since 14 Nov 2023)

> [!IMPORTANT]
> Crutial information comes here.

> [!CAUTION]
> Negative potential consequences of an action. (Supported since 14 Nov 2023)

> [!WARNING]
> Critical content comes here.

> [!NOTE]\
> This is a note. (hard line break `\`)

> [!NOTE]
> This is a note.
> multiple lines with a soft line break

> [!NOTE]
> This is a note.\
> multiple lines with a hard line break (`\`)

> [!NOTE] No character is allowed except a line break.
> This is a note.

> [!NOTE] No character is allowed except a line break.\
> This is a note.

> [!NOTE]

# Sumber ilham kawan-kawan
* Programming
  * [PHP Releases](https://windows.php.net/downloads/releases)
  * [Laragon](https://laragon.org)
  * [Learn-Php-For-Wordpress](https://code.tutsplus.com/courses/learn-php-for-wordpress/lessons/php-in-the-loop)
  * [PHP Codeingiter](https://codeigniter.com)
  * [PHP Cakephp](https://cakephp.org)
  * [PHP Laravel](https://laravel.com)
* Stylesheet
  * [Bootstrap](http://getbootstrap.com)
  * [Bootstrap.Themes](http://bootstrap.themes.guide)
  * [AdminLTE](https://adminlte.io/themes/AdminLTE)
  * [animate.css](https://daneden.github.io/animate.css)
  * [Sweet Alert](http://t4t5.github.io/sweetalert)
  * [FontAwesome](http://fortawesome.github.io/Font-Awesome)
  * [Enjoy Css](https://enjoycss.com)
* Javascript
  * [jQuery](http://jquery.com)
  * [jQuery.Form](http://malsup.com/jquery/form)
  * [backstretch](http://srobbin.com/jquery-plugins/backstretch)
* Gambar Percuma
  * [7-themes](http://7-themes.com)
  * [Pexels](https://pexels.com)
  * [Pixabay](https://pixabay.com)
  * [Unslpash](https://unsplash.com)
* Lain-lain
  * [markdown-cheatsheet](https://guides.github.com/pdfs/markdown-cheatsheet-online.pdf)
  * [Comparison of web frameworks](https://en.wikipedia.org/wiki/Comparison_of_web_frameworks)