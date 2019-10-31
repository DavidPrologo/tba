<?php

namespace App\Http\Controllers;

use App\Http\Task;

class TaskController extends Controller{
    public function index(){
        $tasks = [
            ['id'=>'1', 'name'=> 'loren ipsum', 'discription'=> 'lorem ipsum1 lorem ipsum2'],
            ['id'=>'2', 'name'=> 'loren ipsum', 'discription'=> 'lorem ipsum1 lorem ipsum2'],
            ['id'=>'3', 'name'=> 'loren ipsum', 'discription'=> 'lorem ipsum1 lorem ipsum2'],
            ['id'=>'4', 'name'=> 'loren ipsum', 'discription'=> 'lorem ipsum1 lorem ipsum2'],
            ['id'=>'5', 'name'=> 'loren ipsum', 'discription'=> 'lorem ipsum1 lorem ipsum2'],
            ['id'=>'6', 'name'=> 'loren ipsum', 'discription'=> 'lorem ipsum1 lorem ipsum2'],
        ];
        // return json_encode($tasks);
        return json_encode(Task::all());
    }
    public function show($id){
        return Task::find($id);
    }
    public function store(Resquest $request){
        return Task::create($request->all());
    }
    public function update(Request $request, $id){
        $task = Task::findOrFail($id);
        $task->update($request->all());

        return $task;
    }
    public function delete(Request $request, $id){
        $task = Task::findOrFail($id);
        $task->delete();

        return 204;
    }
}