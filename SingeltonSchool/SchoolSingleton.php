<?php


class SchoolSingleton
{
    private static $schoolName;
    private static $schoolAdd;
    private static  $singleInstance;


    private function __construct($name , $add)
    {
        // A Private Constructor Method So None Outside Can Create Objects
        self::$schoolName = $name;
        self::$schoolAdd = $add;

    }

    // Static Method  We Control If The Counter Is 0
    public static function getInstance($name , $add){
        if (!(self::$singleInstance instanceof self))
            self::$singleInstance = new self($name , $add);
        return self::$singleInstance;
    }

    public static function getSchoolName(){
        return self::$schoolName;
    }

    public static function getSchoolAdd(){
        return self::$schoolAdd;
    }

    private function __clone(): void
    {
        // Prevent User From Creating Cloning
    }

}