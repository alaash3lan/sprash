@extends('layouts.admin')
@section('container')
<div class="container" style="padding-top: 56px; height: 500px; width: 842px; " >


<h3> update information</h3>

{!! Form::model($person,['method' =>'PATCH', 'action' => ['PeopleController@update', $person->id], 'files'=>'true'])  !!}



<div class="form-group">

    {!! Form::submit('update ',['class'=>'btn btn-primary']) !!}
</div>








<div class="form-group">
    {!! Form::label('name','name:') !!}
    {!! Form::text('name',$person->name,['class'=>'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('text','text:') !!}
    {!! Form::text('text',$person->text,['class'=>'form-control','rows'=>'7' ,'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('info','info:') !!}
    {!! Form::text('info',$person->info,['class'=>'form-control','rows'=>'5' ,'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('photo_id','photo:') !!}
    {!! Form::file('photo_id',['class'=>'form-control']) !!}
</div>



{{ Form::close() }}



</div>




@endsection
