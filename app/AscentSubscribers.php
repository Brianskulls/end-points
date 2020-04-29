<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AscentSubscribers extends Model
{
    protected $table = "ascent_receivers";
    protected $fillable = ['account_id', 'email', 'first_name'];
}
