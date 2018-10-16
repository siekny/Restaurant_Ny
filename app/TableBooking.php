<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableBooking extends Model
{
	protected $fillable =[
		'name','email','phone', 'date', 'time', 'numPersons'
	];
    protected $talbe = "table_bookings";
}
