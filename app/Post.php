<?php

namespace App;

use Illuminate\Database\Eloquent\Motel;

class Post extends Model
{
    public function greateThan($number)
    {
        return $this->where('id', '>', $number)->get();
    }
}
