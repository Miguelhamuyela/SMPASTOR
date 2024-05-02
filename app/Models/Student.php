<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    public $table = "students";
    protected $guarded = ['id'];
    use softDeletes;
    protected $dates = ['deleted_at'];

     public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_courses_id');
    }

      public function responsibles()
    {
        return $this->belongsTo(Responsible::class, 'fk_responsibles_id');
    }

   public function parishes()
    {
        return $this->belongsTo(Parish::class, 'fk_parishes_id');
    }

    public function schoolyears()
    {
        return $this->belongsToMany(Schoolyear::class, 'registrations', 'fk_students_id', 'fk_schoolyears_id')->withTimestamps();
    }

    public function grades()
    {
        return $this->belongsToMany(Grade::class, 'registrations');
    }

}
