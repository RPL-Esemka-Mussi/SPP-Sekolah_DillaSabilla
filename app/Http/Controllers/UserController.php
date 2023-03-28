<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

/**
 * Summary of UserController
 */
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users') );
    }
    public function tambah()
    {
        return view ('user.tambah');
    }
    public function simpan(Request $request)
    {
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level' => $request->level,
            ]);

            return redirect('user')->with('sukses', 'Data Berhasil Ditambahkan✨.');
        } catch (\Exception $e) {
            return redirect('user')->with('gagal', 'Data Gagal Ditambahkan❌.');
        }

    }
    public function edit($id)
    {
        try {
           $users = User::findOrFail($id);

           return view('user.edit', compact('users'));
        }catch (\Exception $e){
           return redirect('user')->with('gagal', 'Data tidak Ditemukkan❌.');
        }

    }

    public function update(Request $request)
    {
        try{
            if($request->password != null){
                user::where('id', $request->id)->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => bcrypt($request->password),
                        'level' => $request->level,
                ]);
            }else{
                user::where('id', $request->id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'level' => $request->level,
                ]);
            }

            return redirect('user')->with('sukses', 'Data Berhasil diupdate✨.');
        }catch (\Exception $e){
            return redirect('user')->with('gagal', 'Data Gagal diupdate❌.');
        }
    }

    public function hapus($id)
    {
        try{
            
            user::destroy($id);

            return redirect('user')->with('sukses', 'Data Berhasil dihapus✨.');
        }catch(\Exception $e){
            return redirect('user')->with('gagal', 'Data tidak dihapus❌.');
        }
    }
}
