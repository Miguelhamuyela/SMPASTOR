@extends('layouts.merge.dashboard')
@section('title', 'Lista de Departamentos')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lista de Paroquia</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Paroquia</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Ano</th>
                                <th>Acções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($parishes as $parish)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $parish->name }}</td>
                                    <td>
                                        <div class="dropdown mb-4">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            </button>
                                            <div class="dropdown-menu animated--fade-in"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.parish.show', $parish->id) }}">Detalhes</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.parish.edit', $parish->id) }}">Editar</a>
                                                <a class="dropdown-item delete-button" href="#"
                                                    data-based-id="{{ route('admin.parish.destroy', $parish->id) }}">Remover</a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>
@endsection('content')
