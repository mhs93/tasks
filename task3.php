<?php
class Employee {
    private $id;
    private $name;
    private $salary;

    public function __construct($id, $name, $salary) {
        $this->id = $id;
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }


    public function getSalary(){
        return $this->salary;
    }


    public function setSalary($salary){
        $this->salary = $salary;
    }
}
?>