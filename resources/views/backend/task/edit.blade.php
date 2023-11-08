@extends('backend.master')

@section('title','Edit Task')

@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class="co-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Create Task</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('task.update',$task->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row mt-2">
                                <label class="col-md-4"> Task Title</label>
                                <div class="col-md-8">
                                    <input type="text" name="title" value="{{$task->title}}" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="col-md-4"> Task Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" id="" cols="30" rows="10">{{$task->description}}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="col-md-4"> Task completed</label>
                                <div class="col-md-8">
                                    <input type="text" name="completead" value="{{$task->completead}}" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="col-md-4"> Task status</label>
                                <div class="col-md-8">
                                    <label><input type="radio" name="status" {{$task->status == 1 ? 'checked' : ''}} value="1">published</label>
                                    <label><input type="radio" name="status" {{$task->status == 0 ? 'checked' : ''}} value="0">unpublished</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="col-md-4"> </label>
                                <div class="col-md-8">
                                    <input type="submit"  class="btn btn-success" value="update-Task">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
