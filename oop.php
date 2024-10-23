<?php
    class person{
        private $name;
        private $email;
        // public static $agelimit = 50;

        public function __construct($name, $email){
            $this -> name = $name;
            $this -> email = $email;
            // echo 'Person created<br>';
            echo __CLASS__.' created<br>';
        }

        public function __destruct(){
            echo __CLASS__.' destroyed<br>';
        }


        public function setName($name){
            $this -> name = $name;
        }

        public function getName(){
            return $this -> name. '<br>';
        }

        public function setEmail($email){
            $this -> email = $email;
        }

        public function getEmail(){
            return $this -> email. '<br>';
        }
    }


    // echo person::$agelimit;

    // $person1 = new Person('Arslan Ali', 'arslan@gmail.com');

    // $person1->setName('Arslan Ali');
    // echo $person1 -> getName();

    // $person1->name = "Arslan Ali";
    // echo $person1 -> name;

    class Customer extends Person{
        private $balance;

        public function __construct($name, $email, $balance){
            $this -> balance = $balance;
            parent :: __construct($name, $email, $balance);
            echo 'A new '.__class__.' has been created<br>';
        }

        public function setBalance($balance){
            $this -> balance = $balance;
        }
    
        public function getBalance(){
            return $this -> balance. '<br>';
        }
    }
    // $customer1 = new Customer('Ahmd', 'ahmad@gmail.com', 200);

    // echo $customer1->getBalance();

?>
