<?php

namespace App\Http\Controllers;

use App\Models\pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Models\product;
use App\Models\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Redirect;

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
        if (strcmp(Auth::user()->role, "customer") == 0) {
            $product = product::All();
            return view('dashboard', ['product' => $product]);
        }
        if (strcmp(Auth::user()->role, "admin") == 0) {
            $pendapatan = 250000;
            $pengeluaran = pengeluaran::All()->sum('total_pengeluaran');
            return view('admin.dashboardadmin', ['pengeluaran'=>$pengeluaran, 'pendapatan'=>$pendapatan]);
        }
        if (strcmp(Auth::user()->role, "owner") == 0) {
            $pendapatan = 250000;
            $pengeluaran = pengeluaran::All()->sum('total_pengeluaran');
            return view('owner.dashboardowner', ['pengeluaran'=>$pengeluaran, 'pendapatan'=>$pendapatan]);
        }
    }
    
    public function showChangePasswordForm()
    {
        $user = Auth::user();
        return view('auth.katasandi', ['user' => $user]);
    }

    public function changePassword(Request $request)
    {

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success", "Password changed successfully !");
    }

    public function deleteAkun()
    {
        $user = Auth::user();

        Auth::logout();

        if ($user->delete()) {

            return Redirect::route('/');
        }
    }
}
