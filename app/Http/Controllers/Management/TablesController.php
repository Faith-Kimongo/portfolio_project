<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Tables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tables = Auth::user()->tables;
        return view('management.tables', ['tables'=>$tables]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('management.addtable');
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

        $photo = array("photo" => $image_name, "restaurant_id" => Auth::id(),"number"=>0,1,"occupants"=>"");
        // dd($photo, $request->all());
        $tables = Tables::create(array_merge($request->all(), $photo));



        // return redirect('/admin/restaurants');
        return redirect('/management/tables')->with('status', 'Tables created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function show(Tables $tables)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $table = Tables::findOrFail($id);

        return view('management.edittable', compact('table'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // Find the table by ID
        $tables = Tables::find($id);
    
        // Check if the table exists
        if (!$tables) {
            return redirect('/management/tables')->with('error', 'Table not found.');
        }
       
        // dd($request);
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|integer',
            // 'cost' => 'required|numeric',
            'occupants'=>'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
       
        // Update the table data
        $tables->name = $validatedData['name'];
        $tables->number = $validatedData['number'];
        $tables->occupants = $validatedData['occupants'];


        
        // Handle the photo upload, if provided
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $filename);
            $tables->photo = $filename;
        }
    
        // Save the changes to the database
        $tables->save();
       
        // Redirect back to the management page with a success message
        return redirect('/management/tables')->with('success', 'Table updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tables  $tables
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tables = Tables::findOrFail($id);
        $tables->delete();

        return back()->with('success','Table removed Successfully!');
    }
}
