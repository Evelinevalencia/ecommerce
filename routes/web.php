<?php

use App\Http\Controllers\designcontroller;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\alamatController;
use App\Http\Controllers\keranjangController;
use App\Http\Controllers\pengeluaranController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\UserController;
use App\Models\alamat;
use App\models\design;
use App\Models\pengeluaran;
use App\Models\product;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/design', function () {
    $design = design::all();
    return view('design', ['design' => $design]);
});
Route::get('/', function () {
    $product = product::All();
    return view('dashboard', ['product'=> $product]);
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::get('/katalog', function () {
    $product = product::All();
    return view('katalog', ['product'=>$product]);
});



Route::get('/deskripsiproduk/{product}', function ($id_product) {
    $product = product::find($id_product);
    return view('deskripsiproduk', ['product'=>$product]);
});

Route::resource('/beli', transaksiController::class);

// customer

Route::middleware(['auth'])->group(function () {

    Route::get('/qr', function (){
        return view('qr');
    });

    Route::get('/listalamat', function () {
        $alamat = alamat::with('user')->get();
        $akun = Auth::user();
        return view('auth.listalamat', ['alamat' => $alamat, 'akun' => $akun]);
    })->name('alamat');

    Route::get('/alamat/create', [alamatController::class, 'create'])->name('new-post');
    Route::post('/alamat/store', [alamatController::class, 'store'])->name('store');

    Route::get('/akun', function () {
        $akun = Auth::user();
        return view('auth.akun', ['akun' => $akun]);
    });

    Route::get('/changePassword', 'App\Http\Controllers\HomeController@showChangePasswordForm');
    Route::post('/changePassword', 'App\Http\Controllers\HomeController@changePassword')->name('changePassword');
    
    Route::resource('/keranjang', keranjangController::class)->middleware('checkRole:customer');

    // Route::get('/transaksi', function () {
    //     $akun = Auth::user();
    //     return view('auth.transaksi', ['akun' => $akun]);
    // });

    Route::get('/transaksi', 'App\Http\Controllers\keranjangController@riwayattransaksi');
    
    Route::get('/pengaturan', function () {
        $akun = Auth::user();
        return view('auth.pengaturan', ['akun' => $akun]);
    });

    Route::post('/hapusakun', 'App\Http\Controllers\HomeController@deleteAkun')->name('hapusakun');
});

// admin
Route::get('/tabeltransaksi', 'App\Http\Controllers\keranjangController@transaksi');
Route::get('/tambahtransaksi', 'App\Http\Controllers\transaksiController@tambah');
Route::resource('/product', ProductController::class)->middleware(['checkRole:admin']);
Route::get('/datauser', 'App\Http\Controllers\userController@index')->middleware(['checkRole:admin']);
Route::resource('/designadmin', designcontroller::class)->middleware(['checkRole:admin']);
Route::resource('/pengeluaran', pengeluaranController::class)->middleware((['checkRole:admin']));
Route::get('/hapusdesain/{designadmin}', 'App\Http\Controllers\designcontroller@formkatasandi')->middleware(['checkRole:admin']);
Route::get('/hapusproduk/{produk}', 'App\Http\Controllers\ProductController@formkatasandi')->middleware(['checkRole:admin']);
Route::get('/hapuspengeluaran/{pengeluaran}', 'App\Http\Controllers\pengeluaranController@formkatasandi')->middleware(['checkRole:admin']);
Route::get('/dashboardadmin', function () {
    return view('admin.dashboardadmin');
})->middleware(['checkRole:admin']);

Route::get('/editadmin', function () {
    return view('admin.editadmin');
})->middleware('checkRole:admin');

Route::get('/admin', function () {
    return view('admin');
})->middleware('checkRole:admin');


// owner

Route::get('/productowner', function () {
    $product = product::All();
    return view('owner.produkowner', ['product'=>$product]);
})->middleware(['checkRole:owner']);

Route::get('/pengeluaranowner', function () {
    $pengeluaran = pengeluaran::All();
    return view('owner.pengeluaranowner', ['pengeluaran'=>$pengeluaran]);
})->middleware(['checkRole:owner']);

Route::get('/designowner', function () {
    $design = design::All();
    return view('owner.designowner', ['design'=>$design]);
})->middleware(['checkRole:owner']);

Route::get('/akunadmin', function(){
    $user = User::where('role', '=' , 'admin')->get();
    return view('owner.akunadmin', ['user'=>$user]);
})->middleware(['checkRole:owner']);

Route::get('/akuncust', function(){
    $user = User::where('role', '=' , 'customer')->get();
    return view('owner.akuncust', ['user'=>$user]);
})->middleware(['checkRole:owner']);

Route::get('/akunowner', function(){
    $user = User::where('role', '=' , 'owner')->get();
    return view('owner.akunowner', ['user'=>$user]);
})->middleware(['checkRole:owner']);

Route::resource('/tambahakun', usercontroller::class)->middleware(['checkRole:owner']);

Route::get('/hapusakun/{akun}', 'App\Http\Controllers\usercontroller@formkatasandi')->middleware(['checkRole:owner']);