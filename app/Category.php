<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $table='categories';

	protected $fillable=['name'];

    public function notes()
    {
    	return $this->hasMany(Note::class);
    }
}
