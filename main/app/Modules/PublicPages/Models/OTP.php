<?php

namespace App\Modules\PublicPages\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Modules\PublicPages\Models\OTP
 *
 * @property int $id
 * @property int $app_user_id
 * @property int $code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\OTP newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\OTP newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\OTP query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\OTP whereAppUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\OTP whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\OTP whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\OTP whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\PublicPages\Models\OTP whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OTP extends Model
{
  protected $fillable = ['code'];
  protected $table = 'otps';
  protected $casts = [
    'code' => 'int'
  ];
}
