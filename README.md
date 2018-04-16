<p align="center">
  <h1>BI - Extract</h1>
</p>

> Extract data from sources

<p align="center"><img width=100% src="https://raw.githubusercontent.com/edbizarro/bi-extract/master/code-example.png"></p>
<a href="https://styleci.io/repos/126762235"><img src="https://styleci.io/repos/126762235/shield?branch=master" alt="StyleCI"></a>  <a href="https://lbesson.mit-license.org/"><img src="https://img.shields.io/github/license/edbizarro/bi-extract.svg" alt="LIcense"></a> 

---

### Default Extractors

#### Csv

The Csv extractor uses generator class to avoid consume excessive memory. 

```php
<?php

/**
 *  Example CSV
 *
 *  name,email
 *  John Doe,johndoe@example.org
 */ 
$result = (new CsvExtractor)->extract('PATH/TO/CSV');

foreach ($result as $row) {
    // var_dump($row);
}
```

![forthebadge](https://forthebadge.com/images/badges/contains-cat-gifs.svg)
