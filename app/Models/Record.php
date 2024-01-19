<?php

namespace App\Models;

use App\Models\User;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kyslik\ColumnSortable\Sortable;

class Record extends Model
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
        'id_patient','id_user','tension','body_temp','allergic',
        'anamnesa','diagnosis','description','created_at',
        ];
}
