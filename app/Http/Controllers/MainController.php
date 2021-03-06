<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Service;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('index', compact('categories'));
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

    public function about() {
        return view('about');
    }

    public function document() {
        return view('document');
    }

    public function contact() {
        return view('contact');
    }

    public function order(Request $request) {
        Order::create($request->all());
        return redirect()->back();
    }
}
