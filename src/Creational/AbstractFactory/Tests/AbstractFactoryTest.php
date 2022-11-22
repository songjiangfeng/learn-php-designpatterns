<?php

declare(strict_types=1);

namespace PHPDesignpatterns\Creational\AbstractFactory\Tests;

use PHPDesignpatterns\Creational\AbstractFactory\WriterFactory;
use PHPDesignpatterns\Creational\AbstractFactory\WinWriterFactory;
use PHPDesignpatterns\Creational\AbstractFactory\CsvWriter;
use PHPDesignpatterns\Creational\AbstractFactory\JsonWriter;
use PHPDesignpatterns\Creational\AbstractFactory\UnixWriterFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends Testcase
{
    public function provideFactory(): array
    {
        return [

            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];
    }
    /**
     * @dataProvider provideFactory
     */
    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory)
    {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }
}
