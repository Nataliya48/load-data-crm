<?php


class LoadFile
{
    /**
     * Загружаемый с формы файл
     * @var array
     */
    private $tmpFile;

    /**
     * Директория хранения локального файла
     *
     * @var bool|string
     */
    private $path;


    /**
     * LoadFile constructor.
     * @param array $file загружаемый с формы файл
     * @throws \Exception
     */
    public function __construct($file)
    {
        $this->tmpFile = $file;

        if ($this->tmpFile['error']) {
            throw new \Exception('File Download Error #' . $this->tmpFile['error']);
        }

        if (!is_uploaded_file($this->tmpFile['tmp_name'])) {
            throw new \Exception('Access denied');
        }

        if (mb_detect_encoding(file_get_contents($this->tmpFile['tmp_name'])) !== 'UTF-8') {
            throw new \Exception('Incorrect encoding. Use UTF-8');
        }

        $this->path = realpath(__DIR__ . '/../../storage/');

        if (!file_exists($this->path)) {
            mkdir($this->path, 0777, true);
        }
    }
}