<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $fillable = ['email', 'category', 'duration', 'days_to_send'];
}
