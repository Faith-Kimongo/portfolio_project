<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $orders = Order::all();
        return view('staff.order', ['orders'=>$orders]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('staff.createorder');
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
        //this gives the image and 0 if no image.
        $image_name = 0;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $image_name= $filename;
        }

        $photo = array("photo" => $image_name, "cost"=>"", "order_id" => "", "product_id" =>"", "status" => "");
        $orders = Order::create(array_merge($request->all(), $photo));



        // return redirect('/admin/restaurants');
        return redirect('/staff/order')->with('status', 'Uploaded succefully!');
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
        // return view('staff.vieworder');
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
        $order = Order::findOrFail($id);
        return view('staff.vieworder',compact('order'));
        // return back()->with('success', 'Edited successfully!');
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
        
        // Find the order by ID
        $orders = Order::find($id);
        
        // Check if the employee exists
        if (!$orders) {
            return redirect('/staff/order')->with('error', 'Order not found.');
        }
        
        // dd($request);
        // Validate the request data
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // 'name' => 'required|string',
            'cost'=>'required|string',
            'table_no'=>'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // dd($orders);
       
        // dd($orders);
        // Update the employee data
        $orders->name = $validatedData['name'];
        $orders->cost = $validatedData['cost'];
        $orders->table_no = $validatedData['table_no'];


        
        // Handle the photo upload, if provided
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $filename);
            $orders->photo = $filename;
        }
    
        // Save the changes to the database
        $orders->save();
       
        // Redirect back to the management page with a success message
        return redirect('/staff/order')->with('success', 'Updated successfully.');
        // return back()->with('success', 'Edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $orders = Order::findOrFail($id);
        $orders->delete();

        return back()->with('success', 'Order canceled successfully!');
    }
}
