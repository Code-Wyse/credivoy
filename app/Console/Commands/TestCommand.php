<?php

namespace App\Console\Commands;

use App\Models\Destination;
use App\Models\TourCategory;
use App\Models\TourDestination;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        // $file = fopen(public_path("assets/csv/tours.csv"),"r");
        // while($data = fgetcsv($file)){
        //     $tourId = $data[0];
        //     $categoryId = $data[1];
        //     $destinationId = $data[2];
        //     $title = $data[3];

        //     try{
        //         DB::beginTransaction();
        //         TourCategory::create([
        //             "tour_id" => $tourId,
        //             'category_id' => $categoryId,
        //         ]);

        //         TourDestination::create([
        //             'tour_id' => $tourId,
        //             'destination_id' => $destinationId,
        //         ]);

        //         DB::commit();

        //     }catch(\Exception $e){
        //         DB::rollBack();
        //         $this->error("error: ".$e->getMessage());
        //     }

        // }
    }
}
