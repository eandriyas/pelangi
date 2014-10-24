<?php

class Kategori extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'kategori' => 'required',
		'post_id' => 'integer'
	];

	// Don't forget to fill this array
	protected $fillable = ['kategori', 'post_id'];
	/*public function posts(){
		return $this->hasMany('Post');
	}
*/
}