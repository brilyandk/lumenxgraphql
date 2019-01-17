<?php

namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Design extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Design',
	];
	protected $inputObject = true;

	public function fields()
	{
		return [
			'dimensions'	=> 	[
								'name' 	=> 'dimensions', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'weight'	    => 	[
								'name' 	=> 'weight', 		
								'type' 	=> Type::nonNull(Type::integer()),
                            ],
            'rugged' 	    => 	[
								'name' 	=> 'rugged', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
            'available_color_options' 	    => 	[
								'name' 	=> 'available_color_options', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}
}
