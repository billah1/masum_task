@extends('backend.master')



@section('title','Add Task')


@section('body')
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-12 mx-auto">
               <div class="card">
                   <div class="card-header">
                       <h3>Create Task</h3>
                   </div>
                   <div class="card-body">
                       <form action="{{route('task.store')}}" method="post">
                           @csrf
                           <div class="row mt-2">
                               <label class="col-md-4"> Task Title</label>
                               <div class="col-md-8">
                                   <input type="text" name="title" class="form-control">
                               </div>
                           </div>
                           <div class="row mt-2">
                               <label class="col-md-4"> Task Description</label>
                               <div class="col-md-8">
                                   <textarea name="description" id="" cols="30" rows="10"></textarea>
                               </div>
                           </div>
                           <div class="row mt-2">
                               <label class="col-md-4"> Task completed</label>
                               <div class="col-md-8">
                                   <input type="text" name="completead" class="form-control">
                               </div>
                           </div>
                           <div class="row mt-2">
                               <label class="col-md-4"> Task status</label>
                               <div class="col-md-8">
                                   <label><input type="radio" name="status" value="1">published</label>
                                   <label><input type="radio" name="status" value="0">unpublished</label>
                               </div>
                           </div>
                           <div class="row mt-2">
                               <label class="col-md-4"> </label>
                               <div class="col-md-8">
                                   <input type="submit"  class="btn btn-success" value="create-Task">
                               </div>
                           </div>

                       </form>
                   </div>
               </div>
           </div>
       </div>

   </div>

@endsectio