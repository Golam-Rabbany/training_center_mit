<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


     public function user(){
        return $this->hasOne(User::class,'id','user_id');
     }

     public function course(){
      return $this->hasOne(Course::class,'id', 'course_id');
     }

     
     public function studentPayment(){
      return $this->hasOne(Payment::class,'id', 'student_id');
     }



}
