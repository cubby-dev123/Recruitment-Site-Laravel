<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    use HasFactory;
    protected $fillable = [
        'c_name',
        'c_address',
        'c_member',
        'c_member_email',
        'c_phone',
        'c_site',
        'job_type',
        'em_type',
        'em_num',
        'work_time',
        'rest_time',
        'pay_amount',
        'rest_day',
        'insurance',
        'commuting_allowance',
        'academic_history',
        'degree',
        'other',
        't_message',
        'c_message',
        'img_1',
        'img_2',
        'img_3',
        'img_4',
        'img_5',
        'img_6',
        'img_7',
        'img_8',
        'img_9',
        'img_10',
        'switch_input',
        'enter_date'
    ];
    

}
