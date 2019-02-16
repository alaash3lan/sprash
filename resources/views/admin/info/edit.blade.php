@extends('layouts.admin')
@section('container')
<div class="container" style="padding-top: 56px; height: 500px; width: 842px; " >


<h3> create information</h3>

{!! Form::model($info,['method' =>'PATCH', 'action' => ['InfoController@update', $info->id]])  !!}


<div class="form-group">
    {!! Form::label('projects_done','projects_done:') !!}
    {!! Form::text('projects_done',$info->projects_done,['class'=>'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('happy_clients','happy_clients:') !!}
    {!! Form::text('happy_clients',$info->happy_clients,['class'=>'form-control','rows'=>'5' ,'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('real_professionals','real_professionals:') !!}
    {!! Form::text('real_professionals',$info->real_professionals,['class'=>'form-control','rows'=>'5' ,'required']) !!}
</div>



<div class="form-group">
    {!! Form::label('coffee','coffee:') !!}
    {!! Form::text('coffee',$info->coffee,['class'=>'form-control','rows'=>'5' ,'required']) !!}
</div>

<div class="form-group">

    {!! Form::submit('create ',['class'=>'btn btn-primary']) !!}
</div>

{{ Form::close() }}



</div>




@endsection
