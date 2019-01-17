<?php

namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;


class IMultimedia extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'IMultimedia',
	];
	protected $inputObject = true;

	public function fields()
	{
		return [
			'secondary_camrearfacing'	=> 	[
								'name' 	=> 'secondary_camrearfacing', 		
								'type' 	=> Type::nonNull(Type::bool()),
							],
			'microphone_type'	=> 	[
								'name' 	=> 'microphone_type', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'inbuilt_microphone'	=> 	[
								'name' 	=> 'inbuilt_microphone', 		
								'type' 	=> Type::nonNull(Type::bool()),
                            ],
            'webcam'	=> 	[
								'name' 	=> 'webcam', 		
								'type' 	=> Type::nonNull(Type::bool()),
                            ],
            'speakers'	=> 	[
								'name' 	=> 'speakers', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'video_recording'	=> 	[
								'name' 	=> 'video_recording', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],



		];
	}
}
