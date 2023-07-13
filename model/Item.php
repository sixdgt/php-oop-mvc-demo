<?php
class Item  {
    private $title;
    private $description;

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getDesc(){
        return $this->description;
    }

    public function setDesc($description){
        $this->description = $description;
    }
}