@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-12">
            <h1>{{ $project->nome}}</h1>
            <p>{{ $project->linguaggio}}</p>
            <p class="text-center"><a href=" {{ $project->url_repo}}">Clicca qui per Git Hub</a></p>
            <p>{{$project->info}}</p>
        </div>
    </div>
    @endsection
