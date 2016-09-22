<?php
namespace App\Repositories\Contact;


use Illuminate\Support\ServiceProvider;


class ContactRepoServiceProvide extends ServiceProvider

{

    /**

     * Bootstrap the application services.

     *

     * @return void

     */

    public function boot()

    {

        

    }


    /**

     * Register the application services.

     *

     * @return void

     */

    public function register()

    {

        $this->app->bind('App\Repositories\Contacts\ContactInterface', 'App\Repositories\Contacts\ContactRepository');

    }

}