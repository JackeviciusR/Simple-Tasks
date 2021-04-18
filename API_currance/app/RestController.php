<?php


class RestController {

    public function index() {
        $pageTitle = 'API exchange rates';
        $urlRates = 'https://api.exchangeratesapi.io/latest';
        $fileName = DIR.'data/exchange-rates.json';
        $data = Json::getDB($fileName)->readData(false); // take like: true - array, false - object
        if ( empty($data) ||  time() - ($data->time ?? time() - Rest::INTERVAL - 1) > Rest::INTERVAL) {
            $ratesData = Rest::createRest()->GET($urlRates);
            // _dc($ratesData->rates);
            // uksort($ratesData->rates, function($var1, $var2) {
            //     return $var1 <=> $var2;
            // } );
            $data  = Rest::createRest()->createModel($ratesData);
            //_dc($data,'MODEL');
            Json::getDB($fileName)->writeData($data);
            $data = Json::getDB($fileName)->readData(false); // take like: true - array, false - object
            print '<h5 style="color: red;"> Data updated from Api </h5>';
        } else {
            print '<h5 style="color: blue;"> Data from Json </h5>';
        }
        require DIR.'views/index.php';
    }

    public function update() {
        $this->index();
    }



}



?>