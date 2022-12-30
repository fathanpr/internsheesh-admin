<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
    $telkom = User::select(DB::raw("CAST(COUNT(*) as int) as telkom"))
    ->GroupBy(DB::raw("Month(created_at)")) 
    ->pluck('telkom');

    $kalbe = User::select(DB::raw('CAST(COUNT(*) as int) as kalbe'))
    ->whereRaw("role_id = 2")
    ->GroupBy(DB::raw("MONTHNAME(created_at)")) 
    ->pluck('kalbe');

    $hashmicro = User::select(DB::raw('CAST(COUNT(*) as int) as hasmicro'))
    ->whereRaw("role_id = 3")
    ->GroupBy(DB::raw("MONTHNAME(created_at)")) 
    ->pluck('hasmicro');

    $pemerintahan = User::select(DB::raw('CAST(COUNT(*) as int) as pemerintahan'))
    ->whereRaw("role_id = 1")
    ->GroupBy(DB::raw("MONTHNAME(created_at)")) 
    ->pluck('pemerintahan');

    $bulan = User::select(DB::raw("MONTHNAME(created_at) as bulan"))
        ->GroupBy(DB::raw("MONTHNAME(created_at)")) 
        ->pluck('bulan');

    $admin = User::where('role_id','=',1)->count();
    $magangadm = User::where('role_id','=',5)->count();
    $admins = $admin + $magangadm;
    $mahasiswa = User::where('role_id','=',2)->count();
    $pembimbing = User::where('role_id','=',3)->count();
        return view('admin.index',compact('admins','mahasiswa','pembimbing','telkom','kalbe','hashmicro','pemerintahan','bulan'));
    }

    public function register(){
        return view('admin.buat_akun');
    }

    public function store(Request $request){
        
        

        if($request->password == $request->confirm_password){
            User::create([
                'role_id' => $request->role_id,
                'email'=> $request->email,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->back()->with('success','Akun berhasil dibuat');
        }else{
            return redirect()->back()->withInput()->with('error','Registrasi akun gagal, silahkan cek kembali form!');
        }
    }

    public function tampilDataAdmin(){
        $magangadm = User::where('role_id' ,'=', 5)->orWhere('role_id' ,'=', 1)->paginate(5);
        return view('admin.akun.magangadm',compact('magangadm'));
    }
}
