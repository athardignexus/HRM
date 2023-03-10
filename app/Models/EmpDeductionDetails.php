<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpDeductionDetails extends Model
{
    use HasFactory;
    protected $fillable=[
        'emp_id',
        'user_id',
        'head_id',
        'amount'
    ];
}
