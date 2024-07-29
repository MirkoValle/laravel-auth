@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-12 w-50">
            <form action="{{ route('admin.projects.store')}}" method="POST" id="creation_form">
                @csrf
                    <div class="mb-3">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" placeholder="Nome progetto" id="nome" name="nome" value="{{ old('nome') }}">
                    </div>

                    <div class="mb-3">
                    <label for="linguaggio">Linguaggio</label>
                    <input type="text" class="form-control" placeholder="Linguaggio" id="linguaggio" name="linguaggio" value="{{ old('linguaggio') }}">
                    </div>

                    <div class="mb-3">
                        <label for="info">Info</label>
                        <input type="text" class="form-control"  placeholder="Info" id="info" name="info" value="{{ old('info') }}">
                        </div>

                    <div class="mb-3">
                    <label for="url_repo">Link Git Hub</label>
                    <input type="text" class="form-control"  placeholder="Url" id="url_repo" name="url_repo" value="{{ old('url_repo') }}">
                    </div>


                    <div class="d-flex justify-content-between mt-3">

                            <input class="btn btn-primary" type="submit" value="Aggiungi Progetto">
                            <input class="btn btn-warning" type="reset" value="Reset">

                    </div>

            </form>
        </div>
    </div>
    @endsection
