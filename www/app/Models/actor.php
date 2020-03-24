<?php

class Actor
{
    protected $id;
    protected $name;
    protected $image;
    protected $roleName;

    public function getId(){
        return $this->id;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setImage($image){
        $this->image = $image;
    }

    public function getImage(){
        return $this->image;
    }

    public function setRoleName($roleName){
        $this->roleName = $roleName;
    }

    public function getRoleName(){
        return $this->roleName;
    }

}