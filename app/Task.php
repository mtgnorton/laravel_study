<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Builder;
use App\Helper\Helper;
class Task extends Model
{


     use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
        
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'int',
    ];

    /**
         * 需要被转换成日期的属性。
         *
         * @var array
         */
   protected $dates = ['deleted_at'];
 

    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot(){
        parent::boot();
        static::addGlobalScope('id',function (Builder $builder)
        {
            $builder->where('id','>',10);
        });
    }

    public function test()
    {

              /*author：马廷广
               *添加软删除字段
               *   
                Schema::table('tasks', function ($table) {
                    $table->softDeletes();
                    });
               *time：
               */
       // Task::find('2')->delete();
        // $task = Task::find('2');
        // echo $task->trashed();
        // $task = Task::withTrashed()->where('id','2')->get();
        // $task = Task::withoutGlobalScope('id')->get();
              
        $tasks = Task::withoutGlobalScope('id')->get()->toArray();
        $collection = collect($tasks);
        // $data = $collection->chunk(4);
        // $data = $data->toArray();
        $data = $collection->each(function (&$value)
        {
          $value['id'] = 'ttt';
        });
        $data=[];
        $arr = ['cc'=>['a'=>1,'b'=>3],['a'=>3,'b'=>4],['a'=>5,'b'=>1]];
        array_walk($arr, function ($value,$key) use (&$data){
           $data[$key] = $value['b'];
        });
        asort($data);
        $data = array_flip($data);
        $sortArr=[];
        $t = array_walk($data,function($value) use ($arr,&$sortArr)
        {
            $sortArr[$value] = $arr[$value];
        });
 // $t= array_reduce($arr, function($v1,$v2) use ($data) {

 //           $v1[] = $v2['b'];
 //           return $v1;
 //        });
 // sort($t);
     
        foreach ($tasks as  $task) {
           echo $task->id.'---'.$task->name;
           echo "<br/>";
           $task->randstr =  Helper::getRandomString(5);
           $task->save();  

       }


    }
    public function scopeBig($query)
    {
        return $query->where('id','>',30);
    }
}
