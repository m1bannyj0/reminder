<?php
declare(strict_types=1);
namespace App;

class exceptionHandler
{
    /**
     * @var
     */
    private $exception;

    /**
     * exceptionHandler constructor.
     * @param $exception
     */
    public function __construct($exception)
    {
        $this->exception = $exception;
    }

    public function handle()
    {
        echo $this->exception->getMessage();
        echo PHP_EOL;
        echo $this->exception->getCode();
        echo "<pre>";
        print_r($this->exception->getTrace());
    }
}
