<?php

//$curl = curl_init();

class Rest {
    //step1
    // $cSession = curl_init(); 
    // //step2
    // curl_setopt($cSession,CURLOPT_URL,"http://www.google.com/search?q=curl");
    // curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
    // curl_setopt($cSession,CURLOPT_HEADER, false); 
    // //step3
    // $result=curl_exec($cSession);
    // //step4
    // curl_close($cSession);
    // //step5
    // echo $result;
    const INTERVAL = 10; //s
    private $curl; 
    private static $restObj;
    private $dataModel;

    private function __construct() {
        $this->curl = curl_init(); // created (initialized) client
    }

    public function createModel(object $data) : array {
        return [
            'time' => time(),
            'data' => $data,
            ];
    }

    public static function createRest() {
        return self::$restObj ?? self::$restObj = new self();
    }

    public function GET(String $url) : object {
        curl_setopt($this->curl, CURLOPT_URL, $url); // call
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true); // get string format
        $answer = curl_exec($this->curl);
        _dc($answer);
        curl_close($this->curl);
        return json_decode($answer);
    }

    
}



?>