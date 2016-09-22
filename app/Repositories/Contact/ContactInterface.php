<?php
namespace App\Repositories\Contact;


interface ContactInterface {


    public function getAll();


    public function find($id);


    public function delete($id);

}