<p align="center"><img width=100% src="https://raw.githubusercontent.com/edbizarro/bi-extract/master/csv-extractor.png"></p>


<p align="center">
  <h2>BI - Extract</h2>
</p>

> Extract data from sources

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

![forthebadge](https://forthebadge.com/images/badges/contains-cat-gifs.svg)
