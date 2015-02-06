<?php
class ActorController extends BaseController {
	
	public function getActorInfo($actorname){
		$actor = Actor::where('name', 'like', '%'.$actorname.'%')->first();
		if($actor){
			$actorInfo = array('error'=>false,'Actor Name'=>$actor->name,'Actor ID'=>$actor->id);
			$actormovies = json_decode($actor->Movies);
			
			foreach ($actormovies as $movie) {
			$movielist[] = array("Movie Name"=>$movie->name, "Release Year"=>$movie->release_year);
			}
			$movielist =array('Movies'=>$movielist);
			return Response::json(array_merge($actorInfo,$movielist));
		}
		
		else{
			
			return Response::json(array(
			'error'=>true,
			'description'=>'We could not find any actor in database like :'.$actorname
			));
		}
	}
	
	
	public function putActor($actorname){
		$actor = Actor::where('name', '=', $actorname)->first();
		if(!$actor){
			$the_actor = Actor::create(array('name'=>$actorname));
			return Response::json(array(
			'error'=>false,
			'description'=>'El actor ha guardado correctamente. El numero de identificacion del actor es:'.$the_actor->id
			));
		}
		else{
			return Response::json(array(
			'error'=>true,
			'description'=>'Ya tenemos la base de datos : '.$actorname.'. El numero de identificacion del actor es : '.$actor->id
			));
		}
	}
	
	public function deleteActor($id){
		$actor = Actor::find($id);
		if ($actor){
			$actor->delete();
			return Response::json(array(
				'error' => false,
				'description' => 'The actor successfully deleted : '.$actor->name
			));
		}
		else{
			return Response::json(array(
				'error' => true,
				'description' => 'We could not find any actor in
				database with ID number :' .$id
			));
		}
	}



	
}
