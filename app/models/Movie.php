<?php
class Movie extends Eloquent {
	protected $table = 'movies';
	protected $fillable = array('name','release_year');
	
	public function Actors(){
		return $this-> belongsToMany('Actor' , 'pivot_table','movies_id','actors_id');
	}
}
