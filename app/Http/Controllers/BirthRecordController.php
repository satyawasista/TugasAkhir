<?php

namespace App\Http\Controllers;

use App\Models\BirthRecord;
use App\Models\MaternityPatient;
use App\Models\Visitation;
use Illuminate\Http\Request;

class BirthRecordController extends Controller
{
    public function datarekammedisbersalin( Request $request){
        $searchRMP = $request->query('searchRMP');

        if (!empty($searchRMP)) {
            $data = BirthRecord::with('maternityPatient','user')->sortable()->latest()
            ->whereHas('maternityPatient.patient', function ($query) use ($searchRMP){
                $query->where('name','like','%'.$searchRMP.'%');
            })
            ->paginate(10); 
        } else {
            $data = BirthRecord::with('maternityPatient','user')->sortable()->latest()->paginate(10);   
        }
        return view('menudokter.datarekammedisbersalin',compact('data','searchRMP'));
    }
    public function tambahrekammedisbersalin($id){
        $data= MaternityPatient::find($id);
        return view('menudokter.tambahrekammedisbersalin',compact('data'));
    }
    public function simpanrekammedisbersalin(Request $request, $id){
        $validasi= $request->validate([
            'delivery_room'=>'required',
            'his_start'=>'required',
            'bleeding'=>'required',
            'mucus_discharge'=>'required',
            'amniotic'=>'required',
            'other_complaints'=>'required',
            'tension'=>'required',
            'temprature'=>'required',
            'pulse'=>'required',
            'odema'=>'required',
            'hemoglobin'=>'required',
            'protein_urien'=>'required',
            'fundus_uteri'=>'required',
            'baby_position'=>'required',
            'baby_heart_rate'=>'required',
            'his'=>'required',
            'his_duration'=>'required',
            'vt'=>'required',
            'vt_result'=>'required',
            'doagnose'=>'required',
            'therapy'=>'required',
            'verlos_kamer'=>'required',
            'room_type'=>'required',
            'id_patient'=>'required',
            'id_user'=>'required'
        ],[
            'required' => 'Data harus diisi',
        ]);
        BirthRecord::create($validasi);
        return redirect()->route('dataantrian')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }
        public function detailrekammedisbersalin($id){
            $data= BirthRecord::find($id);
            return view('menudokter.detailrekammedisbersalin',compact('data'));
        }
        public function tampildatarekammedisbersalin($id){
            $data= BirthRecord::find($id);
            return view('menudokter.tampilhrekammedisbersalin',compact('data'));
        }
        public function editdatarekammedisbersalin(Request $request, $id){
            $data= BirthRecord::find($id);
            $data->update($request->all());
            return redirect()->route('pasien')->with('toast_success', 'Data Berhasil Diedit!');
        }
        public function hapusdatarekammedisbersalin($id){
            $data= BirthRecord::find($id);
            $data->delete();
            return redirect()->route('datarekammedisbersalin');
        }
}
