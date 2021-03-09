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
        $services = Service::all();
        return view('dashboard.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
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
        $head_image = $request->file('head_image');
        $head_image_name = time(). '-' . $head_image->getClientOriginalName();

        $path = $request->file('head_image')->storeAs('service_head_image', $head_image_name);
        $params = $request->all();
        $params['head_image'] = $path;
        $params['slug'] = SlugService::createSlug(Service::class, 'slug', $request->title);
        $service = Service::create($params);

        if($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $name = time(). '-' . $file->getClientOriginalName();
                $name = str_replace(' ', '-', $name);

                $file->move('storage/images', $name);
                $service->images()->create(['image' => 'images' . '/' . $name]);
            }
        }
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $categories = Category::all();
        $services = Service::all()->find($service);
        return view('dashboard.services.form', compact('services', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, Service $service)
    {
        foreach ($service->images as $image){
            if (!collect($request['preloaded'])->contains($image->id)){
                try {
                    Storage::delete($image->image);
                }catch (\Exception $e){}
                $image->delete();
            }
        }

        if($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $name = time(). '-' . $file->getClientOriginalName();
                $name = str_replace(' ', '-', $name);

                $file->move('storage/images', $name);
                $service->images()->create(['image' => 'images' . '/' . $name]);
            }
        }

        if ($request->hasFile('head_image')) {
            Storage::delete($service->head_image);
            $head_image = $request->file('head_image');
            $head_image_name = time(). '-' . $head_image->getClientOriginalName();
            $path = $request->file('head_image')->storeAs('service_head_image', $head_image_name);
        } else {
            $path = $service->head_image;
        }
        $params = $request->all();
        $params['head_image'] = $path;
        $service->update($params);

        return redirect()->route('services.index')->with('warning', 'Услуга успешно отредактирована');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        foreach ($service->images as $image) {
            Storage::delete($image['image']);
        }
        Storage::delete($service->head_image);
        $service->delete();
        return redirect()->route('services.index')->with('danger', 'Услуга успешно удалена');
    }
}
