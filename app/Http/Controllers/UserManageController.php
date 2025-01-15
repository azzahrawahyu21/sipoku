<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Divisi;
use App\Models\Position;
use App\Models\Role;
use App\Models\User;

class UserManageController extends Controller
{
    public function index()
    {
        // Ambil data dari Divisi dan Role
        $divisi = Divisi::all();  // Ambil data divisi dari database
        $roles = Role::all();  // Ambil data roles dari database
        $positions = Position::all();  // Ambil data roles dari database
        $users = User::all();  // Ambil data roles dari database
        // Mengambil semua pengguna dengan relasi role
        $users = User::with(['role', 'divisi', 'position'])->get();

        // Mengirimkan data ke view
        
        // Kirim data ke view user-manage
        return view('superadmin.user-manage', compact('divisi', 'roles','positions','users'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'required|string|max:15',
            'divisi_id_divisi' => 'required|numeric',
            'position_id_position' => 'required|numeric',
            'role_id_role' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'divisi_id_divisi' => $request->divisi_id_divisi,
            'position_id_position' => $request->position_id_position,
            'role_id_role' => $request->role_id_role,
        ]);

        return redirect()->route('dashboard')->with('success', 'User added successfully.');
    }
}
