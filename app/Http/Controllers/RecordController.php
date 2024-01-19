<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\Patient;
use App\Models\Visitation;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class RecordController extends Controller
{
    public function datatindakan(Request $request){
        $searchRM = $request->query('searchRM');

        if (!empty($searchRM)) {
            $data = Record::with('patient','user')->sortable()->latest()
            ->whereHas('patient', function ($query) use ($searchRM){
                $query->where('name','like','%'.$searchRM.'%');
            })
            ->paginate(10); 
        } else {
            $data = Record::with('patient','user')->sortable()->latest()->paginate(10);   
        }
        return view('menudokter.datatindakan',compact('data','searchRM'));
    }
    public function tambahrekammedis($id, $id_user){
        $data= Patient::find($id);
        $dokter= User::find($id_user);
        return view('menudokter.tambahrekammedis',compact('data','dokter'));
    }
    public function simpanrekammedis(Request $request, $id){
        $validasi= $request->validate([
            'tension'=>'required',
            'body_temp'=>'required',
            'allergic'=>'required',
            'anamnesa'=>'required',
            'diagnosis'=>'required',
            'description'=>'required',
            'id_patient'=>'required',
            'id_user'=>'required',
        ],[
            'required' => 'Data harus diisi',
        ]);
        Record::create($validasi);
        Visitation::where('id_patient',$id) ->update(['visitation_status' => 'selesai']);
        return redirect()->route('dataantrian')->with('toast_success', 'Data Berhasil Ditambahkan!');
}
public function tampildatarekammedis($id){
    $data= Record::find($id);
    return view('menudokter.tampildatarekammedis',compact('data'));
}
public function editdatarekammedis(Request $request, $id){
    $data= Record::find($id);
    $data->update($request->all());
    return redirect()->route('pasien')->with('toast_success', 'Data Berhasil Diedit!');
}
public function detaildatarekammedis($id){
    $data= Record::find($id);
    return view('menudokter.detaildatarekammedis',compact('data'));
}
public function hapusdatarekammedis($id){
    $data= Record::find($id);
    $data->delete();
    return redirect()->route('datatindakan');
}
}
