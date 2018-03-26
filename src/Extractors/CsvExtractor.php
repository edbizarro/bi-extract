<?php

namespace Edbizarro\BiExtract\Extractors;

use Edbizarro\BiExtract\Interfaces\ExtractInterface;
use Tightenco\Collect\Support\Collection;

class CsvExtractor
{
    /**
     * Extractor columns.
     *
     * @var array
     */
    public $columns;

    /**
     * The delimiter string.
     *
     * @var string
     */
    public $delimiter = ',';

    /**
     * The enclosure string.
     *
     * @var string
     */
    public $enclosure = '';

    public function extract($source): Collection
    {
        $handle = fopen($source, 'rb');
        $return = collect();

        while ($row = fgets($handle)) {
            if (! $this->columns) {
                $this->columns = $this->makeColumns($row);
            } else {
                $return->push($this->makeRow($row));
            }
        }
        fclose($handle);

        return $return;
    }

    /**
     * Converts the row string to array.
     *
     * @param  string  $row
     * @return array
     */
    protected function makeRow(string $row): array
    {
        $row = str_getcsv($row, $this->delimiter, $this->enclosure);
        $data = [];
        foreach ($this->columns as $column => $index) {
            $data[$column] = $row[$index - 1];
        }
        return $data;
    }
    /**
     * Make columns based on csv header.
     *
     * @param  string  $header
     * @return array
     */
    protected function makeColumns(string $header): array
    {
        $columns = array_flip(str_getcsv($header, $this->delimiter, $this->enclosure));
        foreach ($columns as $key => $index) {
            $columns[$key] = $index + 1;
        }
        return $columns;
    }
}