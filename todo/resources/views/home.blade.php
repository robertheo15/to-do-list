@extends('layouts.app')

@section('content')

<div class="container text-center">
  
      <div class="row justify-content-center">
        <h1>To-do-list</h1>
        <div class="card text-center bg-dark">
          <div class="card-header">
            <h3>My list</h3> 
          </div>
          <div class="card-body">
            <h5 class="card-title">Add task</h5>
            <form>
              <div class="mb-3">
                <label for="task" class="form-label">New task</label>
                <input type="text" class="form-control" id="task" >
              </div>
              <button type="submit" class="btn btn-primary">Add</button>
            </form>
          </div>
          <div class="card-body">
            <p>Empty</p>
            <div class="form-check form-switch">
              <p>Empty</p>
              <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
              <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
              
            </div>
          </div>
          
        </div>
     
  </div>
    
</div>
@endsection
