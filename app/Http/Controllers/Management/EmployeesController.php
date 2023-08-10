<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employees;
use Illuminate\Support\Facades\Auth;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employees::all();
        return view('management.employees', ['employees'=> $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('management.addemp');
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

        $photo = array("photo" => $image_name, "restaurant_id" => Auth::id());
        $employees = Employees::create(array_merge($request->all(), $photo));



        // return redirect('/admin/restaurants');
        return redirect('/management/employees')->with('status', 'Photo uploaded succefully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee = Employees::findOrFail($id);
        
        return view('management.editemp',compact ('employee'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     
        // Find the employee by ID
        $employees = Employees::find($id);
    
        // Check if the employee exists
        if (!$employees) {
            return redirect('/management/employees')->with('error', 'Employee not found.');
        }
       
        // dd($request);
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'occupation' => 'required|string',
            // 'cost' => 'required|numeric',
            'availability'=>'nullable',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
       
        // Update the employee data
        $employees->name = $validatedData['name'];
        $employees->occupation = $validatedData['occupation'];
        $employees->availability = $validatedData['availability'];


        
        // Handle the photo upload, if provided
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $filename);
            $employees->photo = $filename;
        }
    
        // Save the changes to the database
        $employees->save();
       
        // Redirect back to the management page with a success message
        return redirect('/management/employees')->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employees = Employees::findOrFail($id);
        $employees->delete();

        return back()->with('success','Employee removed Successfully!');
    }
}
