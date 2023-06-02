<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        return view('owner.tambahakun');
    }

    public function store(Request $request)
    {
        $user = new user();
        $this->validate($request, [
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'password' => 'required', 'string', 'min:8', 'confirmed',
            'role' => 'required', 'in:admin,customer,owner'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect('akunadmin');
    }

    public function edit($id_user)
    {
        $user = user::where('id_user', $id_user)->first();
        return view('owner.editakun', ['user' => $user]);
    }

    public function update(Request $request, $id_user)
    {
        $user = user::find($id_user);
        $this->validate($request, [
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'password' => 'required', 'string', 'min:8', 'confirmed',
            'role' => 'required', 'in:admin,customer,owner'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect('akunadmin');
    }

    public function formkatasandi($id_user)
    {
        $user = user::find($id_user);
        return view('owner.hapusakun', ['user' => $user]);
    }

    public function destroy($id_user, Request $request)
    {
        //
        $model = user::find($id_user);
        if (!(Hash::check($request->get('katasandi'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "katasandi yang anda masukkan salah. silahkan coba lagi.");
        }
        $model->delete();
        return Redirect('akunadmin');
    }
}
