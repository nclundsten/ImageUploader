<?php

namespace ImageUploader\Filter;

use Zend\InputFilter\InputFilter;

class Image extends InputFilter
{
    public function __construct()
    {
        $this->add(array(
            'name' => 'image',
        ));
    }
}
