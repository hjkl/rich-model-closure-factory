<?php

namespace App;

class SampleClass
{
    private $field;
    
    public function __construct(string $field)
    {
        $this->field = $field;
    }
    
    public function getField(): string
    {
        return $this->field;
    }
}