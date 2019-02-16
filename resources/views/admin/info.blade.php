@extends('layouts.admin')
@section('container')
<div class="container" style="padding-top: 56px; height: 500px; width: 842px;" >




<div>





    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">real rofessionals</th>
                <th scope="col">projects done</th>
                <th scope="col">coffe</th>
                <th scope="col">happy clients</th>
                <th scope="col"> options</th>
            </tr>
        </thead>
        <tbody>
            @if ($infos)
            @foreach ($infos as $info)
            <tr>

                <td>{{$info->real_professionals}}</td>
                <td>{{$info->projects_done}}</td>
                <td>{{$info->coffee}}</td>
                <td>{{$info->happy_clients}}</td>
                <td><a href="{{ route('editInfo',$info->id) }}">edit</a></td>
            </tr>

            @endforeach
            @endif

        </tbody>
    </table>










@if ($infos->isEmpty())
<div>
        <h3> create information</h3>

{!! Form::open(['method' =>'Post', 'action' => 'InfoController@store' ])  !!}


<div class="form-group">
    {!! Form::label('projects_done','projects_done:') !!}
    {!! Form::text('projects_done',null,['class'=>'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('happy_clients','happy_clients:') !!}
    {!! Form::text('happy_clients',null,['class'=>'form-control','rows'=>'5' ,'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('real_professionals','real_professionals:') !!}
    {!! Form::text('real_professionals',null,['class'=>'form-control','rows'=>'5' ,'required']) !!}
</div>



<div class="form-group">
    {!! Form::label('coffee','coffee:') !!}
    {!! Form::text('coffee',null,['class'=>'form-control','rows'=>'5' ,'required']) !!}
</div>

<div class="form-group">

    {!! Form::submit('create ',['class'=>'btn btn-primary']) !!}
</div>

{{ Form::close() }}
</div>
@endif



</div>
@endsection
