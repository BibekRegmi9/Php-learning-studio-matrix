<?php



class Student {
    var $name;
    var $rollNo;
    var $class;
    var $student;
}

// creating a new object
class Person {
    var $name;
    var $email;
    var $phone;
    var $address;
    var $age;


    function __construct($name, $email, $phone) {
        $this -> name = $name;
        $this -> email = $email;
        $this -> $phone = $phone;
        
    }




    public function getName() {
        return $this -> name;
    }


    public function getAge() {
        return $this -> age;
    }

    public function set_name($new_name) {
        $this -> name = $new_name;

    }
}


$bibek = new Person('Bibek', 'bibek@gmail.com', 012456789);
$jon = new Person('John', 'john@hotmail.com', 9876543210);

echo $bibek -> getName();



?>