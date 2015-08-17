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

    public function architecture()
    {
        return view('teams/arquitectura');
    }

    public function civil()
    {
        return view('teams/civil');
    }

    public function social()
    {
        return view('teams/social');
    }

    public function electric()
    {
        return view('teams/electrica');
    }

    public function orchards()
    {
        return view('teams/huerto');
    }

    public function bioclimatics()
    {
        return view('teams/bioclimatica');
    }

    public function design()
    {
        return view('teams/diseno');
    }

    public function web()
    {
        return view('teams/web');
    }

    public function environmental()
    {
        return view('teams/ambiental');
    }

    public function organization_chart()
    {
        return view('teams/org_chart');
    }

    public function projectSponsors()
    {
        return view('sponsors/project_sponsors');
    }

    public function solarInfo()
    {
        return view('solar/general_info');
    }

    public function contests()
    {
        return view('solar/contests');
    }
    public function videos()
    {
        return view('media/videos');
    }

}