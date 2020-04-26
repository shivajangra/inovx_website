<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jointeam extends Model
{
  protected $fillable = [
      'name', 'email', 'mobile', 'work_domain', 'experience', 'our_service' ,'message'
  ];
}
