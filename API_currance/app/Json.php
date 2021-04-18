<?php

class Json {

    private $path;
    private static $dbObj;

    private function __construct($path) {
        if ( !file_exists($path) ) {
            file_put_contents($path, 
                '{}'
            );
        }
        $this->path = $path;
    }

    public static function getDB($path) {
        return self::$dbObj ?? self::$dbObj = new self($path);
    }

    public function writeData($data) : void {
        file_put_contents( $this->path, json_encode($data) );
    }

    public function readData(bool $dataType) : object {
        //_dc( (json_decode( file_get_contents($this->path), false) ) );
        return json_decode( file_get_contents($this->path));
    }



}



?>