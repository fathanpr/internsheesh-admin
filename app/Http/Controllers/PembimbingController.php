<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pembimbing;

class PembimbingController extends Controller
{
    public function index(){
        $user = User::where('role_id' ,'=', 3)->paginate(15);
        return view('admin.akun.pembimbing',compact('user'));
    }

    public function deleteAkun($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('pembimbing.index')->with('success','Akun Pembimbing berhasil dihapus');
    }

    public function edit($id){
        $pembimbing = User::find($id);
        return view('admin.akun.pembimbing_edit',compact('pembimbing'));
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
        return redirect()->route('pembimbing.index')->with('success','Password akun pembimbing berhasil diubah');  
        }else{
            return redirect()->back();
        }
    }

    public function pembimbingData(){
        $data = Pembimbing::with('user')->paginate(15);
        return view('admin.kelola_user.pembimbing',compact('data'));
    }

    public function editData($id){
        $data = Pembimbing::find($id);
        return view('admin.kelola_user.pembimbing_edit',compact('data'));
    }

    public function updateData(Request $request,$id){
        $request->validate([
            'nama_lengkap'=>'required|string',
            'nidn' => 'required|numeric',
            'no_telp'=>'required|numeric',
            'tanggal_lahir'=>'required',
            'alamat'=>'required'
        ]);
        $data = Mahasiswa::find($id);
        $data->update([
            'nama_lengkap'=>$request->nama_lengkap,
            'nidn' =>$request->nidn,
            'no_telp' =>$request->no_telp,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'alamat'=>$request->alamat,
        ]);
        return redirect()->route('pembimbing.data')->with('success','Data pembimbing berhasil diubah');
    }
}
