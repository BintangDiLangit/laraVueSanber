<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;
class role extends Model
{
  use UsesUuid;

  protected $guarded = [];
}