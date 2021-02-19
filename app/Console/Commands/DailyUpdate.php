<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\BuyerReq;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class DailyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:dailyUpdate';

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
        $status = "Expired";
        $results = DB::update('update buyer_reqs set status = ? where EXTRACT(Year From exp_Date) = EXTRACT(Year From ?) AND EXTRACT(month From exp_Date) = EXTRACT(month From ?) AND EXTRACT(Day From exp_Date) = EXTRACT(Day From ?)',[$status,Carbon::now(),Carbon::now(),Carbon::now()]);
    }
}
