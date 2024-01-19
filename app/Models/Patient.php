<?php

namespace App\Models;

use App\Models\Record;
use App\Models\Visitation;
use App\Models\BirthRecord;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;
    use sortable;

    protected $guarded=[];
    protected $dates =['created_at'];

    public function visitation(){
        return $this->hasMany(Visitation::class);
    }
    public function Record(){
        return $this->hasMany(Record::class);
    }
    public function MaternityPatient(){
        return $this->hasMany(MaternityPatient::class);
    }
    public function BirthRecord(){
        return $this->hasMany(BirthRecord::class);
    }
    public $sortable = [
    'identity_card','name','birth_date','gender','phone','email','address','status',
    ];
}

