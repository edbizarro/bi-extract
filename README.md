<p align="center">
  <h2>BI - Extract</h2>
</p>

> Extract data from sources

[![pipeline status](https://gitlab.com/edbizarro/bi-extract/badges/master/pipeline.svg)](https://gitlab.com/edbizarro/bi-extract/commits/master)

<p align="center"><img width=100% src="https://raw.githubusercontent.com/edbizarro/bi-extract/master/csv-extractor-example.png"></p>

---

### Default Extractors

#### CSV

```php
<?php

/**
 *  Example CSV
 *
 *  name,email
 *  John Doe,johndoe@example.org
 */ 
$result = (new CsvExtractor)->extract('PATH/TO/CSV');

$result->each(function($row) {
  // var_dump($row);
});
```
![Github All Releases](https://img.shields.io/github/downloads/edbizarro/bi-extract/total.svg?style=for-the-badge) ![forthebadge](https://forthebadge.com/images/badges/contains-cat-gifs.svg)
