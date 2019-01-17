<?php

namespace App\GraphQL\Type\Camera;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;
use App\Models\Camera\Video;  
use App\Models\Camera\Storage; 
use App\Models\Camera\Lens;
use App\Models\Camera\Battery; 
use App\Models\Camera\Connectivity;
use App\Models\Camera\Exposure;
use App\Models\Camera\Design; 
use App\Models\Camera\Features; 
use App\Models\Camera\Sensor;
use App\Models\Camera\Flash; // tabel

class Camera extends GraphQLType
{
	protected $attributes = [
		'name'		=> 'Camera'
	];
	//protected $inputObject = true;

	public function fields()
    {
        return [
            'video' => [
              'type' => Type::listOf(GraphQL::type('IVideo')),
            ],
            'storage' => [
                'type' => Type::listOf(GraphQL::type('IStorage')),
              ],
              'lens' => [
                'type' => Type::listOf(GraphQL::type('ILens')),
              ],
              'battery' => [
                'type' => Type::listOf(GraphQL::type('IBattery')),
              ],
              'connectivity' => [
                'type' => Type::listOf(GraphQL::type('IConnectivity')),
              ],
              'exposures' => [
                'type' => Type::listOf(GraphQL::type('IExposures')),
              ],
              'design' => [
                'type' => Type::listOf(GraphQL::type('IDesign')),
              ],
              'features' => [
                'type' => Type::listOf(GraphQL::type('IFeatures')),
              ],
              'sensor' => [
                'type' => Type::listOf(GraphQL::type('ISensor')),
              ],
              'flash' => [
                'type' => Type::listOf(GraphQL::type('IFlash')),
              ],
        ];

        //untuk getID
        [
          'id_video' => [
              'type' => Type::nonNull(Type::int()),
          ],
          'id_storage' => [
              'type' => Type::nonNull(Type::int()),
          ],
          'id_lens' => [
              'type' => Type::nonNull(Type::int()),
          ],
          'id_battery' => [
              'type' => Type::nonNull(Type::int()),
          ],
          'id_connectivity' => [
              'type' => Type::nonNull(Type::int()),
          ],
          'id_exposures' => [
            'type' => Type::nonNull(Type::int()),
          ],
          'id_design' => [
               'type' => Type::nonNull(Type::int()),
          ],
          'id_features' => [
              'type' => Type::nonNull(Type::int()),
          ],
          'id_sensor'=> [
              'type' => Type::nonNull(Type::int()),
          ],
          'id_flash'=> [
            'type' => Type::nonNull(Type::int()),
        ]
      ];
    }

    
    
    //reslove



     //resolve yang di sini untuk mendapatkan nilai dari IDisplay
     public function resolveVideoField($root, $args)
     {
         //return Video::all();
         return Video::where('id', $root->id_video)->get();
    
     }

     public function resolveStorageField($root, $args)
     {
        return Storage::where('id', $root->id_storage)->get();
    
     }

     public function resolveLensField($root, $args)
     {
           return Lens::where('id', $root->id_lens)->get();
    
     }

     public function resolveBatteryField($root, $args)
     {
         return Battery::where('id', $root->id_battery)->get();
    
     }

     public function resolveConnectivityField($root, $args)
     {
         return Connectivity::where('id', $root->id_connectivity)->get();
    
     }

     public function resolveExposureField($root, $args)
     {
          return Exposure::where('id', $root->id_exposure)->get();
    
     }

     public function resolveDesignField($root, $args)
     {
        return Design::where('id', $root->id_design)->get();
    
     }

     public function resolveFeaturesField($root, $args)
     {
         return Features::where('id', $root->id_features)->get();
    
     }
     public function resolveSensorField($root, $args)
     {
          return Sensor::where('id', $root->id_sensor)->get();
    
     }

     public function resolveFlashField($root, $args)
     {
         return Flash::where('id', $root->id_flash)->get();
    
     }
}

