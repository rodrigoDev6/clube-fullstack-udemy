<?php

namespace app\classes;

class UploadImages extends Upload
{
    public $extensions = ['png', 'jpg', 'webp'];

    public function __construct()
    {
        parent::__construct($file);
        $this->file = $file;
    }

    
    public function upload()
    {
        return $this->rename();
    }
}