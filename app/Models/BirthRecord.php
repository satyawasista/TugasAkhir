<?php

namespace App\Models;

use App\Models\User;
use App\Models\MaternityPatient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kyslik\ColumnSortable\Sortable;

class BirthRecord extends Model
{
    use HasFactory;
    use sortable;

    protected $guarded=[];
    protected $dates =['created_at'];

    public function patient(){
        return $this->belongsTo(Patient::class,'id_patient');
    }
    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }
    public $sortable = [
        'id','id_user','delivery_room','id_patient',
        ];
}
