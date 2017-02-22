<?php

//namespace classes;

class User
{
    private $first_name;
    private $last_name;
    private $email;
    private $job;

    /**
     * User constructor.
     * @param $first_name
     * @param $last_name
     * @param $email
     * @param $job
     */
    public function __construct($first_name, $last_name, $email, $job)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->job = $job;
    }

    /**
     * @return string
     */
    public function getUserDetails(){
        return 'Name: ' . $this->first_name . ' ' . $this->last_name . ',<br>Email: ' . $this->email . '<br>Job: ' . $this->job;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job)
    {
        $this->job = $job;
    }
}