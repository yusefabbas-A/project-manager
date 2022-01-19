@extends('projects.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Projects</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('projects.create') }}"> Create New project</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="container">
    <div class="row">
        @foreach ($projects as $project)   
        <div class="card col-lg-4" style="margin:10px;">
            <div class="card-body">
              <div class="d-flex justify-content-between"> 
                <h5 class="card-title">{{ $project->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $project->id }}</h6>
                <a class="btn btn-success" href="{{ route('tasks.create') }}"> Create A Task</a>
              </div>
              

              <ul class="list-group list-group-flush">

                  {{-- @foreach ($tasks as $task )
                  <li class="list-group-item"><input type="checkbox" aria-label="Checkbox for following text input"><p style="display:inline; margin-left:5px;">{{ $task->name }}</p></li>
                  @endforeach --}}
                  

              </ul>

              
            <div class="progress" style="margin-top:20px;">
                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
    
              <form style="float:right; margin-top:10px;" action="{{ route('projects.destroy',$project->id) }}" method="POST">

                <a class="btn btn-primary" href="{{ route('projects.edit', $project->id) }}">Edit</a>

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>


            </div>
          </div>
        @endforeach
    </div>

</div>

   
{{ $projects->links() }}


@endsection