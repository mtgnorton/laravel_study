<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App;
use App\Contracts\TestContract;
use App\Services\TestService;
use App\Http\ViewComposers\Profilecomposer as Profile;

class TestController extends Controller
{
    //依赖注入
    public function __construct(TestContract $test){
 
        $this->test = $test;
    
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     * @author LaravelAcademy.org
     */
    public function index(Request $request,$age)
    {
        // $test = App::make('test');
        // // $test->callMe('TestController');
        // $request->flash();
        // echo $request->old('age');
        
        echo "<br/>";
        echo $request->age;
        echo "<br/>";
        echo $request->url();
        echo "<br/>";
        echo $request->method();
        echo "<br/>";
        echo 'your age is '.$age;
        echo "<br/>";
        $this->test->callMe('TestController');
    }

//其他控制器动作
}