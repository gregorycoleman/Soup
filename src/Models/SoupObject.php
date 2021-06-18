<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SoupObject extends Model
{
    protected $table = 'soup_objects';

    use HasFactory;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);

        $this->uuid = Str::uuid(); ;
    }
}
