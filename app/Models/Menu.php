<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $appends = [
        'parent',
    ];

    //one to many
    public function contents()
    {
        return $this->hasMany(Content::class);
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parentid');
    }

    public function children()
    {
        return $this->hasMany(Menu::class,'parentid');
    }

}
