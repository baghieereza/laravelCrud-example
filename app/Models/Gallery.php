<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Gallery extends Eloquent
{
    use Notifiable;

    public $table = 'gallery';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'link', 'doc_id'
    ];

    /**
     * @return mixed
     */
    public function docs()
    {
        return $this->belongsTo('docs');
    }


}
