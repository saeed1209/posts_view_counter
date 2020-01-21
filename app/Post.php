<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function view()
    {
        return $this->hasOne(View::class);
    }
}
