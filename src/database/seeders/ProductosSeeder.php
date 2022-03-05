<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $product = Producto::create([
            'nombre_producto'=>'Cebolla',
            'descripcion'=>'una libra de Cebolla',
            'precio'=>2000,
            'estado'=>9,
            'fecha_publicacion'=>date("Y-m-d h:i:s"),   
        ]
        );
        $product = Producto::create(
            [
                'nombre_producto'=>'Mandarina',
                'descripcion'=>'una libra de mandarina',
                'precio'=>5000,
                'estado'=>8, 
                'fecha_publicacion'=>date("Y-m-d h:i:s"),
            ]
        );
        $product = Producto::create(
            [
                'nombre_producto'=>'Pera',
                'descripcion'=>'una libra de pera',
                'precio'=>3000,
                'estado'=>9, 
                'fecha_publicacion'=>date("Y-m-d h:i:s"),
            ]
        );
        $product = Producto::create(
            [
                'nombre_producto'=>'Teclado',
                'descripcion'=>'Por unidad',
                'precio'=>20000,
                'estado'=>9, 
                'fecha_publicacion'=>date("Y-m-d h:i:s"),
            ]
        );
    }
}
