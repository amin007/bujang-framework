# Bujang Framework Documentation (Fully Functional Version)

## Introduction

Bujang Framework is a simple, fast PHP framework built entirely on functional programming without the use of classes. It is designed to provide a basic structure that can be easily expanded according to user needs.

---

## Main Features &#128421;

* Fully functional-based (no OOP)
* Route management using file search functions
* Consistent and easily managed folder structure
* Project configuration using `config.php`
* Support for subfolders and view hierarchy
* Debugging can be enabled or disabled via settings

---

## Directory Structure

```
|-- index.php
|-- bujang.php
|-- config.php
|
|-- discover/
	|-- main.php
	|-- 404.php
	|
	|-- services/
	|	|-- programming.php
	|
	|-- products/
	|	|-- computer.php
	|
	|-- love/
		|-- accepted/
		|	|-- list.php
		|-- rejected/
		|	|-- list.php
|
```

---

## Key Functions

### 1. `bujang_segmen()`

Generates a list of URL segments to determine the view.

### 2. `bujang_tentukan_fail($seg)`

Determines the view file based on the URL segments, using an automatic search.

### 3. `GetContents($dir)`

Retrieves all files in a folder, including subfolders.

### 4. `GetMatchingFiles($files, $search)`

Finds files based on pattern matching (wildcards supported).

### 5. `bujang_papar($fail, $data)`

Displays the corresponding view file.

---

## Configuration File: `config.php`

Used to control the basic settings of the framework:

* Homepage
* Error page
* Debug mode

---

## Operation Flow

1. User visits a URL
2. URL is split into segments
3. Files are searched in the `discover/` folder
4. If a match is found, the page is loaded
5. If failed, the `404.php` page is displayed

---

## License

This project uses the **GNU AGPL-3.0** license.  
License summary:

* Free to use, modify, and distribute
* Source code must be disclosed if distributed
* Same license must be retained
* Network applications are required to disclose source code

Full license text available at:  
[https://choosealicense.com/licenses/agpl-3.0/](https://choosealicense.com/licenses/agpl-3.0/)

**Permissions**
- &#x2705; Commercial use
- &#x2705; Distribution
- &#x2705; Modification
- &#x2705; Patent use
- &#x2705; Private use

**Conditions**
- &#x2139; Disclose source
- &#x2139; License and copyright notice
- &#x2139; Same license
- &#x2139; State changes

**Limitations**
- &#x274C; Liability
- &#x274C; Warranty

---

## Notes

This documentation can be further extended with the following sections:

* Usage examples
* Advanced module guides
* Version 1.2 development notes
* Function and folder naming standards
