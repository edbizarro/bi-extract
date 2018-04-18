<p align="center">
  <h1>BI - Extract</h1>
</p>

> Extract data from sources

<p align="center">
  <img width=100% src="https://raw.githubusercontent.com/edbizarro/bi-extract/master/code-example.png">
</p>

<a href='https://semaphoreci.com/edbizarro/bi-extract'> <img src='https://semaphoreci.com/api/v1/edbizarro/bi-extract/branches/master/badge.svg' alt='Build Status'></a> <a href="https://styleci.io/repos/126762235"><img src="https://styleci.io/repos/126762235/shield?branch=master" alt="StyleCI"></a> <a href="https://app.fossa.io/projects/git%2Bgithub.com%2Fedbizarro%2Fbi-extract?ref=badge_shield" alt="FOSSA Status"><img src="https://app.fossa.io/api/projects/git%2Bgithub.com%2Fedbizarro%2Fbi-extract.svg?type=shield"/></a>
 <a href="https://lbesson.mit-license.org/"><img src="https://img.shields.io/github/license/edbizarro/bi-extract.svg" alt="LIcense"></a> 

---


[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fedbizarro%2Fbi-extract.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Fedbizarro%2Fbi-extract?ref=badge_large)

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