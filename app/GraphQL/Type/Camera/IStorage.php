<?php

namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class IStorage extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'IStorage',
	];
	//protected $inputObject = true;

	public function fields()
	{
		return [
			'storage_file_system'	=> 	[
								'name' 	=> 'storage_file_system', 		
								'type' 	=> Type::nonNull(Type::string()),
							]
		];
	}
}
