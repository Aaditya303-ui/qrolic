<?php

// namespace Html;

// class Table{
//     public $title;
//     public $rows;
//     public function info()
//     {
//         echo "<p>$this->title has $this->rows. </p>";
//     }
// }

// Using classes
// $table = new \Html\Table();


// $table -> title = "Aaditya";
// $table->rows = 5;

// $table->info();

// namespace myspace;

// function hi()
// {
//     echo "Hello Php !";
// }
// use myspace;

// myspace\hi();

// namespace MyApp\Utilities;
// class Helper{
//     public function __construct()
//     {
//         echo "abc helps";
//     }
// }

// namespace MyApp\Models;
// class User{
//     public function __construct()
//     {
//         echo "user class is";
//     }
// }

// $help = new \MyApp\Models\User();
// $log = new \MyApp\Utilities\Helper();

namespace Html;
class Table{
    public function __construct()
    {
        echo "Table class in Html namespace";
    }
}

use Html\Table as T;
$table = new T();