@extends('layouts.master')

@section('content')

    <h1>Daftar Pasien Yang Sakit</h1>
    <p class="lead">Di sini anda dapat melihat daftar pasien. <a href="{{ route('tasks.create') }}">Tambah pasien?</a></p>
    <hr>

    @if(Session::has('flash_message'))
        <div class="alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('flash_message') }}
        </div>
    @endif

    @foreach($tasks as $task)
        <b>Name:</b><h2>{{ $task->title }}</h2>
        <b>Penyakit:</b><h3>{{ $task->penyakit }}</h3>
        <b>Deskripsi:</b><p>{{ $task->description}}</p>

        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">Lihat data</a>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Data</a>
            </div>
            <div class="col-md-6 text-right">
                {!! Form::open([
                    'method' => 'DELETE',
                    'route' => ['tasks.destroy', $task->id]
                ]) !!}
                {!! Form::submit('Delete Data?', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        <hr>
    @endforeach

    <style type="text/css">
        p{

            padding-top: 10px;
            padding-left: 30px;
        }
        h2{
           
            padding-left: 30px;
        }
        h3{
           
            padding-left: 30px;
        }
        b{
            font-size: 20px;
        }
    </style>

@stop