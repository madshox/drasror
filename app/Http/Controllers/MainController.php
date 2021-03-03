<?php

namespace App\Http\Controllers;

use App\Category;
use App\Service;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function categories() {
        $categories = Category::all();
        return view('categories', compact('categories'));
    }

    public function category($slug)
    {
        $services = Service::all();
        $category = Category::where('slug', $slug)->first();
        return view('category', compact('category', 'services'));
    }

    public function service($category, $service = null)
    {
//        $category = Category::where('slug', $category)->first();
        $services = Service::where('slug', $service)->first();
        return view('service', ['service' => $service], compact('services'));
    }
}
