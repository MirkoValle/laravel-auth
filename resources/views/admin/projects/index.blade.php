@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-12">
            <table class="table table-light table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Linguaggio</th>
                        <th scope="col" class="text-center">Link Git Hub</th>
                        <th scope="col" class="text-center">Azioni</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->nome}}</td>
                        <td>{{ $project->linguaggio}}</td>
                        <td class="text-center"><a href=" {{ $project->url_repo}}">Clicca qui per Git Hub</a></td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('admin.projects.show', $project)}}" class="btn btn-primary d-flex justify-content-center mx-2">Show</a>
                                <a href="" class="btn btn-warning d-flex justify-content-center">Edit</a>
                                <form action="" method="POST" class="d-inline-block delete_form mx-2" >

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>

    </div>
</div>
@endsection
