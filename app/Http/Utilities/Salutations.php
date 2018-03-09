<?php

namespace App\Http\Utilities;

class Salutations{
    
    protected  static $salutations = [
        "Prof"              => "Professor",
        "Engr."             => "Engineering",
        "Dr.."              => "Doctor",
        "Mr."               => "Mister",
        "Mrs."              => "Missus",
        "Miss"              => "Miss"

        
        
        ];
    
    public static function all()
    {
        return array_keys(static::$salutations);
    }
}
    