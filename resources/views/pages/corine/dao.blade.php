@extends('layouts.masterworker')

@section('content')
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">DAO</h1>
            {{-- <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dao</li>
                    </ol>
                </nav>
            </div> --}}
        </div>
        <!-- Page Header Close -->
        <!-- Start:: row-1 -->
        <div class="row">
            <div>
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Liste de DAO
                        </div>
                        <div class="prism-toggle">
                            <a class="btn btn-sm btn-primary" href="{{ route('dao.create') }}">Ajouter DAO
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>

                                    <th scope="col"> {{ __('Nom') }}</th>
                                    <th scope="col"> {{ __('Catégorie') }}</th>
                                    <th scope="col"> {{ __('Pays') }}</th>
                                    <th scope="col"> {{ __('Prix') }}</th>
                                    <th scope="col">{{ __('Date de Début') }}</th>
                                    <th scope="col">{{ __('Date de Fin') }}</th>
                                    <th scope="col">{{ __('Nombre max de souscription') }}</th>
                                    <th scope="col">{{ __('Actions') }}</th>
                                    </tr>

                                </thead>
                                <tbody>

                                    @forelse($daoResults as $daoResult)
                                    <tr>
                                        <td> {{ $daoResult->name }}</td>
                                        <td> {{ $daoResult->category }}</td>
                                        <td> {{ $daoResult->country }}</td>
                                        <td> {{ $daoResult->prices }}</td>
                                        <td>{{ date('d-M-y', strtotime($daoResult->start_at)) }}</td>
                                        <td>{{ date('d-M-y', strtotime($daoResult->end_at)) }}</td>
                                        <td>{{ __($daoResult->max_number_subscribe) }}</td>
                                        <td>
                                            <a href={{ route('dao.show', ['id' => $daoResult->id]) }}
                                                class="btn btn-icons-list-item btn-sm btn-success-transparent rounded-pill"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="voir plus"><i class="fe fe-eye"></i></a>
                                            <a href={{ route('dao.subscribe', ['id' => $daoResult->id]) }}
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="souscription"
                                                class="btn btn-icon btn-sm btn-success-transparent rounded-pill">
                                                <i class="bx bx-layer"></i>
                                            </a>
                                            <a href={{ route('dao.edit', ['id' => $daoResult->id]) }}
                                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="editer"
                                                class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                    class="ri-edit-line"></i></a>
                                            {{-- <a href={{ route('dao.destroy', ['id' => $daoResult->id]) }} --}}
                                            <a href={{ route('dao.delete', $daoResult->id) }} data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="supprimer"
                                                class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                    class="ri-delete-bin-line"></i></a>
                                            {{-- <a href="{{route("delete", $taskResult->id)}}" class="btn btn-outline-secondary">delete</a> --}}


                                        </td>
                                    </tr>
                                    @empty
                                        <div>
                                            Aucune dao actuellement!!!
                                        </div>
                                    @endforelse 
                                         

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-none border-top-0">
                        <!-- Prism Code -->

                        <!-- Prism Code -->
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
