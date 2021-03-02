<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\user;

class Profile extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'user_id',
    ];


    // Table Name
    protected $table = 'profiles';
    // Primar Key
    public $primarKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user() {
        return $this->belongsTo(User::Class);
    }
}
