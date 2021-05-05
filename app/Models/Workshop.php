<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use App\Models\Event;

class Workshop extends Model
{

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    //protected $table = 'event';
    protected $fillable = array(
                    "id",
                    "start",
                    "end",
                    "event_id",
                    "name",
                    "created_at",
                    "updated_at",
    );
	
	 public function events()
    {
        return $this->belongsTo(Events::class);
    }
                    

}
