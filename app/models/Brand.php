<?php

class Brand extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['name','image'];
            
        public function product(){
        return $this->belongsTo('Product');
         }

}