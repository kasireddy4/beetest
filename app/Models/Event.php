<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'events';
    protected $fillable = array(
             "id",
            "name",
            "created_at",
            "updated_at"
    );
	
	 public function workshops()
    {
      return $this->hasMany(Workshop::class);
    }
	public function futureworkshops()
    {
	  $date = Carbon::now();
      return $this->hasMany(Workshop::class)->where('start','>',$date);
    }
}
