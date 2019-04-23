<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Article extends Eloquent
{
    //
    protected $connection = "mongodb";
    protected $collection = "articles";
    protected $primarykey = "id";
}
