<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;


class Contact extends Authenticatable

{

    protected $fillable = [

        'name', 'email', 'address','number',

    ];

   

  


    public function getAll()

    {

        return static::all();

    }


    public function findContact($id)

    {

        return static::find($id);

    }


    public function deleteContact($id)

    {

        return static::find($id)->delete();

    }

}


