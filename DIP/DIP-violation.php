D - Dependency Inversion Principle

high-level modules should not depend on low-level modules and
Both should depend on abstractions.

#Class should depend on abstractions, not on each class.


<?php

interface Writable
{
    public function write(string $content);
}

class FileWriter implements Writable
{
    public function write(string $content)
    {
        echo "Writing to file: $content \n";
    }
}
class DatabaseWriter implements Writable
{
    public function write(string $content)
    {
        echo "Writing to database: $content \n";
    }
}

class Report
{

    public function __construct(public Writable $writer)
    {
    }
    public function generate(string $data)
    {
        $this->writer->write($data);
    }
}

$report = new Report(new FileWriter);
$report->generate('testing');
