<?php

namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;


class Video extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Video',
	];
	//protected $inputObject = true;



	public function fields()
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
}
