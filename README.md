<p align="center">
  <h2>BI - Extract</h2>
</p>

> Extract data from sources

<p align="center">
[![Github All Releases](https://img.shields.io/github/downloads/edbizarro/bi-extract/total.svg?style=for-the-badge)](https://github.com/edbizarro/bi-extract) [![forthebadge](https://forthebadge.com/images/badges/contains-cat-gifs.svg)](https://forthebadge.com)
</p>

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

