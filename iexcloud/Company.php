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

    public function __construct( $res ) {
        $json = json_decode( $res ,true );
        $this->symbol = $json['symbol'];
        $this->companyName = $json['companyName'];
        $this->exchange = $json['exchange'];
        $this->industry = $json['industry'];
        $this->website = $json['website'];
        $this->description = $json['description'];
        $this->CEO = $json['CEO'];
        $this->securityName = $json['securityName'];
        $this->issueType = $json['issueType'];
        $this->sector = $json['sector'];
        $this->employees = $json['employees'];
        $this->tags = $json['tags'];
    }
}
