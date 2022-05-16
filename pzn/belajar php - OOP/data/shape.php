<?php

namespace Data;
class shape{
    function getCorner(){
        return 0;
    }
}
class rectangle extends shape{
    public function getCorner(){
        return 4;
    }
    public function getParentCorner(){
        return parent::getCorner();
    } 
}