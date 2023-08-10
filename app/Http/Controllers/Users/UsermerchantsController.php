<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Merchants;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class UsermerchantsController extends Controller
{
    //
    public function index() 
    {
        $merchants = Merchants::all();
        return view('user.merchants', ['merchants'=> $merchants]);
        // return view('user.merchants');
    }

    public function category(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add image validation rules
        ]);

        $image_name = null;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/category'), $filename);
            $image_name = $filename;
        }

        $data = [
            'name' => $request->input('name'),
            'restaurant_id' => Auth::id(),
            'photo' => $image_name,
        ];

        $category = Category::create($data);

        return redirect('/user/category')->with('status', 'Category created successfully.');
    }

    public function show($restaurant_id)
    {
        // $merchant = Category::find($restaurant_id);
        //  dd($merchant);
        // $categories = Category::find();
        //  $categories = $merchant->category;
        // dd($categories);
        // 

        $foundRecords = Category::where('restaurant_id', $restaurant_id)->get();
        // dd($foundRecords);

        return view('user.category', [
            'categories' => $foundRecords
        ]);


    }
}
