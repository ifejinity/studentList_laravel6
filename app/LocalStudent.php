<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocalStudent extends Model
{
    protected $guarded = ['id'];
    
    public function local() {
        return $this->hasOne(AllStudent::class, 'local_student_id');
    }
}
