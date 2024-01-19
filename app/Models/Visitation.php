<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visitation extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $dates =['created_at'];
    public $timestamps = false;

    public function patient(){
        return $this->belongsTo(Patient::class,'id_patient');
    }

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }
}
