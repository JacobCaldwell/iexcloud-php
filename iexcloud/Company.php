<?php

class Company extends IEXCloud {
    public $symbol;
    public $companyName;
    public $exchange;
    public $industry;
    public $website;
    public $description;
    public $CEO;
    public $securityName;
    public $issueType;
    public $sector;
    public $employees;
    public $tags;

    public function __construct($res) {
        $json = $res->getBody();
    }



}
