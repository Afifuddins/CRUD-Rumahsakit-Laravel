@extends('layouts.master')

@section('content')

    <h1>Edit data pasien </h1>
    <p class="lead">Edit data pasien di bawah ini Atau <a href="{{ route('tasks.index') }}">Kembali Ke data pasien.</a></p>
    <hr>

    {!! Form::model($task, [
    'method' => 'PATCH',
    'route' => ['tasks.update', $task->id]
]) !!}

    <div class="form-group @if ($errors->get('title')): has-error @endif">
        {!! Form::label('title', 'Name:', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        @if ($errors->has('title'))
            <p class="help-block">{{ $errors->first('title') }}</p>
        @endif
    </div>

    <div class="form-group @if ($errors->get('penyakit')): has-error @endif">
        {!! Form::label('penyakit', 'Penyakit:', ['class' => 'control-label']) !!}
        {!! Form::text('penyakit', null, ['class' => 'form-control']) !!}
        @if ($errors->has('penyakit'))
            <p class="help-block">{{ $errors->first('penyakit') }}</p>
        @endif
    </div>

     <div class="form-group @if ($errors->get('umur')): has-error @endif">
        {!! Form::label('umur', 'Usia:', ['class' => 'control-label']) !!}
        {!! Form::text('umur', null, ['class' => 'form-control']) !!}
        @if ($errors->has('umur'))
            <p class="help-block">{{ $errors->first('umur') }}</p>
        @endif
    </div>

    <div class="form-group @if ($errors->get('alamat')): has-error @endif">
        {!! Form::label('description', 'Alamat:', ['class' => 'control-label']) !!}
        {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
        @if ($errors->has('alamat'))
            <p class="help-block">{{ $errors->first('alamat') }}</p>
        @endif
    </div>

    <div class="form-group @if ($errors->get('description')): has-error @endif">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        @if ($errors->has('description'))
            <p class="help-block">{{ $errors->first('description') }}</p>
        @endif
    </div>

    {!! Form::submit('Update Pasien', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop