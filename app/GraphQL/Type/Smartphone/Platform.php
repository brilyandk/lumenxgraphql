<?php

namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;
class Platform extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Platform',
	];
	protected $inputObject = true;

	public function fields()
	{
		return [
			'system_chip'	=> 	[
								'name' 	=> 'system_chip', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'processor'	    => 	[
								'name' 	=> 'processor', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'gpu' 	    => 	[
								'name' 	=> 'gpu', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'memory' 	    => 	[
								'name' 	=> 'memory', 		
								'type' 	=> Type::nonNull(Type::number()),
							],
			'internal_storage' 	    => 	[
								'name' 	=> 'internal_storage', 		
								'type' 	=> Type::nonNull(Type::number()),
							],
			'storage_expansion' 	    => 	[
								'name' 	=> 'storage_expansion', 		
								'type' 	=> Type::nonNull(Type::number()),
							],
			'os' 	    => 	[
								'name' 	=> 'os', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}
}
