<?php

namespace App\GraphQL\Type\Smartphone;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;

class IPlatform extends Mutation
{
	protected $attributes = [
		'name'		=> 'IPlatformSM',
	];
	public function type()
    {
        return GraphQL::type('PlatformSM');
	}
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

	public function resolve($root, $args)
    {
        
        $platfrom = new Platfrom();
        $platfrom->data = $args['system_chip'];
		$platfrom->processor = $args['processor'];
		$platfrom->gpu = $args['gpu'];
		$platfrom->memory = $args['memory'];
		$platfrom->internal_storage = $args['internal_storage'];
		$platfrom->storage_expansion = $args['storage_expansion'];
		$platfrom->os = $args['os'];
		//$platfrom->main_platfrom_specification = $args['main_platfrom_specification'];
		
        
        $saved = $platfrom->save();
        return $platfrom;
    }
}
