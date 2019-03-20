<?php

namespace Edbizarro\BiExtract\Extractors;

class CsvExtractor extends Extractor
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

    /**
     * Extract columns and rows.
     *
     * @param $source
     *
     * @return \Generator
     */
    public function extract($source, $delimiter = ',', $enclosure = '"'): \Generator
    {
        $this->delimiter = $delimiter;
        $this->enclosure = $enclosure;

        $handle = fopen($source, 'rb');

        while (($row = fgetcsv($handle, 0, $delimiter, $enclosure)) !== false) {
            if (!$this->columns) {
                $this->columns = $row;
            } else {
                yield $this->makeRow($row);
            }
        }

        fclose($handle);
    }

    /**
     * Converts the row string to array.
     *
     * @param string $row
     *
     * @return array
     */
    protected function makeRow(array $row): array
    {
        $data = [];
        foreach ($this->columns as $index => $column) {
            $data[$column] = $row[$index];
        }

        return $data;
    }
}
