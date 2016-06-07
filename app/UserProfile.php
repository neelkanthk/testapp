<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model {

    protected $table = 'user_profile';
    protected $fillable = ['gender', 'image'];
    public function user() {
        $this->belongsTo('App\User');
    }

}
