<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mgtproducts = Products::all();
        return view('management.mgtproducts', ['mgtproducts'=> $mgtproducts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::All();
        return view('management.addprod', ['categories'=>$categories]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //this gives the image and 0 if no image.
        $image_name = 0;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $image_name= $filename;
        }

        $photo = array("photo" => $image_name, "restaurant_id" => Auth::id(), "duration"=>"", "cost"=>"","status"=>"");
        $mgtproducts = Products::create(array_merge($request->all(), $photo));



        // return redirect('/admin/restaurants');
        return redirect('/management/mgtproducts')->with('status', 'Photo uploaded succefully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        // dd('products');
        $mgtproduct = Products::findOrFail($id);
        
        return view('management.edit',compact ('mgtproduct'));

        // return response()->view('management.mgtproducts',['mgtproduct'=>$mgtproduct]);
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Find the product by ID
        $mgtproducts = Products::find($id);
    
        // Check if the product exists
        if (!$mgtproducts) {
            return redirect('/management/mgtproducts')->with('error', 'Product not found.');
        }
    
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|string',
            'cost' => 'required|numeric',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Update the product data
        $mgtproducts->name = $validatedData['name'];
        $mgtproducts->status = $validatedData['status'];
        $mgtproducts->Table_no = $validatedData['Table_no'];
        $mgtproducts->cost = $validatedData['cost'];
        // $mgtproducts->coverphoto = $validatedData['coverphoto'];
    
        // Handle the photo upload, if provided
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $filename);
            $mgtproducts->photo = $filename;
        }
    
        // Save the changes to the database
        $mgtproducts->save();
    
        // Redirect back to the management page with a success message
        return redirect('/management/mgtproducts')->with('success', 'Product updated successfully.');
    }
    
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mgtproducts = Products::findOrFail($id);
        $mgtproducts->delete();

        // return redirect('/management/mgtproducts/');
        return back()->with('success','Product deleted Successfully!');
    }
}
