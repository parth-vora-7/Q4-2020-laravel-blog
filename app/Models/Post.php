<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Post extends Model
{
    use HasFactory;

    /**
     * Set the post's slug.
     *
     * @param  string  $value
     * @return void
     */
    public function setTitleAttribute($value)
    {
    	$this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
