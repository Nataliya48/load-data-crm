<?php


class LoadFile
{
    /**
     * Загружаемый с формы файл
     * @var
     */
    private $tmpFile;

    /**
     * LoadFile constructor.
     * @param $file загружаемый с формы файл
     */
    public function __construct($file)
    {
        $this->tmpFile = $file;
        if ($this->tmpFile['error']) {
            throw new \Exception('File Download Error #' . $this->tmpFile['error']);
        }
    }

    private function fileDir()
    {

    }


    /*move_uploaded_file(
        // временное расположение файла
        $_FILES['file']['tmp_name'],
        // конечный путь к файлу и его название
        'uploads/' . $_FILES['file']['name']
    );

    move_uploaded_file(
        $_FILES['file']['tmp_name'],
        'uploads/my_new_filename.whatever'
    );*/


    private function loadFile(){
        if ( 0 < $_FILES['file']['error'] ) {
	        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
	    }
	    else {
	        move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
	    }
    }
}