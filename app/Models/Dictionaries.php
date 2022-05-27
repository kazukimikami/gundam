<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Dictionaries extends Model
{
    use HasFactory;
    use SoftDeletes;
    use SerializeDate;
    protected $fillable = ['title',
                           'content',
                           'image',
                           'created_at',
                           'updated_at',
                           'deleted_at'
                          ];
}
