<?php

namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;

//ini nama model yang sudah dibuat
use App\Models\Laptop\General;
use App\Models\Laptop\Storage;
use App\Models\Laptop\Connectivity;
use App\Models\Laptop\Memory;
use App\Models\Laptop\Multimedia;
use App\Models\Laptop\Ports;
use App\Models\Laptop\Periperhals;
use App\Models\Laptop\Performance;


// use App\Models\Laptop\Sensor;
// use App\Models\Laptop\Flash;

class LaptopQuery extends Query
{
    //nama untuk dipanggil di config/graphql.php dan di query
    protected $attributes = [
        'name' => 'LaptopQuery',
        'description' => 'Merupakan Query dari post'
    ];

    //mengambil nama type yang akan digunakan (dari config/graphql.php)
    public function type()
    {
        return Type::listOf(GraphQL::type('Laptop'));
    }

    //gak ngerti ini buat apa .-.
    //tapi sepertinya buat menyimpan jika user menggunakan input pada query
    public function args()
    {

    }

    //resolve untuk mendapatkan nilai dari IMonitor
    public function resolve($root, $args)
    {
        return Laptop::all();
        // return Connectivity::all();
        // return Display::all();
         // return Multimedia::all();
        // return Memory::all();
        // return Ports::all();
        // return Peripherals::all();
        // return Storage::all();
         // return Performance::all();
       
    }
}
