<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryContoller extends Controller
{
    //
    public function index()
    {
        //
        // dd(Auth::id());
        // $categories = Category::all();
        // return view('management.category', ['categories'=> $categories]);

        $foundRecords = Category::where('restaurant_id', Auth::id())->get();
        // dd($foundRecords);

        return view('management.category', [
            'categories' => $foundRecords
        ]);
    }


    public function create()
    {
        //
        $categories = Category::all();
        return view('management.addcategory', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        //this gives the image and 0 if no image.
        $image_name = 0;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/category'), $filename);
            $image_name= $filename;
        }

        $photo = array("photo" => $image_name, "restaurant_id" => Auth::id());
        $categories = Category::create(array_merge($request->all(), $photo));



        // return redirect('/admin/restaurants');
        return redirect('/management/category')->with('status', 'Photo uploaded succefully!');
    }

    public function edit($id)
    {
        // $categories = Category::findOrFail($id);
        
        // return view('management.edit',compact ('mgtproduct'));
    }

    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();

        return back()->with('success', 'Category deleted');
    }
}
