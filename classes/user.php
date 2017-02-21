<?php

//namespace classes;

class User
{
    private $first_name;
    private $last_name;
    private $email;
    private $job;

    public function __construct($first_name, $last_name, $email, $job)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->job = $job;
    }

    public function getUserDetails(){
        return 'Name: ' . $this->first_name . ' ' . $this->last_name . ',<br>Email: ' . $this->email . '<br>Job: ' . $this->job;
    }
}