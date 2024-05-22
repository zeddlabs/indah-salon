<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_telp' => 'required|string|max:13',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'email' => 'required|email|unique:pelanggan',
            'password' => 'required|min:8',
        ], [
            'nama.required' => 'Nama harus diisi',
            'nama.string' => 'Nama harus berupa teks',
            'nama.max' => 'Nama maksimal 255 karakter',
            'alamat.required' => 'Alamat harus diisi',
            'alamat.string' => 'Alamat harus berupa teks',
            'no_telp.required' => 'Nomor telepon harus diisi',
            'no_telp.string' => 'Nomor telepon harus berupa teks',
            'no_telp.max' => 'Nomor telepon maksimal 13 karakter',
            'tanggal_lahir.required' => 'Tanggal lahir harus diisi',
            'tanggal_lahir.date' => 'Tanggal lahir harus berupa tanggal',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email harus berupa email',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 8 karakter',
        ]);

        $image = null;

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png|max:2048',
            ], [
                'foto.image' => 'Foto harus berupa gambar',
                'foto.mimes' => 'Foto harus berformat jpg, jpeg, atau png',
                'foto.max' => 'Foto maksimal 2MB',
            ]);

            $image = $request->file('foto')->store('pelanggan');
        }

        $user = Pelanggan::create([
            'foto' => $image,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->login($user);

        return redirect('/');
    }
}
