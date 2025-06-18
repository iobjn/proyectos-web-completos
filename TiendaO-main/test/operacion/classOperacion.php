<?php

class Bobeda{
    public $userRoot = 0 ;
    public $access = 0 ;
    public $correct = 0 ;

        function __construct($intuserRoot, $intaccess){
            $this-> userRoot = $intuserRoot;
            $this-> access = $intaccess;
        }


        function getSuma(){
            $this->correct = $this->userRoot + $this->access;
            return $this->correct;
        }


        function getResta(){
            $this->correct = $this->userRoot - $this->access;
            return $this->correct;

        }

        function getMult(){
            $this->correct = $this->userRoot * $this->access;
            return $this->correct;

        }

        function getDiv(){
            $this->correct = $this->userRoot / $this->access;
            return $this->correct;
        
        }


}

?>