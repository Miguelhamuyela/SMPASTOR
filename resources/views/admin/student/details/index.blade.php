@extends('layouts.merge.dashboard')
@section('title', 'Detalhes do Estudante')
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
                                        Nome: {{ $student->name }}
                                    </h2>
                                </div>
                                <div class="col-12 col-md-4 col-lg-4 text-right mt-5">
                                    <a href="{{ route('admin.student.edit', $student->id) }}"
                                        class="btn btn-md btn-primary shadow-sm text-end">Editar</a>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Nºde Proc</b>
                                    </h5>
                                    <p class="text-dark">{{ $student->nProcess }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Nº do BI</b>
                                    </h5>
                                    <p class="text-dark">{{ $student->nBi }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">E-mail do Aluno</b>
                                    </h5>
                                    <p class="text-dark">{{ $student->email }}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Data de Nascimento</b>
                                    </h5>
                                    <p class="text-dark">{{ $student->dateBirth }}</p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Contacto do Aluno</b>
                                    </h5>
                                    <p class="text-dark">{{ $student->contact }} / {{ $student->contactAlter }}</p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Nome do Pai</b>
                                    </h5>
                                    <p class="text-dark">{{ $student->father }}</p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Nome da Mâe</b>
                                    </h5>
                                    <p class="text-dark">{{ $student->mother }}</p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Ano lectivo</b>
                                    </h5>
                                    <p class="text-dark">{{ $student->schoolyear }}</p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Curso</b>
                                    </h5>
                                    <p class="text-dark">{{ $student->courses->name}}</p>
                                </div>
                                 <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Responsavel do Estudante</b>
                                    </h5>
                                    <p class="text-dark">{{ $student->responsibles->name}}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Contacto do Responsavel</b>
                                    </h5>
                                    <p class="text-dark">{{ $student->responsibles->phone}}</p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Religião do Responsavel</b>
                                    </h5>
                                    <p class="text-dark">{{ $student->responsibles->religion}}</p>
                                </div>

                               <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Ocupação do Responsavel</b>
                                    </h5>
                                    <p class="text-dark">{{ $student->responsibles->occupation}}</p>
                                </div>

                                  <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5>
                                        <b class="mb-1">Paroquia/Comunidade</b>
                                    </h5>
                                    <p class="text-dark">{{ $student->parishes->name}}</p>
                                </div>

                            </div>

                            <div class="row align-items-center">
                                <div class="col-md-7 mb-2">
                                    <hr>
                                    <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ $student->created_at }}
                                    </p>
                                    <p class="mb-1 text-dark"><b>Última Actualização</b> {{ $student->updated_at }}
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
