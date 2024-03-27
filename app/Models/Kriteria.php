<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
	use HasFactory;

	protected $guarded = [];

	// relasi ke banyak sub kriteria
	public function subkriteria()
	{
		return $this->hasMany(SubKriteria::class);
	}
}