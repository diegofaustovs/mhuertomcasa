<?php namespace App\Http\Controllers;

class StaticController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Static Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders every static page of the application
    |
    */


    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }

    public function management()
    {
        return view('teams/gestion');
    }

    public function projectSponsors()
    {
        return view('sponsors/project_sponsors');
    }

}