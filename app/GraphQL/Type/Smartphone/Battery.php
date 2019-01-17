<?php

namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Battery extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Battery',
	];
	protected $inputObject = true;

	public function fields()
	{
		return [
			'capacity'	=> 	[
								'name' 	=> 'capacity', 		
								'type' 	=> Type::nonNull(Type::number()),
							],
			'fast_charging'	    => 	[
								'name' 	=> 'fast_charging', 		
								'type' 	=> Type::nonNull(Type::number()),
                            ],
            'wireless_charging' 	=> 	[
								'name' 	=> 'wireless_charging', 		
								'type' 	=> Type::nonNull(Type::bool()),
                            ],
		];
	}
}
