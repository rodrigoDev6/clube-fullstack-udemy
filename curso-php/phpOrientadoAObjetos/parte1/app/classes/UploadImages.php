<?php

namespace app\classes;

use app\traits\ValidationFile;

class UploadImages extends Upload
{
    use ValidationFile;

    private $extensions = ['png', 'jpg', 'webp'];

    public function __construct($file)
    {
        parent::__construct($file);
        $this->file = $file;
    }

    public function upload()
    {
        return $this->rename();
    }
}
