<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public function Empreendimento()
    {
        return $this->belongsTo('App\Empreendimento');
    }
}
