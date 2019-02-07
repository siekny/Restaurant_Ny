<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodBlog extends Model
{
	protected $fillable =[
		'picture', 'blogName','addDate','addBy', 'description'
	];

    protected $table = "food_blogs";
}
