@extends('layouts.merge.dashboard')
@section('title', 'Detalhes da Paroquia')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Detalhes</h1>
                </div>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="row justify-content-between mb-4">
                                <div class="col-12 col-md-6 col-lg-6 mt-5 ml-5">
                                    <h2 class="h3 page-title">
                                        Nome da Paróquia: {{ $parishes->name }}
                                    </h2>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4 text-right mt-5">
                                    <a href="{{ route('admin.parish.edit', $parishes->id) }}"
                                        class="btn btn-md btn-primary shadow-sm text-end">Editar</a>
                                </div>
                            </div>
                            <div class="row align-items-center">

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Telefone</b>
                                    </h5>
                                    <p class="text-dark">{{ $parishes->phone }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Endereço</b>
                                    </h5>
                                    <p class="text-dark">{{ $parishes->address }}</p>
                                </div>


                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Descrição de Sobre a Paroquia</b>
                                    </h5>
                                    <p class="text-dark">{{ $parishes->details }}</p>
                                </div>

                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-7 mb-2">
                                    <hr>
                                    <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ $parishes->created_at }}
                                    </p>
                                    <p class="mb-1 text-dark"><b>Última Actualização</b> {{ $parishes->updated_at }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection('content')
