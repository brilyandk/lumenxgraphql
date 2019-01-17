<?php
namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class Connectivty extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Connectivty',
	];
	protected $inputObject = true;

	public function fields()
	{
		return [
			'wireless_lan'	=> 	[
								'name' 	=> 'wireless_lan', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
            'bluetooth'	=> 	[
								'name' 	=> 'bluetooth', 		
								'type' 	=> Type::nonNull(Type::bool()),
                            ],
            'bluetooth_features'	=> 	[
								'name' 	=> 'bluetooth_features', 		
								'type' 	=> Type::nonNull(Type::text()),
							],
		];
	}
}
