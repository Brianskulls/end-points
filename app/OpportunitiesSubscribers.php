<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpportunitiesSubscribers extends Model
{
    protected $table = "opportunities_subscribers";
    protected $fillable = ['account_id', 'email', 'first_name'];
}
