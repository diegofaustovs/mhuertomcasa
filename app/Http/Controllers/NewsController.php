<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;
use SimplePie;

class NewsController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Static Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders every static page of the application
    |
    */


    private $feed;

    public function __construct()
    {
        $this->feed = new SimplePie();
        $this->feed->enable_cache(false);
        //$this->feed->set_cache_location(storage_path().'/framework/cache');
        $this->feed->strip_htmltags(false);
        $this->feed->strip_attributes(['imageanchor']);
        date_default_timezone_set ( 'America/Bogota');
    }


    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function showAllNews()
    {
        $lc = Config::get('app.locale');
        $this->feed->set_feed_url("http://pq0gumry.blogspot.com/feeds/posts/default/-/$lc-news?max-results=1000");
        $this->feed->init();

        $items = $this->feed->get_items();

        return view('news')->with('items', $items);
    }

}