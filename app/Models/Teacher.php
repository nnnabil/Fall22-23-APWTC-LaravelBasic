<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'phone';

    //using hasmany verb one to many
    public function courses(){
        return $this->hasMany(Course::class,'t_id','id');
    }

    //using eloquent
    public function assignedCourses(){
        return Course::where('t_id', $this->id)->get();
    }
}
