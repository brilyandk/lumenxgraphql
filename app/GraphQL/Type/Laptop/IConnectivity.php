<?php

namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;

class IConnectivty extends Mutation
{
	protected $attributes = [
		'name'		=> 'IConnectivty',
	];
	public function type()
    {
        return GraphQL::type('Mutation');
	}

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

	
	public function resolve($root, $args)
    {
        
        $connectivty = new Connectivty();
        $connectivty->wireless_lan = $args['wireless_lan'];
		$connectivty->bluetooth = $args['bluetooth'];
		$connectivty->bluetooth_features = $args['bluetooth_features'];
		
        
        $saved = $connectivty->save();
        return $connectivty;
    }
}
