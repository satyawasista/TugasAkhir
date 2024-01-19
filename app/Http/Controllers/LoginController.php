<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }
    public function loginproses(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            $user = Auth::user();
            if ($user->status=='Aktif'){
            if ($user-> level =='Petugas' || $user->level=='Dokter'){
                return redirect()->route('dasboard');

        } elseif ($user->level == 'Pasien'){
            return redirect()->route('pendaftaranonline');
        }
        } else{
            Auth::logout();
            return redirect('/login')->with('warning', 'Email dan password sudah tidak aktif, silahkan datang keklinik untuk konfirmasi !');
            }
        
    }
        return redirect('/login')->with('warning', 'Email dan password anda salah!');
    }
    public function datauser(Request $request){
        $searchUser =$request->query('searchUser');

        if (!empty($searchUser)) {
            $data = User::whereIn('level',['Petugas','Dokter'])->orderBy('status','asc')->sortable()->latest()
            ->where('users.name','like','%'.$searchUser.'%')
            ->paginate(10);  
        } else {
            $data = user::whereIn('level',['Petugas','Dokter'])->orderBy('status','asc')->sortable()->latest()
            ->paginate(10);
        }
        return view('menupetugas.datauser', compact('data','searchUser'));
    }
    public function tambahuser(){
        return view('menupetugas.tambahuser');
    }
    public function insertuser(Request $request){
        $validasi = $request->validate([
            'name' => 'required',
            'email' => ['required','unique:users'],
            'password' => ['required','min:8'],
            'birth_date'=> 'required',
            'gender'=> 'required',
            'phone'=> 'required',
            'address'=>'required',
            'level' =>'required',
        ],[
            'required' => 'Data harus diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.min' => 'Panjang karakter password minimal 8 karakter',
        ]);
        $validasi['password'] = bcrypt(($validasi['password']));
        User::create($validasi);
        return redirect('/data-user')->with('toast_success', 'User Berhasil Ditambahkan!');
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
    public function detaildatauser($id){
        $data= User::find($id);
        return view('menupetugas.detaildatauser',compact('data'));
    }
    public function tampildatauser($id){
        $data= User::find($id);
        return view('menupetugas.tampilhuser',compact('data'));
    }
    public function edituser(Request $request,$id){
        $data= User::find($id);
        $data->update($request->all());
        return redirect('/data-user')->with('toast_success', 'User Berhasil Diedit!');
    }
    public function hapusdatuser($id){
        $data= User::find($id);
        $data->delete();
        return redirect()->route('datauser')->with('toast_success', 'Data Berhasil Dihapus!');
    }
    public function register(){
        return view('login.registrasi');
    }
    public function insertregistra(Request $request){
        $validasiData = $request->validate([
            'name' => 'required',
            'email' => ['required','email','unique:users'],
            'password' => ['required','min:8'],
            'birth_date'=> 'required',
            'gender'=> 'required',
            'phone'=> 'required',
            'address'=>'required',
            'level' =>'required',
        ],[
            'required' => 'Data harus diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.min' => 'Panjang karakter password minimal 8 karakter',
        ]);
        $validasiData['password'] = bcrypt(($validasiData['password']));
        User::create($validasiData);
        return redirect('/login')->with('toast_success', 'User Berhasil Ditambahkan!');
    }


}