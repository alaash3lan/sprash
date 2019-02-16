@extends('layouts.admin')
@section('container')
<div class="container" style="padding-top: 56px; height: 500px; width: 842px; " >


<h3> update about</h3>

{!! Form::model($about,['method' =>'PATCH', 'action' => ['AboutController@update', $about->id], 'files'=>'true'])  !!}



<div class="form-group">

    {!! Form::submit('update ',['class'=>'btn btn-primary']) !!}
</div>








<div class="form-group">
    {!! Form::label('title','title:') !!}
    {!! Form::text('title',$about->title,['class'=>'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('body','body:') !!}
    {!! Form::text('body',$about->body,['class'=>'form-control','rows'=>'7' ,'required']) !!}
</div>


<div class="form-group">
    {!! Form::label('photo_id','photo:') !!}
    {!! Form::file('photo_id',['class'=>'form-control']) !!}
</div>



{{ Form::close() }}



</div>




@endsection
