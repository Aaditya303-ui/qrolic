<?php
class abc
{
    public $a;

    function __construct($a = 0)
    {
        $this->a = $a;
    }

    function call()
    {
        echo "Hello how are you <br>";
        echo $this->a;
        return $this;
    }

    function inc()
    {
        ++$this->a;
        return $this;
    }

    function show()
    {
        echo $this->a;
        return $this;
    }
}

$a = new abc();
echo $a->inc()->call()->show();
