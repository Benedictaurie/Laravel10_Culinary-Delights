<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //memanggil view landing page
    function index(){
        $title="Landing Page";
        $packages=Packages::paginate(3);
        return view('frontpage.landingpage', compact('title', 'packages'));
    }
    function about(){
        return view('frontpage.about');
    }
    function product(){
        $title="Product";
        $packages=Packages::all();
        return view('frontpage.product', compact('title', 'packages'));
    }
    function detailPackage(){
        $title="Detail Packages";
        $packages=Packages::paginate(1);
        return view('frontpage.detailPackage', compact('title', 'packages'));
    }
    function addtocart(){
        return view('frontpage.addtocart');
    }
    function payment(){
        return view('frontpage.payment');
    }
}
