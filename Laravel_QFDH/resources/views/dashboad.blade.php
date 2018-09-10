@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <h1 align="center">Projeto Integrador em Laravel</h1>
                    <br>
                    <h2 align="center">autores: Quarteto Fantástico</h2>
                    <br>
                    <h3 align="center">Criado em 27/08/2018</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
