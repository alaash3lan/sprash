@extends('layouts.admin')
@section('container')
<div class="container" style="padding-top: 56px; height: 500px; width: 842px;" >


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">img</th>
                <th scope="col">title</th>
                <th scope="col">text</th>
                <th scope="col"> options</th>
                <th scope="col">  .</th>
            </tr>
        </thead>
        <tbody>
            @if ($sliders)
            @foreach ($sliders as $slider)
            <tr>


                <td>{{$slider->photo->file}}</td>
                <td>{{$slider->title}}</td>
                <td>{{$slider->body}}</td>
                <td><a href="{{ route('editSlider',$slider->id) }}">edit</a></td>
                <td><a href="{{ route('deleteSlider',$slider->id) }}">delete</a></td>
            </tr>

            @endforeach
            @endif

        </tbody>
    </table>


<br/>


<div>
 <h3> create peoble</h3>

{!! Form::open(['method' =>'Post', 'action' => 'SliderController@create' , 'files'=>'true'])  !!}


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

<div>
@endsection
