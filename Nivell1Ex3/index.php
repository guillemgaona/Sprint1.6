<?php
// toString, set i get
class TestClass 
{
    private $name;
    private $data = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    

     public function __toString()
    {
        return "El nom és: " . $this->name;
    } 

    public function __get($name) {
        return $this->data[$name] ?? "Propietat inexistent"; // operador que mira si és null (Sí és torna la part de la dreta)
    }


    public function __set($name, $valor) {
        $this->data[$name] = $valor;
    }

}

$class = new TestClass('Guillem');
echo $class. "<br>";

$class->edat = 30; // __set()
echo $class->edat. "<br>";; //__get()

?>