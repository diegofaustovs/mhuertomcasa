<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\LengthAwarePaginator;
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
        $this->feed->strip_attributes(['imageanchor', 'border', 'frameborder']);
        date_default_timezone_set ( 'America/Bogota');
    }


    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function showAllNews()
    {
        //get news from RSS
        $lc = Config::get('app.locale');
        $this->feed->set_feed_url("http://pq0gumry.blogspot.com/feeds/posts/default/-/$lc-news?max-results=1000");
        $this->feed->init();

        $items = $this->feed->get_items();

        //Paginate the news
        $paginator = new LengthAwarePaginator(array_slice($items, 0, 5),count($items),5);
        $current_page = $paginator->currentPage();

        $paginator = new LengthAwarePaginator(array_slice($items, ($current_page-1)*5, 5),count($items),5);
        Log::info($paginator->currentPage());

        $paginator->setPath("$lc/news");

        return view('news')->with('items', $paginator);
    }

    public function showAllSolarPress()
    {
        $lc = Config::get('app.locale');
        $this->feed->set_feed_url("http://pq0gumry.blogspot.com/feeds/posts/default/-/$lc-solar-press?max-results=1000");
        $this->feed->init();

        $items = $this->feed->get_items();

        //Paginate the press releases
        $paginator = new LengthAwarePaginator(array_slice($items, 0, 5),count($items),5);
        $current_page = $paginator->currentPage();

        $paginator = new LengthAwarePaginator(array_slice($items, ($current_page-1)*5, 5),count($items),5);
        Log::info($paginator->currentPage());

        $paginator->setPath("$lc/solar_press");

        return view('news')->with('items', $paginator);
    }

}