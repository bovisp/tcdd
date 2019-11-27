<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaItem extends Model
{
    protected $fillable = [
      'name',
      'description',
      'filename',
      'type_id'
    ];
}
