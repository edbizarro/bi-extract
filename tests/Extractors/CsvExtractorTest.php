<?php

namespace Edbizarro\BiExtract\Tests\Extractors;

use Edbizarro\BiExtract\Extractors\CsvExtractor;
use PHPUnit\Framework\TestCase;

class CsvExtractorTest extends TestCase
{
   /** @test */
    public function it_can_read_a_csv()
    {
        $result = (new CsvExtractor())->extract(__DIR__.'/../Extractors/stubs/csv-extracsv-stub.csv');
        $this->assertInstanceOf(\Generator::class, $result);
        $this->assertCount(1, $result);
    }

    /** @test */
    public function it_can_extract_a_csv()
    {
        $result = (new CsvExtractor())->extract(__DIR__.'/../Extractors/stubs/csv-extracsv-stub.csv');

        foreach ($result as $value) {
          $this->assertEquals('John Doe', $value['Name']);
          $this->assertEquals('São Paulo', $value['State']);
          $this->assertEquals('Blue', $value['Color']);
        }
    }

    /** @test */
    public function it_can_extract_a_csv_with_different_delimiter()
    {
        $result = (new CsvExtractor())->extract(__DIR__.'/../Extractors/stubs/csv-delimiter-stub.csv', ";");

        foreach ($result as $value) {
          $this->assertEquals('John Doe', $value['Name']);
          $this->assertEquals('São Paulo', $value['State']);
          $this->assertEquals('Blue', $value['Color']);
        }
    }
}
