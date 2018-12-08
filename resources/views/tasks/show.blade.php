@extends('layouts.master')

@section('content')

    <b><i>Nama:</i></b><h1>{{ $task->title }}</h1>
    <b><i>Penyakit:</i></b><h3>{{ $task->penyakit }}</h3>
    <b><i>Usia:</i></b><h3>{{ $task->umur }}</h3>
    <b><i>Alamat:</i></b><h3>{{ $task->alamat }}</h3>
    <b><i>Deskripsi:</i></b><p class="lead">{{ $task->description }}</p>
    <hr>

    <div class="row">

        <div class="col-md-6" id="col">
            <a href="{{ route('tasks.index') }}" class="btn btn-info">Kembali ke data pasien</a>
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit data</a>
        </div>
        <div class="col-md-6 text-right">
            {!! Form::open([
                'method' => 'DELETE',
                'route' => ['tasks.destroy', $task->id]
            ]) !!}  
            {!! Form::submit('Delete this data?', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>

<style type="text/css">
    b{
        font-size: 20px;
    }
    h1{
        padding-bottom: : 10px;
    }
    h3{
        padding-bottom: 10px;
    }
</style>

@stop
