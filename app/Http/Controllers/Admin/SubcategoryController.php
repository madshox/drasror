<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Service;
use App\Subcategory;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::get();
        return view('dashboard.subcategories.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $services = Service::get();
        return view('dashboard.subcategories.form', compact('services', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->all();
        $params['slug'] = SlugService::createSlug(Service::class, 'slug', $request->title);
        $service = Subcategory::create($params);

        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $name = time() . '-' . $file->getClientOriginalName();
                $name = str_replace(' ', '-', $name);

                $file->move('storage/images', $name);
                $service->images()->create(['image' => 'images' . '/' . $name]);
            }
        }
        return redirect()->route('subcategories.index')->with('success', 'Подкатегория успешно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Subcategory $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Subcategory $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        $services = Service::get();
        $subcategories = Subcategory::get()->find($subcategory);
        return view('dashboard.subcategories.form', compact('services', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Subcategory $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        foreach ($subcategory->images as $image) {
            if (!collect($request['preloaded'])->contains($image->id)) {
                try {
                    Storage::delete($image->image);
                } catch (\Exception $e) {
                }
                $image->delete();
            }
        }

        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $name = time() . '-' . $file->getClientOriginalName();
                $name = str_replace(' ', '-', $name);

                $file->move('storage/images', $name);
                $subcategory->images()->create(['image' => 'images' . '/' . $name]);
            }
        }

        $subcategory->update($request->all());
        return redirect()->route('subcategories.index')->with('warning', 'Подкатегория успешно отредактирована');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Subcategory $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        foreach ($subcategory->images as $image) {
            Storage::delete($image['image']);
        }
        $subcategory->delete();
        return redirect()->route('subcategories.index')->with('danger', 'Подкатегория успешно удалена');
    }
}
