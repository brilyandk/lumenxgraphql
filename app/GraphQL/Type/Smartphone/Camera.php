<?php

namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Camera extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Camera',
	];
	protected $inputObject = true;

	public function fields()
	{
		return [
			'main_camera'	=> 	[
								'name' 	=> 'main_camera', 		
								'type' 	=> Type::nonNull(Type::number()),
							],
			'main_camera_specification'	=> 	[
								'name' 	=> 'main_camera_specification', 		
								'type' 	=> Type::nonNull(Type::text()),
                            ],
            'selfie_camera'	=> 	[
								'name' 	=> 'selfie_camera', 		
								'type' 	=> Type::nonNull(Type::number()),
                            ],
            'selfie_camera_specification'	=> 	[
								'name' 	=> 'selfie_camera_specification', 		
								'type' 	=> Type::nonNull(Type::text()),
							],
			 'video_recording'	=> 	[
								'name' 	=> 'video_recording', 		
								'type' 	=> Type::nonNull(Type::text()),
							],
			
		];
	}
}

