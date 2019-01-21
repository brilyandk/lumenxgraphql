<?php


namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;


class IDisplay extends Mutation
{
	protected $attributes = [
		'name'		=> 'IDisplaySM',
	];
	public function type()
    {
        return GraphQL::type('DisplaySM');
	}

	public function fields()
	{
		return [
			'display_size'	=> 	[
								'name' 	=> 'display_size', 		
								'type' 	=> Type::nonNull(Type::number()),
							],
			'resolution'	=> 	[
								'name' 	=> 'resolution', 		
								'type' 	=> Type::nonNull(Type::string()),
                            ],
            'pixel_density'	=> 	[
								'name' 	=> 'pixel_density', 		
								'type' 	=> Type::nonNull(Type::number()),
                            ],
            'technology'	=> 	[
								'name' 	=> 'technology', 		
								'type' 	=> Type::nonNull(Type::text()),
							],
			 'screen_to_body_ratio'	=> 	[
								'name' 	=> 'screen_to_body_ratio', 		
								'type' 	=> Type::nonNull(Type::number()),
							],
			'features'	=> 	[
								'name' 	=> 'features', 		
								'type' 	=> Type::nonNull(Type::text()),
							],
		];
	}

	public function resolve($root, $args)
    {
        
        $display = new Display();
        $display->display_size = $args['display_size'];
		$display->resolution = $args['resolution'];
		$display->pixel_density = $args['pixel_density'];
		$display->technology = $args['technology'];
		$display->screen_to_body_ratio = $args['screen_to_body_ratio'];
		$display->features = $args['features'];
		//$display->main_display_specification = $args['main_display_specification'];
		
        
        $saved = $display->save();
        return $display;
    }

}
