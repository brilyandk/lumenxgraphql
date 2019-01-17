<?php

namespace App\GraphQL\Type\Smartphone;
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
								'type' 	=> Type::nonNull(Type::number()),
                            ],
            'materials' 	    => 	[
								'name' 	=> 'materials', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'biometrics' 	    => 	[
								'name' 	=> 'biometrics', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'colors' 	    => 	[
								'name' 	=> 'colors', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}
}
