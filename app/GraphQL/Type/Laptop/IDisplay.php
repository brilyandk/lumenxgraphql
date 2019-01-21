<?php
namespace App\GraphQL\Type\Laptop;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;

class IDisplay extends Mutation
{
	protected $attributes = [
		'name'		=> 'IDisplay',
	];
	public function type()
    {
        return GraphQL::type('Display');
	}

	public function args()
	{
		return [
			'type'	=> 	[
								'name' 	=> 'type', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
			'resolution'	=> 	[
								'name' 	=> 'resolution', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'touchscreen'	=> 	[
								'name' 	=> 'touchscreen', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'features'	=> 	[
								'name' 	=> 'features', 		
								'type' 	=> Type::nonNull(Type::string()),
							],
		];
	}

	public function resolve($root, $args)
    {
        
        $display = new Display();
        $display->type = $args['type'];
		$display->resolution = $args['resolution'];
		$display->touchscreen = $args['touchscreen'];
		$display->features = $args['features'];
		
        
        $saved = $display->save();
        return $display;
    }
}
