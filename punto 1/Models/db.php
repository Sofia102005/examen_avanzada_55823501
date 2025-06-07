<?php

namespace App\models\db;

use mysqli;

class db {

    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $name = 'nomina_db';
    public $conex;
    
function __construct()
    {
        $this->conex = new mysqli(
            $this->host,
            $this->user,
            $this->pwd,
            $this->name
        );
    }
}