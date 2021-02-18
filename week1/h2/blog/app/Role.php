<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;
use Illuminate\Support\Str;
class role extends Model
{
  use UsesUuid;

  protected $guarded = [];
//   public static function bootUsesUuid(){
//     static::creating(function ($model) {
//         if ( ! $model->getKey()) {
//             $model->{$model->getKeyName()} = (string) Str::uuid();
//         }
//     });
// }
}
