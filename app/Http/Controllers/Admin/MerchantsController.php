<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin\Merchants;
use Illuminate\Support\Facades\Auth;

class MerchantsController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $merchants = Merchants::all();
        return view('admin.merchants', ['merchants'=> $merchants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.addmerchant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $image_name = 0;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $image_name= $filename;
        }

        
        $user = User::create(['email'=>$request->email, 'name'=>$request->name, 'type'=>2, 'password'=>bcrypt('123456')]);
        $photo = array("photo" => $image_name, "user_id" => $user->id);
        $merchants = Merchants::create(array_merge($request->all(), $photo));

        // return redirect('/admin/restaurants');
        return redirect('/admin/merchants')->with('status', 'Photo uploaded succefully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merchants  $Merchants
     * @return \Illuminate\Http\Response
     */
    public function showCategories(Merchants $merchants)
    {
        //
        {
            $categories = $merchants->categories;
            return view('user.category', ['merchants' => $merchants, 'categories' => $categories]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merchants  $Merchants
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $merchants = Merchants::findOrFail($id);
        
        return view('admin.editmerchants',compact ('merchants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Merchants  $Merchants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Find the merchant by ID
        $merchants = Merchants::find($id);
    
        // Check if the merchant exists
        if (!$merchants) {
            return redirect('/admin/merchants')->with('error', 'Merchant not found.');
        }
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|string',
            'location'=> 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
       
        // Update the merchant data
        $merchants->name = $validatedData['name'];
        $merchants->phone = $validatedData['phone'];
        $merchants->email = $validatedData['email'];
        $merchants->location = $validatedData['location'];


        
        // Handle the photo upload, if provided
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $filename);
            $merchants->photo = $filename;
        }
    
        // Save the changes to the database
        $merchants->save();
       
        // Redirect back to the management page with a success message
        return redirect('/admin/merchants')->with('success', 'Merchant updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merchants  $Merchants
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       $merchants = Merchants::findOrFail($id);
       $merchants->delete();
       
       return back()->with('success', 'Merchant removed successfully!');
    }
}
