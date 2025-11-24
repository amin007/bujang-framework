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
- 🔵 Dedahkan sumber
- 🔵 Notis lesen dan hak cipta
- 🔵 Lesen yang sama
- 🔵 Nyatakan perubahan

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
