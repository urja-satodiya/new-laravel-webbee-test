<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function children()
    {
        // `with` used to get the children upto n levels 
        return $this->hasMany(self::class, 'parent_id')->with('children');
    }
}
