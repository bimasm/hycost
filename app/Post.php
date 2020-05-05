<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class Post extends Model
{
	protected $table="post";

	protected function serializeDate(DateTimeInterface $date)
	{
		return $date->format('j F Y');
	}
}
