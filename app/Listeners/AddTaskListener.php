<?php

namespace App\Listeners;

use App\Events\AddTask;
use Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Cache;
use DB;
class AddTaskListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AddTask  $event
     * @return void
     */
    public function handle(AddTask $event)
    {
    $task = $event->task;
    Log::info('任务添加成功',['id'=>$task->id,'title'=>$task->name]);
    echo $task->name;
    Cache::put('name',$task->name,10);
    $name = "mtg";
    Cache::get('ss',function() use ($name) {
        return DB::table('users')->where('name',$name)->value('email');
    } );

    }
}
