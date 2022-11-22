<?php

namespace PHPDesignpatterns\Creational\AbstractFactory;

interface CsvWriter
{
    public function write(array $line): string;
}
