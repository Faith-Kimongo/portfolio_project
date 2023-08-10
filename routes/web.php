<?php

// use App\Http\Controllers\Management\CategoryContoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use  App\Http\Controllers\Admin\RestaurantsController;

// Management Controllers
use  App\Http\Controllers\Management\ProductsController;
use  App\Http\Controllers\Management\EmployeesController;
use App\Http\Controllers\Management\ProdtableController;
Use App\Http\Controllers\Management\StaffController;
Use App\Http\Controllers\Management\TablesController;
use App\Http\Controllers\Management\CategoryContoller;

// Staff Controllers
Use App\Http\Controllers\Staff\OrderController;
Use App\Http\Controllers\Staff\ProductController;
use App\Http\Controllers\Staff\StafftableController;
use App\Http\Controllers\Staff\TeamController;

// sales,performance, traffic
use App\Http\Controllers\Management\MgtController;

// chart
use App\Http\Controllers\Management\ChartController;

// users
use App\Http\Controllers\Users\UsermerchantsController;

//Admin
use App\Http\Controllers\Admin\MerchantsController;
use App\Http\Controllers\Admin\MerchantbillsController;
/*
|--------------------------------------------;------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    if(Auth::user()){
  if(Auth::user()->type=='user')
  {
    return redirect('/home');
  }  
  elseif(Auth::user()->type=='admin')
  {
    return redirect('/admin/adhome');
  }
  elseif(Auth::user()->type=='management')
  {
    return redirect('/management/mgthome');
  }
  elseif(Auth::user()->type=='staff')
  {
    return redirect('/staff/staffhome');
  }
}
  else{
    return redirect('/login');
  }

});



require __DIR__.'/auth.php';

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
// user
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
  Route::get('/user/merchants', 'CategoryController@index')->name('user.merchants');
  // Route::resource('/user/merchants', MerchantsController::class);
  

});


Route::middleware(['auth', 'user-access:user'])->group(function () {
    

    Route::get('/category', function () {
        return view('user.category');
    });
    Route::get('/breakfast', function () {
        return view('user.breakfast');
    });
    Route::get('/lunch', function () {
        return view('user.lunch');
    });
    Route::get('/drinks', function () {
        return view('user.drinks');
    });
    Route::get('/dinner', function () {
        return view('user.dinner');
    });
    Route::get('/dessert', function () {
        return view('user.dessert');
    });

    Route::get('/merchants', function () {
      return view('user.merchants');
    });

    Route::get('/menus', function () {
      return view('user.menus');
    });
  // category
  Route::get('/user/merchants/{restaurant}/categories', [MerchantsController::class, 'showCategories']);

  // to show categories for each merchant
  Route::get('/management/usermerchants/{restaurant_id}', 'UserMerchantsController@show')->name('usermerchants.show');



    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/user/category', [UsermerchantsController::class, 'category'])->name('category');
    Route::get('/restaurant/{id}', [HomeController::class, 'restaurant']);
    Route::get('/menus', [HomeController::class, 'menus'])->name('menus');
    Route::resource('/user/merchants', UsermerchantsController::class);
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
// Admin Routes
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
  // Your other admin routes here
  Route::get('/merchants', 'MerchantsController@index')->name('admin.merchants');
  Route::get('/merchants/create', 'MerchantsController@create')->name('admin.merchants.create');
  Route::post('/merchants/store', 'MerchantsController@store')->name('admin.merchants.store');
  // Add other admin routes as needed
});

// odd routes below to be removed

Route::middleware(['auth', 'user-access:admin'])->group(function () {

  Route::get('/adhome', function () {
    return view('admin.adhome');
});
  
  Route::get('/adreviews', function () {
    return view('admin.adreviews');
});

  Route::get('/restaurants', function () {
    return view('admin.merchants');
});

  Route::get('/resttable', function () {
    return view('admin.resttable');
});

Route::get('/Update', function () {
  return view('admin.Update');
});

Route::get('/adhome', [HomeController::class, 'index'])->name('adhome');
Route::resource('/admin/merchantbills', MerchantbillsController::class);
Route::resource('/admin/merchants', MerchantsController::class);
// Route::post('/admin/merchants/{id}', [MerchantsController::class, 'update']);

  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/adreviews', [HomeController::class, 'adreviews'])->name('admin.adreviews');
    Route::get('/admin/resttable', [HomeController::class, 'resttable'])->name('admin.resttable');
    Route::get('/admin/addrest', [HomeController::class, 'addrest'])->name('admin.addrest');
    Route::get('/admin/adhome', [HomeController::class, 'adhome'])->name('admin.adhome');
    Route::get('/admin/Update', [HomeController::class, 'Update'])->name('admin.Update');
    
});
  
/*------------------------------------------
--------------------------------------------
All management Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:management'])->group(function () {

    Route::get('/management', function () {
        return view('management.management');
    });

    Route::get('/addprod', function () {
      return view('management.addprod');
  });  

    Route::get('/mgtcalendar', function () {
      return view('management.mgtcalendar');
  });   

  Route::get('/reviews', function () {
    return view('management.reviews');
});

Route::get('/mgtproducts', function () {
  return view('management.mgtproducts');
});

Route::get('/category', function () {
  return view('management.category');
});

Route::get('/employees', function () {
  return view('management.employees');
});

Route::get('/prodtable', function () {
  return view('management.prodtable');
});

Route::get('/emptable', function () {
  return view('management.emptable');
});

Route::get('/addemp', function () {
  return view('management.addemp');
});

Route::get('/management/mgthome', [HomeController::class, 'mgthome'])->name('mgthome');
Route::get('/management/mgthome', [MgtController::class, 'showSalesOverview']);
Route::get('/management/mgthome', [MgtController::class, 'performance']);
Route::get('/management/mgthome', [MgtController::class, 'showTrafficOverview']);

//products
Route::resource('/management/mgtproducts', ProductsController::class);
Route::post('/edit/product/{id}', [ProductsController::class, 'update']);

//employees
Route::resource('/management/employees', EmployeesController::class);
Route::post('/management/employee/{id}', [EmployeesController::class, 'update']);

//tables
Route::resource('/management/tables', TablesController::class);
Route::post('/management/table/{id}', [TablesController::class, 'update']);

// category
Route::resource('/management/category', CategoryContoller::class);
Route::post('/management/category/{id}', [CategoryContoller::class, 'update']);

// chart
// Route::get('/getChartData/{dataType}', [ChartController::class, 'getChartData']);
Route::get('/api/chart-data/{chartType}', [ChartController::class, 'getChartData']);






  
    Route::get('/management/home', [HomeController::class, 'managementHome'])->name('management.home');

    Route::get('/management/mgtcalendar', [HomeController::class, 'mgtcalendar'])->name('management.mgtcalendar');
    Route::get('/management/reviews', [HomeController::class, 'reviews'])->name('management.reviews');
    Route::get('/management/addprod', [HomeController::class, 'addprod'])->name('management.addprod');
    Route::get('/management/addemp', [HomeController::class, 'addemp'])->name('management.addemp');
});

/*------------------------------------------
--------------------------------------------
All Staff Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:staff'])->group(function () {

    Route::get('/staff', function () {
        return view('staff.staffhome');
    });

    Route::get('/team', function () {
      return view('staff.team');
    });

    Route::get('/order', function () {
      return view('staff.order');
    });

    Route::get('/products', function () {
      return view('staff.products');
    });

    Route::get('/stafftable', function () {
      return view('staff.stafftable');
    });

    Route::get('/calendar', function () {
      return view('staff.calendar');
    });

    Route::get('/alerts', function () {
      return view('staff.alerts');
    });

    Route::resource('/staff/products', ProductController::class);
    Route::resource('/staff/stafftable', StafftableController::class);
    Route::resource('/staff/team', TeamController::class);
    Route::resource('/staff/order', OrderController::class);
    Route::post('/staff/order/{id}', [OrderController::class, 'update']);


    
    Route::get('/staff/staffhome', [HomeController::class, 'staffhome'])->name('staff.staffhome');
    // Route::get('/staff/team', [HomeController::class, 'team'])->name('staff.team');

    Route::get('/staff/calendar', [HomeController::class, 'calendar'])->name('staff.calendar');
    Route::get('/staff/alerts', [HomeController::class, 'alerts'])->name('staff.alerts');
});


