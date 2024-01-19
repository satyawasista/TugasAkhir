<?php

namespace App\Http\Controllers;

use App\Models\BirthRecord;
use App\Models\MaternityPatient;
use App\Models\Patient;
use App\Models\Record;
use App\Models\User;
use App\Models\Visitation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class PatientController extends Controller
{
    public function index(){
        $jumlahJan = Visitation::whereMonth('created_at', '01')->count();
        $jumlahFeb = Visitation::whereMonth('created_at', '02')->count();
        $jumlahMar = Visitation::whereMonth('created_at', '03')->count();
        $jumlahApr = Visitation::whereMonth('created_at', '04')->count();
        $jumlahMei = Visitation::whereMonth('created_at', '05')->count();
        $jumlahJun = Visitation::whereMonth('created_at', '06')->count();
        $jumlahJul = Visitation::whereMonth('created_at', '07')->count();
        $jumlahAgu = Visitation::whereMonth('created_at', '08')->count();
        $jumlahSep = Visitation::whereMonth('created_at', '09')->count();
        $jumlahOkt = Visitation::whereMonth('created_at', '10')->count();
        $jumlahNov = Visitation::whereMonth('created_at', '11')->count();
        $jumlahDes = Visitation::whereMonth('created_at', '12')->count();

        $bersalinJan = MaternityPatient::whereMonth('created_at', '01')->count();
        $bersalinFeb = MaternityPatient::whereMonth('created_at', '02')->count();
        $bersalinMar = MaternityPatient::whereMonth('created_at', '03')->count();
        $bersalinApr = MaternityPatient::whereMonth('created_at', '04')->count();
        $bersalinMei = MaternityPatient::whereMonth('created_at', '05')->count();
        $bersalinJun = MaternityPatient::whereMonth('created_at', '06')->count();
        $bersalinJul = MaternityPatient::whereMonth('created_at', '07')->count();
        $bersalinAgu = MaternityPatient::whereMonth('created_at', '08')->count();
        $bersalinSep = MaternityPatient::whereMonth('created_at', '09')->count();
        $bersalinOkt = MaternityPatient::whereMonth('created_at', '10')->count();
        $bersalinNov = MaternityPatient::whereMonth('created_at', '11')->count();
        $bersalinDes = MaternityPatient::whereMonth('created_at', '12')->count();


        $kunjungan = Visitation::whereDate('created_at','=',date('y-m-d'))->get();
        $oneWeekAgo = Carbon::now()->subDay(3)->format('Y-m-d');
        $dataKunjungan = MaternityPatient::whereDate('created_at', '>=', $oneWeekAgo);
        $dataPasien = Patient::get();
        $dataUser = User::whereIn('level',['Petugas','Dokter'])->get();
        return view('menupetugas.dasboard', compact(
            'jumlahJan',
            'jumlahFeb',
            'jumlahMar',
            'jumlahApr',
            'jumlahMei',
            'jumlahJun',
            'jumlahJul',
            'jumlahAgu',
            'jumlahSep',
            'jumlahOkt',
            'jumlahNov',
            'jumlahDes',

            'bersalinJan',
            'bersalinFeb',
            'bersalinMar',
            'bersalinApr',
            'bersalinMei',
            'bersalinJun',
            'bersalinJul',
            'bersalinAgu',
            'bersalinSep',
            'bersalinOkt',
            'bersalinNov',
            'bersalinDes'
        ), [
            'jumlahKunjungan'=>$kunjungan,
            'dataKunjungan'=>$dataKunjungan,
            'jumlahPasien'=>$dataPasien,
            'jumlahUser'=>$dataUser
        ]);
    }
    public function datapasien(Request $request){
        $search =$request->query('search');

        if (!empty($search)) {
            $data = Patient::orderBy('status','asc')->sortable()->latest()
            ->where('patients.identity_card','like','%'.$search.'%')
            ->orWhere('patients.name','like','%'.$search.'%')
            ->paginate(10);  
        } else {
            $data = Patient::orderBy('status','asc')->sortable()->latest()->paginate(10);
        }
        return view('menupetugas.datapasien',compact('data','search'));
    }
    public function datapasienkunjungan(Request $request){
        if($request->has('search')){
            $data = Patient::where('name','LIKE','%' .$request->search.'%')
            ->where('status','Aktif')
            ->latest()->paginate(10);
            if($data->isEmpty()) {
                session()->flash('error', 'Data tidak ditemukan, pastikan data pasien masih aktif !');
            }
        } else{
            $data = Patient::where('status','Aktif')->latest()->paginate(10);  
        }

        //no antrian
        $today = Carbon::today();
        $cek = Visitation::whereDate('created_at', $today)->count();
        if ($cek==0){
            $urut = 001;
        } else{
            $ambil= Visitation::all()->last();
            $urut = (int)substr($ambil->visitation_number,-3) + 1;
        }
        //nama dokter
        $dokter = User::where('level', 'dokter')->get();
        return view('menupetugas.datapasien-kunjungan',compact('data','urut','dokter'));
    }
    public function pasienbaru(){
        return view('menupetugas.daftarapasienbaru');
    }
    public function insertdata(Request $request){
        $validasi= $request->validate([
            'identity_card'=>'required',
            'name'=>'required',
            'birth_date'=>'required',
            'gender'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'status'=>'required',
        ], [
            'required' => 'Data harus diisi',
        ]);
        Patient::create($validasi);
        return redirect()->route('pasien')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }
    public function tampilkandata($id){
        $data= Patient::find($id);
        return view('menupetugas.tampildatapasien',compact('data'));
    }
    public function editdata(Request $request, $id){
        $data= Patient::find($id);
        $data->update($request->all());
        return redirect()->route('pasien')->with('toast_success', 'Data Berhasil Diedit!');
    }
    public function detaildatapasien($id){
        $data= Patient::find($id);
        $dataRecord= Record::where('id_patient',$id)->latest()->paginate(5);
        $dataBirthRecord= BirthRecord::where('id_patient',$id)->latest()->paginate(5);
        return view('menupetugas.detaildatapasien',compact('data','dataRecord','dataBirthRecord'));
    }
    public function hapusdata($id){
        $data= Patient::find($id);
        $data->delete();
        return redirect()->route('pendaftaranonline')->with('toast_success', 'Data Berhasil Dihapus!');
    }
    public function pendaftaranonline(){
        return view('menupasien.pendaftaranonline');
    }
    public function simpanpasienonline(Request $request){
        $validasi= $request->validate([
            'identity_card'=>'required',
            'name'=>'required',
            'birth_date'=>'required',
            'gender'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'status'=>'required',
        ], [
            'required' => 'Data harus diisi',
        ]);
        Patient::create($validasi);
        return redirect()->back()->with('toast_success', 'Data Berhasi Ditambahakan!');
    }
    public function datapasienkunjunganonline(Request $request){
        // if($request->has('search')){
        //     $data = Patient::where('name','LIKE','%' .$request->search.'%')->latest()->paginate(10);
        // } else{
        //     $data = Patient::latest()->paginate(10);  
        // }

        // new
    $search = $request->query('search');
    $tanggal = $request->query('tanggal');

    $query = Patient::query()->where('status','Aktif');
    $querytgl = Visitation::query()->count();

    if ($search) {
        $query->where('name', 'like', '%' . $search . '%');
    }
    if($query->count()==0){
        session()->flash('error', 'Data tidak ditemukan, datanglah keklinik untuk memastikan data anda masih aktif !');
    }
         $data = $query->latest()->paginate(10);
    
    //no kunjungan
    $today = Carbon::today();
    // $cek = Visitation::whereDate('created_at', $today)->count();
    $cek = Visitation::whereDate('created_at', $tanggal)->count();
    if ($cek==0){
        $urut = 001;
    } else{
        $ambil= Visitation::all()->last();
        $urut = (int)substr($ambil->visitation_number,-3) + 1;
        }
        return view('menupasien.datapasien-kunjungan-online',compact('data','urut',));
    }
    
    }
