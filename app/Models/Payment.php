<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function groupstudents()
    {
        return $this->belongsTo(GroupStudent::class);
    }

    public function  students()
    {
        return $this->belongsTo(Student::class);
    }
}
