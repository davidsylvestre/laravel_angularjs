<?php

namespace DasProject\Entities\Core;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = array('name', 'responsible', 'email',
                                'phone', 'address', 'obs');
}
