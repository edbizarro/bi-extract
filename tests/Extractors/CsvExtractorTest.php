<?php

namespace Edbizarro\BiExtract\Tests\Extractors;

use Edbizarro\BiExtract\Extractors\CsvExtractor;
use PHPUnit\Framework\TestCase;

class CsvExtractorTest extends TestCase
{
    public function test_can_extract_a_csv()
    {
        $result = (new CsvExtractor())->extract(__DIR__.'/../Extractors/stubs/csv-extracsv-stub.csv');

        $this->assertInstanceOf(\Generator::class, $result);
        $this->assertCount(1, $result);
    }
}
