<?php

class Post extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'title' => 'required',
        'content' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}