<?php

namespace App\Http\Controllers;

use App\Models\MaternityPatient;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class MaternityPatientController extends Controller
{
    public function daftarapasienmelahirkan($id){
        $data= Patient::find($id);
        $dokter = User::where('level', 'dokter')->get();
        return view('menupetugas.daftarapasienmelahirkan',compact('data','dokter'));
    }
    public function simpanpasienbersalin(Request $request){
        $validasi= $request->validate([
            'id_patient'=>'required',
            'id_user'=>'required',
            'identity_number_family'=>'required',
            'name_family'=>'required',
            'birth_date_family'=>'required',
            'address_family'=>'required',
            'phone_family'=>'required',
            'sibling_relationship'=>'required',
            'hpl'=>'required',
            'gestational_age'=>'required',
            'previouse_pregnancies'=>'required',
            'allergic'=>'required',
            'surgery_history'=>'required',
            'underlying_diseases'=>'required',
        ],[
            'required' => 'Data harus diisi',
        ]);
        MaternityPatient::create($validasi);
        return redirect()->route('dataantrian')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }
    
    public function detaildatakunjunganbersalin($id){
        $data= MaternityPatient::find($id);
        return view('menupetugas.detaildatakunjunganbersalin',compact('data'));
    }
    public function tampildatakunjunganbersalin($id){
        $data= MaternityPatient::find($id);
        $dokter = User::where('level', 'dokter')->get();
        return view('menupetugas.tampildatakunjunganbersalin',compact('data','dokter'));
    }
    public function editdatakunjunganpasienbersalin(Request $request, $id){
        $data= MaternityPatient::find($id);
        $data->update($request->all());
        return redirect()->route('dataantrian')->with('toast_success', 'Data Berhasil Diedit!');
    }
    public function hapusdatakunjunganbersalin($id){
        $data= MaternityPatient::find($id);
        $data->delete();
        return redirect()->route('kunjunganpasienmelahirkan');
    }
    public function laporanKunjunganPasienbersalin(){
        $data = MaternityPatient::with('patient')->latest()->paginate(10);
        return view('menupetugas.laporankunjunganbersalin',compact('data'));
    }
    public function cetakLaporanbersalin($tglawal, $tglakhir){
        $cetakLaporan = MaternityPatient::with('patient')->whereBetween('created_at',[$tglawal, $tglakhir])->get();
        return view('menupetugas.cetakLaporanbersalin', compact('cetakLaporan'));
    }
}
