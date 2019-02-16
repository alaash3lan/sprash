@extends('layouts.admin')
@section('container')
<div class="container" style="padding-top: 56px; height: 500px; width: 842px; " >


<h3> update project</h3>

{!! Form::model($project,['method' =>'PATCH', 'action' => ['ProjectController@update', $project->id], 'files'=>'true'])  !!}



<div class="form-group">

    {!! Form::submit('update ',['class'=>'btn btn-primary']) !!}
</div>








<div class="form-group">
    {!! Form::label('title','title:') !!}
    {!! Form::text('title',$project->title,['class'=>'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('body','body:') !!}
    {!! Form::text('body',$project->body,['class'=>'form-control','rows'=>'7' ,'required']) !!}
</div>


<div class="form-group">
    {!! Form::label('photo_id','photo:') !!}
    {!! Form::file('photo_id',['class'=>'form-control']) !!}
</div>



{{ Form::close() }}



</div>




@endsection
