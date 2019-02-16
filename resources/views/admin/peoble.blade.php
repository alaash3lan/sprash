@extends('layouts.admin')
@section('container')
<div class="container" style="padding-top: 56px; height: 500px; width: 842px;" >


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">info</th>
                <th scope="col">text</th>
                <th scope="col">photo</th>
                <th scope="col"> options</th>
                <th scope="col">  .</th>
            </tr>
        </thead>
        <tbody>
            @if ($people)
            @foreach ($people as $person)
            <tr>

                <td>{{$person->name}}</td>
                <td>{{$person->info}}</td>
                <td>{{$person->text}}</td>
                <td>{{$person->photo_id}}</td>
                <td><a href="{{ route('editPeople',$person->id) }}">edit</a></td>
                <td><a href="{{ route('deletePeople',$person->id) }}">delete</a></td>
            </tr>

            @endforeach
            @endif

        </tbody>
    </table>


<br/>
    <div class="row">

 <h3> create peoble</h3>

{!! Form::open(['method' =>'Post', 'action' => 'PeopleController@create' , 'files'=>'true'])  !!}


<div class="form-group">
    {!! Form::label('name','name:') !!}
    {!! Form::text('name',null,['class'=>'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('text','text:') !!}
    {!! Form::text('text',null,['class'=>'form-control','rows'=>'7' ,'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('info','info:') !!}
    {!! Form::text('info',null,['class'=>'form-control','rows'=>'5' ,'required']) !!}
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
<div>







</div>

<div>
@endsection
