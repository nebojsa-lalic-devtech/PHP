<?php

//namespace app;

class User
{
    private $first_name;
    private $last_name;
    private $email;

    public function __construct($first_name, $last_name, $email)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
    }

    public function getUserDetails(){
        return 'Name: ' . $this->first_name . ' ' . $this->last_name . ', Email: ' . $this->email;
    }
}