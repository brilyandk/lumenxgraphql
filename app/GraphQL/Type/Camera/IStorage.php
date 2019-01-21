<?php
namespace App\GraphQL\Type\Camera;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use GraphQL;
use App\Models\Camera\Storage;  

class IStorage extends Mutation
{
	protected $attributes = [
		'name'		=> 'IStorage',
	];
	//protected $inputObject = true;
	public function type()
    {
        return GraphQL::type('Storage');
	}
	public function fields()
	{
		return [
			'storage_file_system'	=> 	[
								'name' 	=> 'storage_file_system', 		
								'type' 	=> Type::nonNull(Type::string()),
							]
		];
	}

	public function resolve($root, $args)
    {
        
        $strorage = new Strorage();
        $strorage->storage_file_system = $args['storage_file_system'];

        
        $saved = $strorage->save();
        return $strorage;
    }

}
