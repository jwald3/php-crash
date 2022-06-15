<?php

class User
{
    public $name;
    public $email;
    public $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}

// instantiate a new User object
$user1 = new User('Brad', 'brad@gmail.com', 'password');
$user2 = new User('John', 'john@gmail.com', 'password');

$user1->set_name('Brad');
$user2->set_name('John');

echo $user1->email;
echo $user2->name;

// inheritance
class Employee extends User
{
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title()
    {
        return $this->title;
    }
}

$employee1 = new Employee('Sarah', 'sarah@gmail.com', 'password', 'manager');

echo $employee1->get_title();
