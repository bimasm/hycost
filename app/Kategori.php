<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class Kategori extends Model
{
	protected $table="kategori";

	protected function serializeDate(DateTimeInterface $date) : string
	{
		return $date->format('j F Y');
	}
}
