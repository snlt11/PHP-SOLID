<?php

class FileWriter
{
    public function write(string $content)
    {
        echo "Writing to file: $content \n";
    }
}
class DatabaseWriter
{
    public function write(string $content)
    {
        echo "Writing to database: $content \n";
    }
}

class Report
{
    private $fileWriter;
    private $databaseWriter;

    public function __construct($writer)
    {
        if ($writer === 'file') {
            $this->fileWriter = new FileWriter();
        }
        if ($writer === 'database') {
            $this->databaseWriter = new DatabaseWriter();
        }
    }
    public function generate(string $data)
    {
        $content = "Report Data : $data \n";
        if ($this->fileWriter) {
            $this->fileWriter->write($content);
        }
        if ($this->databaseWriter) {
            $this->databaseWriter->write($content);
        }
    }
}

$report = new Report('file');
$report->generate('testing');
