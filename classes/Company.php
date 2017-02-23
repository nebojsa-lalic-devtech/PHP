<?php

namespace classes;

class Company implements ICompany
{

    private $company_name;
    private $address;
    private $business_area;

    /**
     * Company constructor.
     * @param $company_name
     * @param $address
     * @param $business_area
     */
    public function __construct($company_name, $address, $business_area)
    {
        $this->company_name = $company_name;
        $this->address = $address;
        $this->business_area = $business_area;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * @param mixed $company_name
     */
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getBusinessArea()
    {
        return $this->business_area;
    }

    /**
     * @param mixed $business_area
     */
    public function setBusinessArea($business_area)
    {
        $this->business_area = $business_area;
    }

    /**
     * @return string
     */
    public function get_company_details()
    {
        return '<b>Company Name:</b> ' . $this->company_name . ',<br><b>Address:</b> ' . $this->address . ',<br><b>Business area:</b> ' . $this->business_area;
    }
}