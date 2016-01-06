<?php

namespace DasProject\Entities\Core;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'progress',
        'status',
        'due_date',
    ];

    public function client()
    {
        return $this->hasOne('DasProject\Entities\Core\Client', 'id', 'client_id');
    }
}
