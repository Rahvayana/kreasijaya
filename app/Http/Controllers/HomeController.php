<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['portfolios']=DB::table('portfolios')->select('portfolios.*','categories.name as kategori')
        ->leftJoin('categories','categories.id','portfolios.category_id')
        ->get();
        $data['categories']=Category::all();
        // dd($data);
        return view('index',$data);
    }

    public function detail($slug)
    {
        $title=(str_replace('-',' ',$slug));
        $title=(ucwords($title));
        $data['portfolio']=DB::table('portfolios')->select('portfolios.*','categories.name as kategori')
        ->leftJoin('categories','categories.id','portfolios.category_id')
        ->where('title',$title)
        ->first();
        // dd($data);
        return view('detail',$data);


    }
}
