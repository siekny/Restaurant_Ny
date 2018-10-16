<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodMenu extends Model
{
	public function getFoodBlog()
 	{
        return $this->belongsTo("App\FoodBlog", "blog_id");	
		// cate_id is foreign key of the table
 	}
 	protected $fillable = [
 		'foodName', 'price', 'description', 'picture', 'blog_id'
 	];

    protected $table = "food_menus";
}
