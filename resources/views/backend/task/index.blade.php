@extends('backend.master')

@section('title','Manage Task')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Mange Task</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Completed</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($tasks as $task)
                                   <tr>
                                       <td>{{$loop->iteration}}</td>
                                       <td>{{$task->title}}</td>
                                       <td>{{$task->description}}</td>
                                       <td>{{$task->completead}}</td>
                                       <td>{{$task->status == 1 ? 'published' : 'unpublished'}}</td>
                                       <td class="d-flex">
                                           <a href="{{route('task.edit',$task->id)}}" class="btn btn-success btn-sm me-3">
                                               <i class="fa fa-edit"></i>
                                           </a>
                                           <form action="{{route('task.destroy',$task->id)}}"  method="post">
                                               @csrf
                                               @method('DELETE')
                                               <button type="submit" class="btn btn-danger btn-sm me-1" onclick="return confirm('Are you sure to delte this')">
                                                   <i class="fa fa-trash"></i>
                                               </button>

                                           </form>
                                       </td>
                                   </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>



@endsectio