<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = Ad::first();
        return view('admin.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_top' => 'required',
            'img_top' => 'required',
            'url_top' => 'required',
            'title_sidebar' => 'required',
            'img_sidebar' => 'required',
            'url_sidebar' => 'required',
        ]);


        $requestData = $request->all();

        if ($request->hasFile('img_top')) {
            $file = $request->file('img_top');             
            $imageName =time().''.$file->getClientOriginalName(); 
            $file->move('site/images/ads/',$imageName);          
            $requestData['img_top'] = $imageName;          
        };

        if ($request->hasFile('img_sidebar')) {
            $file = $request->file('img_sidebar');             
            $imageName =time().'.2.'.$file->getClientOriginalName(); 
            $file->move('site/images/ads/',$imageName);          
            $requestData['img_sidebar'] = $imageName;          
        };

        Ad::create($requestData);
        return redirect()->route('admin.ads.index')->with('success', "Reklama qo'shildi");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ads = Ad::find($id);
        return view('admin.ads.show',compact('ads'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        // P.S => First() bn metodi bn kelgani uchun yangilab bo'lmadi
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // P.S => First() bn metodi bn kelgani uchun ochirib bo'lmadi
    }
  
}
