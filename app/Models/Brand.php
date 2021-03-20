<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Brand
 * @package App\Models
 */
class Brand extends Model
{
    /**
     * @var string
     */
    protected $table = 'brands';

    /**
     * @var array
     */
    protected $fillable = ['name', 'slug', 'logo'];

    /**
     * @param $value
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    /**
     * @return HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
