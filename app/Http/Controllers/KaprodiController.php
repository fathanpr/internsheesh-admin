<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kaprodi;

class KaprodiController extends Controller
{
    public function index(){
        $user = User::where('role_id' ,'=', 4)->paginate(15);
        return view('admin.akun.kaprodi',compact('user'));
    }

    public function deleteAkun($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('kaprodi.index')->with('success','Akun kaprodi berhasil dihapus');
    }

    public function edit($id){
        $kaprodi = User::find($id);
        return view('admin.akun.kaprodi_edit',compact('kaprodi'));
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
        return redirect()->route('kaprodi.index')->with('success','Password akun kaprodi berhasil diubah');  
        }else{
            return redirect()->back()->with('error','Password tidak cocok, silahkan isi kembali!');
        }
    }

    public function kaprodiData(){
        $data = Kaprodi::with('user')->paginate(15);
        return view('admin.kelola_user.kaprodi',compact('data'));
    }

    public function editData($id){
        $data = Kaprodi::find($id);
        return view('admin.kelola_user.kaprodi_edit',compact('data'));
    }

    public function updateData(Request $request,$id){
        $request->validate([
            'nama_lengkap'=>'required|string',
            'nidn' => 'required|numeric',
            'no_telp'=>'required|numeric',
            'tanggal_lahir'=>'required',
            'alamat'=>'required'
        ]);
        $data = Kaprodi::find($id);
        $data->update([
            'nama_lengkap'=>$request->nama_lengkap,
            'nidn' =>$request->nidn,
            'no_telp' =>$request->no_telp,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'alamat'=>$request->alamat,
        ]);
        return redirect()->route('kaprodi.data')->with('success','Data kaprodi berhasil diubah');
    }
}
