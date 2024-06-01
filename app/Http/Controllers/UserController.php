<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $admin = User::where('id_role', 1)->with('role')->get();
        $tutor_sd = User::where('id_role', 2)->with('role')->get();
        $tutor_smp = User::where('id_role', 3)->with('role')->get();
        $tutor_sma = User::where('id_role', 4)->with('role')->get();

        $roles = Role::all();

        // return response()->json($users);

        return view('user', [
            'admin' => $admin,
            'tutor_sd' => $tutor_sd,
            'tutor_smp' => $tutor_smp,
            'tutor_sma' => $tutor_sma,
            'roles' => $roles,
        ]);
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'id_role' => 'required|exists:m_role,id',
            'name' => 'required|string|',
            'username' => 'required|string|unique:m_user,username',
            'password' => 'required|string|',
        ]);

        User::create([
            'id_role' => $request->id_role,
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/user');
    }

    public function destroyUser($id)
    {
        $user = User::findOrFail($id);
        if ($user != null) {
            $user->delete();
        }

        return redirect('/user');
    }
}
