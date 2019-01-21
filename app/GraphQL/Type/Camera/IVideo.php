<?php

namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;
use App\Models\Camera\Video;  

class IVideo extends Mutation
{
	protected $attributes = [
		'name'		=> 'IVideo',
	];
	//protected $inputObject = true;
	public function type()
    {
        return GraphQL::type('Video');
    }
	public function args()
	{
		return [
			'resolution_available'	=> 	[
								'name' 	=> 'resolution_available', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'fps'	=> 	[
								'name' 	=> 'fps', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}

	public function resolve($root, $args)
    {
        
        $camera = new Camera();
        $camera->resolution_available = $args['resolution_available'];
        $camera->fps = $args['fps'];
        
        $saved = $camera->save();
        return $camera;
    }
}
