<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected static $task;


    public static function storetask($request){


        self::$task    = new Task();
        self::saveBasicTask(self::$task,$request);
    }

    public static function updatetask($task,$request){
        self::saveBasicTask($task,$request);
    }


    public static function saveBasicTask($task,$request){

        $task->title             =  $request->title;
        $task->description       =  $request->description;
        $task->completead         =  $request->completead;
        $task->status            =  $request->status;
        $task->save();

    }
    public static function deletetask($task){
        $task->delete();
    }
}
