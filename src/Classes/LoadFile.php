<?php


class LoadFile
{
    /**
     * Загружаемый с формы файл
     * @var
     */
    private $file;

    /**
     * LoadFile constructor.
     * @param $file загружаемый с формы файл
     */
    public function __construct($file)
    {
        $this->file = $file;
    }
}