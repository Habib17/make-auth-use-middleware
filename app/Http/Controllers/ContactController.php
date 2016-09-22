<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Repositories\Contact\ContactInterface as UserInterface;


class ContactController extends Controller

{


    public function __construct(UserInterface $contact)

    {

        $this->contact = $contact;

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $contacts = $this->contact->getAll();

        return view('contacts.index',['contacts']);

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $contact = $this->contact->find($id);

        return view('contacts.show',['contact']);

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function delete($id)

    {

        $this->contact->delete($id);

        return redirect()->route('contacts');

    }

}