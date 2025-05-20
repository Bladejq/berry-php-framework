<?php

namespace berry\base;

use berry\Db; 

abstract class Model {
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct() {
        Db::instance(); 
    }
}
