<?php

namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;


class IPeripherals extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'IPeripherals',
	];
	protected $inputObject = true;

	public function fields()
	{
		return [
			'keyboard'	=> 	[
								'name' 	=> 'dimensions', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'pointing_device'	=> 	[
								'name' 	=> 'pointing_device', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'optical_drive'	=> 	[
								'name' 	=> 'optical_drive', 		
								'type' 	=> Type::nonNull(Type::boolean()),
                            ],
            'fingerprint_scanner'	=> 	[
								'name' 	=> 'fingerprint_scanner', 		
								'type' 	=> Type::nonNull(Type::boolean()),
							],
		];
	}
}
