<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Category extends Model
{
    use Translatable;
    protected $table = 'category';
    protected $translatable = ['title'];
}
