<?php

// class sampleClass{
//     private $str;

//     function __construct()
//     {
//         $this->str = "";
//     }

//     function addA()
//     {
//         $this->str .= "am";
//         return $this;
//     }

//     function addB()
//     {
//         $this->str .= "_bn";
//         return $this;
//     }

//     function getstr()
//     {
//         return $this->str;
//     }
// }

// $newobj = new sampleClass();
// echo $newobj->addA()->addB()->getstr();



// class QueryBuilder
// {
//     private $query = "";

//     public function select($fields)
//     {
//         $this->query = "SELECT " . $fields;
//         return $this;
//     }

//     public function from($fields)
//     {
//         $this->query .= " FROM " . $fields;
//         return $this;
//     }

//     public function where($condition)
//     {
//         $this->query .= " WHERE " . $condition;
//         return $this;
//     }

//     public function getQuery()
//     {
//         return $this->query;
//     }
// }

// $builder = new QueryBuilder();
// $sql = $builder-> select("name, email")->from("users")->where("age > 21")->getQuery();  
// echo $sql;

// class calculator{
//     private $str;

//     function __construct($str=0)
//     {
//         $this->str = $str;
//     }

//     function sum($sum)
//     {
//         $this->str += $sum;
//         return $this;
//     }

//     function diff($diff)
//     {
//         $this->str -= $diff;
//         return $this;
//     }

//     function divide($div)
//     {
//         $this->str /= $div;
//         return $this;
//     }

//     function multiply($mul)
//     {
//         $this->str *= $mul;
//         return $this;
//     }

//     function result()
//     {
//         return $this->str;
//     }
// }

// $calc = new calculator(21);
// $s = new calculator(12);

// $calc -> sum(21)->multiply(2)->divide(24)->diff(1);
// echo $calc -> result();

// class Builder{
//     private $name,$age,$city,$email;

//     function __construct($name,$age,$city,$email)
//     {
//         $this->name = $name;
//         $this->age = $age;
//         $this->city = $city;
//         $this->email = $email;
//     }

//     function setName()
//     {
//         echo "Name: $this->name<br>";
//         return $this;
//     }

//     function setAge()
//     {
//         echo "Age: $this->age<br>";
//         return $this;
//     }

//     function setEmail()
//     {
//         echo "Email: $this->email<br>";
//         return $this;
//     }

//     function setCity()
//     {
//         echo "City: $this->city<br>";
//         return $this;
//     }
// }

// $user = new Builder("Aaditya",22,"aj@gmail.com","rajkot");
// $user->setName()->setAge()->setEmail()->setCity();

// class QueryBuilder{
//     private $query = "";

//     function select($fields)
//     {
//         $this->query .= "SELECT $fields";
//         return $this;
//     }

//     function from($table)
//     {
//         $this->query .= " FROM $table";
//         return $this;
//     }

//     function where($where)
//     {
//         $this->query .= " WHERE $where";
//         return $this;
//     }

//     function orderBy($order)
//     {
//         $this->query .= " ORDER BY $order";
//         return $this;
//     }

//     function limit($limit)
//     {
//         $this->query .= " LIMIT $limit";
//         return $this;
//     }

//     function getQuery()
//     {
//         return $this->query;
//     }
// }

// $query = new QueryBuilder();
// $sql = $query->select("*")->from("employees")->where("salary > 50000")->orderBy("salary desc")->limit(10)->getQuery();
// echo $sql;

// class HtmlBuilder{
//     private $str = "";

//     function heading($h1)
//     {
//         $this->str .= "<h1> $h1 </h1><br>";
//         return $this;
//     }

//     function paragraph($p)
//     {
//         $this->str .= "<p> $p </p><br>";
//         return $this;
//     }

//     function button($button)
//     {
//         $this->str .= "<button>$button</button> <br>";
//         return $this;
//     }

//     function render()
//     {
//         return $this->str;
//     }
// }

// $html = new HtmlBuilder();

// $str = $html->heading("Welcome")->paragraph("This is a paragraph")->button("login")->render();
// echo $str;

// class Pizza{
//     private $p = "";

//     function size($size)
//     {
//         $this->p .= "Pizza size: $size<br>";
//         return $this;
//     }

//     function cheese()
//     {
//         $this->p .= "Topings:<br>-cheese<br>";
//         return $this;
//     }

//     function olives($olives)
//     {
//         $this->p .= "-$olives<br>";
//         return $this;
//     }

//     function mushroom($mushroom)
//     {
//         $this->p .= "-$mushroom<br>";
//         return $this;
//     }

//     function extraCheese($ex)
//     {
//         $this->p .= "-$ex<br>";
//         return $this;
//     }

//     function prepare()
//     {
//         return $this->p;
//     }
// }

// $p = new Pizza();
// $desc = $p->size("Large")->cheese()->olives("Olives")->mushroom("Mushroom")->extraCheese("Extra Cheese")->prepare();
// echo $desc;

class student{
    private $str = "";

    function name($name)
    {
        $this->str .= "Name $name<br>";
        return $this;
    }

    function course($course)
    {
        $this->str .= "Course: $course<br>";
        return $this;
    }

    function semester($sem)
    {
        $this->str .= "Semester: $sem<br>";
        return $this;
    }

    function cgpa($c)
    {
        $this->str .= "CGPA: $c<br>";
        return $this;
    }

    function show()
    {
        return $this->str;
    }
}

$s = new student();
$n = $s->name("Aaditya")->course("B.Tech")->semester(6)->cgpa(8.5)->show();
echo $n;