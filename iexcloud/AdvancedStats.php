<?php

class AdvancedStats extends IEXCloud {

    public $totalCash;
    public $currentDebt;
    public $revenue;
    public $grossProfit;
    public $totalRevenue;
    public $EBITDA;
    public $revenuePerShare;
    public $revenuePerEmployee;
    public $debtToEquity;
    public $profitMargin;
    public $enterpriseValue;
    public $enterpriseValueToRevenue;
    public $priceToSales;
    public $priceToBook;
    public $forwardPERatio;
    public $pegRatio;
    public $beta;

    public function __construct( $res ) {
        $json = json_decode( $res ,true );
        $this->totalCash = $json['totalCash'];
        $this->currentDebt = $json['currentDebt'];
        $this->revenue = $json['revenue'];
        $this->grossProfit = $json['grossProfit'];
        $this->totalRevenue = $json['totalRevenue'];
        $this->EBITDA = $json['EBITDA'];
        $this->revenuePerShare = $json['revenuePerShare'];
        $this->revenuePerEmployee = $json['revenuePerEmployee'];
        $this->debtToEquity = $json['debtToEquity'];
        $this->profitMargin = $json['profitMargin'];
        $this->enterpriseValue = $json['enterpriseValue'];
        $this->enterpriseValueToRevenue = $json['enterpriseValueToRevenue'];
        $this->priceToSales = $json['priceToSales'];
        $this->priceToBook = $json['priceToBook'];
        $this->forwardPERatio = $json['forwardPERatio'];
        $this->pegRatio = $json['pegRatio'];
        $this->beta = $json['beta'];

    }
}
