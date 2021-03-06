<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = [
		'name', 'status', 'sort', 'pid', 'description',
	];

	public $timestamps = false;

	public function articles()
	{
		return $this->hasMany(Article::class);
	}

	public function getLinkUrl()
	{
		if(!empty($this->url)){
			return $this->url;
		}

		return route('category', $this->id);
	}
}
