<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
class DemoQueue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    private $data;

    /**
     * DemoQueue constructor.
     * @param $data
     */
    public function __construct($data)
    {

        $this->data = $data;
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        var_dump($this->data);
       // throw new \Exception("错误",10003);
        //
    }

}
