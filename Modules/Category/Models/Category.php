<?php


namespace Modules\Category\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'parent_id', 'slug'];

    public function categoryChildren()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

}

