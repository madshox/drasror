<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Service;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::get();
        return view('dashboard.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('dashboard.services.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $path = $request->file('head_image')->store('service_head_image');
        $params = $request->all();
        $params['head_image'] = $path;
        $params['slug'] = SlugService::createSlug(Service::class, 'slug', $request->title);

        $service = Service::create($params);

        return redirect()->route('services.index')->with('success', 'Услуга успешно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }


    public function edit(Service $service, ServiceRequest $request)
    {
        if ($request->isMethod('get')) {
            $categories = Category::get();
            $services = Service::get()->find($service);
            return view('dashboard.services.form', compact('services', 'categories'));
        }

        if ($request->hasFile('head_image')) {
            Storage::delete($service->head_image);

            $path = $request->file('head_image')->store('service_head_image');
        } else {
            $path = $service->head_image;
        }

        $params = $request->all();
        $params['head_image'] = $path;
        $service->update($params);

        return redirect()->route('services.index')->with('warning', 'Услуга успешно отредактирована');
    }

//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Service  $service
//     * @return \Illuminate\Http\Response
//     */
//    public function update(ServiceRequest $request, Service $service)
//    {
//
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        Storage::delete($service->head_image);
        $service->delete();
        return redirect()->route('services.index')->with('danger', 'Услуга успешно удалена');
    }
}
