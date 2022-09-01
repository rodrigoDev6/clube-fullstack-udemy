<?php

namespace app\classes;

class UploadImages
{
    public $file;
    public $newName;
    public $extensions = ['png', 'jpg', 'webp'];

    public function file($file)
    {
        $this->file = $file;
    }

    function extension()
    {
        return pathinfo($this->file, PATHINFO_EXTENSION);
    }

    function rename()
    {
        $uniqueId = uniqid();

        $this->newName = $uniqueId . '.' . $this->extension();
    }

    function upload()
    {
        return $this->newName;
    }
}