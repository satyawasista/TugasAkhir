<?php

namespace App\Models;

use App\Models\Patient;
use App\Models\BirthRecord;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaternityPatient extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $dates =['created_at'];
    
    public function patient(){
        return $this->belongsTo(Patient::class,'id_patient');
    }

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }

    
}
