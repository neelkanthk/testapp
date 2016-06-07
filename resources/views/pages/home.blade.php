@extends('layouts.master')

@section('content')
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(array('route' => 'store', 'class' => 'form', 'files' => true)) !!}
{!! Form::label('name', 'Name') !!}
{!! Form::text('name') !!}
<br/>
{!! Form::label('email', 'Email') !!}
{!! Form::email('email', '', array('class' => '')) !!}
<br/>
{!! Form::label('password', 'Password') !!}
{!! Form::password('password') !!}
<br/>
{!! Form::label('hobby', 'Hobbies') !!}
<div class='cb_wrapper'>
    @foreach($hobbies as $hobby)
    {!! Form::checkbox('hobbies[]', $hobby['id']) !!} {!! $hobby['title'] !!}
    @endforeach

    {!! Form::checkbox('other_hobbies','', false, array('id' => 'other_hobby')) !!} Other
    <div id='other'>
        @if(old('otherhobby'))
        <input type="text" name="otherhobby" id="otherhobby" value="{{ old('otherhobby') }}"/>
        @endif
    </div>
</div>
<br/>
{!! Form::label('gender', 'Gender') !!}
{!! Form::select('gender', array('M' => 'Male', 'F' => 'Female')) !!}
<br/>
{!! Form::file('image') !!}
<br/>
{!! Form::submit('Save') !!}
{!! Form::close() !!}
@endsection