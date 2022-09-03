<?php

namespace app\traits;

/**
 * Validation type images
 */
trait ValidationFile
{
    public function validation()
    {
        if (!in_array($this->extension(), $this->extensions)) {
            throw new \Exception('Extensão não aceita');
        }
    }
}
