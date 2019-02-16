@extends('layouts.admin')
@section('container')
<div class="container" style="padding-top: 56px; height: 500px; width: 842px;" >




<div>





    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">title</th>
                <th scope="col">body</th>
                <th scope="col">image</th>
                <th scope="col">option</th>

            </tr>
        </thead>
        <tbody>
            @if ($about)
            @foreach ($about as $about)
            <tr>

                <td>{{$about->title}}</td>
                <td>{{$about->body}}</td>
                <td>{{$about->photo->file}}</td>
                <td><a href="{{ route('editAbout',$about->id) }}">edit</a></td>

            </tr>

            @endforeach
            @endif

        </tbody>
    </table>










@if (!$about->count())
<div>
        <h3> create information</h3>

{!! Form::open(['method' =>'Post', 'action' => 'AboutController@store' ,'files'=>'true' ])  !!}


<div class="form-group">
    {!! Form::label('title','title:') !!}
    {!! Form::text('title',null,['class'=>'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('body','body:') !!}
    {!! Form::text('body',null,['class'=>'form-control','rows'=>'7' ,'required']) !!}
</div>



<div class="form-group">
    {!! Form::label('photo_id','photo:') !!}
    {!! Form::file('photo_id',null,['class'=>'form-control', 'required']) !!}
</div>

<div class="form-group">

    {!! Form::submit('create ',['class'=>'btn btn-primary']) !!}
</div>

{{ Form::close() }}
</div>
@endif



</div>
@endsection
