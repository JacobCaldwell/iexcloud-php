<?php

// namespace IEXCloud;

include 'Company.php';

// use IEXCloud\Classes\Company;

$test = new IEXCloud();
$test1 = $test->Company('aapl');
echo $test1->description;




class IEXCloud {
    const URL = 'https://sandbox.iexapis.com/stable/';


    public static function Company( $symbol ){
        $path = IEXCloud::URL . 'stock/' . $symbol . '/company?token=' . IEXCloud::getToken() ;
        $res = IEXCloud::getData( $path );
        return new Company( $res );
    }

    public static function AdvancedStats( $symbol ){
        $path = IEXCloud::URL . 'stock/' . $symbol . '/advanced-stats?token=' . IEXCloud::getToken() ;
        $res = IEXCloud::getData( $path );
        return new AdvancedStats( $res );
    }


    protected static function getToken() {
        try {
            $str = json_decode(file_get_contents('../config.json'), true);
            return $str['token'];
        } catch (\Throwable $th) {
            return $th;
        }
    }

    protected static function getData( $url ) {
        $curl = curl_init();
        curl_setopt( $curl, CURLOPT_URL, $url );
        curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt( $curl, CURLOPT_ENCODING, 'gzip,deflate,sdch' );
        $res = curl_exec( $curl );
        curl_close( $curl );
        return $res;
    }

}
