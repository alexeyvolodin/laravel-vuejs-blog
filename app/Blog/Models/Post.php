<?php

namespace App\Blog\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed id
 */
class Post extends Model
{
	use Sluggable;

	/**
	 * The table this model is going to use.
	 * @var string
	 */
	protected $table = 'posts';

	/**
	 * Fillable fields to prevent mass assignment
	 *
	 * @var array
	 */
	protected $fillable = [
		'title',
		'slug',
		'description',
		'body',
		'body_raw'
	];

	/**
	 * Return the sluggable configuration array for this model.
	 *
	 * @return array
	 */
	public function sluggable()
	{
		return [
			'slug' => [
				'source' => 'title'
			]
		];
	}
}
