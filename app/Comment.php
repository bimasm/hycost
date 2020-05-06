<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class Comment extends Model
{
	protected $table="comment";
	protected function serializeDate(DateTimeInterface $date)
	{
		return $date->format('j F Y');
	}
	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function replies()
	{
		return $this->hasMany(Comment::class, 'parent_id');
	}

}
