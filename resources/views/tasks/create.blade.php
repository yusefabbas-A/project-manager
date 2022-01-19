@extends('projects.layout')

@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add A task</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('projects.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Task detail:</strong>
                <input type="text" name="detail" class="form-control" placeholder="detail">
            </div>
            <div class="input-group-text">
                <input type="checkbox" aria-label="Checkbox for following text input">
              </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-top: 10px;">
            <button type="submit" class="btn btn-primary" >Create</button>
        </div>
    </div>

</form>


@endsection