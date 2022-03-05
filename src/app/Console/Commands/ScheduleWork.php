<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Producto;
use Illuminate\Support\Str;

class ScheduleWork extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'schedule:work';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
         Producto::create(
            [
                'nombre_producto'=>Str::random(10).'_producto',
                'descripcion'=>Str::random(10).'_descripcion',
                'precio'=>rand(100,500),
                'estado'=>rand(0,9), 
                'fecha_publicacion'=>date("Y-m-d-h:i"),
            ]
        );
        return 0;
    }
}
