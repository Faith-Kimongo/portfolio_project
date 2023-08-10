<?php

namespace App\Http\Controllers;

use App\Models\Tables;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            return view('user.home');
        // }elseif(Auth::$admin->hasRole('admin')){
        //     return view('admin.adhome');
        // }elseif(Auth::$staff->hasRole('staff')){
        //     return view('staff.staffhome');
        // }elseif(Auth::$management->hasRole('management')){
        //     return view('management.mgthome');
        // }

    } 
    public function merchants()
    {
        return view('user.merchants');
    }
    public function category()
    {
        return view('user.category');
    }
    public function restaurant($id)
    {
        $table = Tables::find($id);
        // dd($table);
        return view('user.category');
    }

    public function menus()
    {
        return view('user.menus');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin.home');
    }

    public function adreviews()
    {
        return view('admin.adreviews');
    }

    public function bills()
    {
        return view('admin.Merchantbills');
    }

    public function resttable()
    {
        return view('admin.resttable');
    }

    public function restaurants()
    {
        return view('admin.merchants');
    }

    public function addrest()
    {
        return view('admin.addrest');
    }

    public function adhome()
    {
        return view('admin.adhome');
    }

    public function Update()
    {
        return view('admin.Update');
    }

  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managementHome()
    {
        return view('management.home');
    }

    public function mgthome()
    {
        return view('management.mgthome');
    }

    public function mgtcalendar()
    {
        return view('management.mgtcalendar');
    }

    public function reviews()
    {
        return view('management.reviews');
    }

    public function mgtproducts()
    {
        return view('management.mgtproducts');
    }

    public function employees()
    {
        return view('management.employees');
    }

    public function prodtable()
    {
        return view('management.prodtable');
    }

    public function emptable()
    {
        return view('management.emptable');
    }

    public function addprod()
    {
        return view('management.addprod');
    }

    public function addemp()
    {
        return view('management.addemp');
    }

    

    


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function staffHome()
    {
        return view('staff.staffhome');
    }

    public function team()
    {
        return view('staff.team');
    }

    public function order()
    {
        return view('staff.order');
    }

    public function products()
    {
        return view('staff.products');
    }

    public function calendar()
    {
        return view('staff.calendar');
    }

    public function alerts()
    {
        return view('staff.alerts');
    }


}
