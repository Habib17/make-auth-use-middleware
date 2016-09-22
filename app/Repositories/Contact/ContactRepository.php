<?php
namespace App\Repositories\Contact;


use App\Repositories\Contact\ContactInterface as ContactInterface;

use App\Contact;


class ContactRepository implements ContactInterface

{

    public $contact;


    function __construct(Contact $contact) {

	$this->contact = $contact;

    }


    public function getAll()

    {

        return $this->contact->getAll();

    }


    public function find($id)

    {

        return $this->contact->findContact($id);

    }


    public function delete($id)

    {

        return $this->contact->deleteContact($id);

    }

}