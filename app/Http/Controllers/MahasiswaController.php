<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        $user = User::where('role_id' ,'=', 2)->paginate(15);
        return view('admin.akun.mahasiswa',compact('user'));
    }

    public function deleteAkun($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('mahasiswa.index')->with('success','Akun mahasiswa berhasil dihapus');
    }
    
    public function edit($id){
        $mahasiswa = User::find($id);
        return view('admin.akun.mahasiswa_edit',compact('mahasiswa'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'password' => 'required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required',
        ]);

        $akun = User::find($id);
        $new_password = bcrypt($request->password);

        if($request->password == $request->confirm_password){
            $akun->update([
                'password'=>$new_password,
        ]);
        return redirect()->route('mahasiswa.index')->with('success','Password akun mahasiswa berhasil diubah');  
        }else{
            return redirect()->back();
        }
    }

    public function mahasiswaData(){
        $data = Mahasiswa::with('user')->paginate(15);
        return view('admin.kelola_user.mahasiswa',compact('data'));
    }

    public function editData($id){
        $data = Mahasiswa::find($id);
        return view('admin.kelola_user.mahasiswa_edit',compact('data'));
    }

    public function updateData(Request $request,$id){
        $request->validate([
            'nama_lengkap'=>'required|string',
            'npm' => 'required|numeric',
            'no_telp'=>'required|numeric',
            'prodi'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required'
        ]);
        $data = Mahasiswa::find($id);
        $data->update([
            'nama_lengkap'=>$request->nama_lengkap,
            'npm' =>$request->npm,
            'no_telp' =>$request->no_telp,
            'prodi' =>$request->prodi,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'alamat'=>$request->alamat,
        ]);
        return redirect()->route('mahasiswa.data')->with('success','Data mahasiswa berhasil diubah');
    }
}
