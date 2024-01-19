<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Visitation;
use Illuminate\Http\Request;
use App\Models\MaternityPatient;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;


class VisitationController extends Controller
{
    public function dataantrian(){
        $statusKunjungan = ['Diperiksa', 'Menunggu', 'Lewat', 'Selesai'];
        //Kunjungan Umum
            $date = Date('Y-m-d');
            $dataKunjungan = Visitation::orderBy(DB::raw('FIELD(visitation_status, "'.implode('","', $statusKunjungan).'")'))
           ->whereDate('created_at', $date)
           ->get();

        //kunjungan persalinan
        $statusBersalin = ['Diperiksa', 'Menunggu', 'Lewat', 'Selesai'];
        $oneWeekAgo = Carbon::now()->subDay(3)->format('Y-m-d');
        $dateVisits = MaternityPatient::orderBy(DB::raw('FIELD(status, "'.implode('","', $statusBersalin).'")'))
        ->whereDate('created_at', '>=', $oneWeekAgo)
        ->get();

        //data dokter
        $dokter = User::where('level', 'dokter')->get();
        return view('menupetugas.dataantrian',compact('dataKunjungan','dateVisits', 'dokter' ));
    }
    public function antrian(Request $request){
        $validasi= $request->validate([
            'visitation_number'=>'required',
            'id_patient'=>'required',
            'id_user'=>'required',
            'description'=>'required',
            'visitation_status'=>'required',
            'created_at'=>'required',
            'updated_at'=>'required'
        ]);
        Visitation::create($validasi);
        return redirect()->route('dataantrian')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }
    public function editdatakunjungan(Request $request,$id){
        $data= Visitation::find($id);
        $data->update($request->all());
        return redirect()->route('dataantrian')->with('toast_success', 'Data Berhasil Diedit!');
    }
    // public function hapusdataantrian($id){
    //     $data= Visitation::find($id);
    //     $data->delete();
    //     return redirect()->route('dataantrian');
    // }
    public function laporanKunjunganPasien(){
        $data = Visitation::with('patient')->whereDate('created_at', '<=', date('Y-m-d'))->latest()->paginate(10);
        return view('menupetugas.laporanKunjungan',compact('data'));
    }
    public function cetakLaporan($tglawal, $tglakhir){
        $cetakLaporan = Visitation::with('patient')->whereBetween('created_at',[$tglawal, $tglakhir])->whereDate('created_at', '<=', date('Y-m-d'))->get();
        return view('menupetugas.cetakLaporan', compact('cetakLaporan'));
    }
    public function simpanpendaftaranonline(Request $request){
        $validasi= $request->validate([
            'visitation_number'=>'required',
            'id_patient'=>'required',
            'description'=>'required',
            'created_at'=>'required',
            'updated_at'=>'required'
        ]);
        Visitation::create($validasi);
        return redirect()->route('datapendaftaran')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }
    public function datapendaftaran(){
       $data = Visitation::with('patient')->latest('id')->first();
        return view('menupasien.datapendaftaran', compact('data'));
    }
}
