<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Support extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function facilities()
    {
        return $this->hasMany('App\Facilities');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'facility_name', 'department', 'trouble_title', 'trouble_content', 'accrual_date',
    ];
}
