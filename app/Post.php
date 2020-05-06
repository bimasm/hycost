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
	public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
}
