@extends('dashboard.layout.master')

@section('title', 'Услуги')

@section('content')
            <div class="row" id="table-hover-animation">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Услуги</h4>
                            <a href="{{ route('services.create') }}"><button type="button" class="btn btn-outline-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus"></i>Добавить</button></a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover-animation mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col" style="text-align: center;">Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($services as $service)
                                            <tr>
                                                <th scope="row">{{ $service->id }}</th>
                                                <td>{{ $service->title }}</td>
                                                <td><img src="{{ Storage::url($service->head_image) }}" height="auto" width="150" alt=""></td>
                                                <td style="display: flex; justify-content: center;">
                                                    <form action="{{ route('services.destroy', $service) }}" method="POST">
                                                        <a href="{{ route('services.edit', $service) }}"><button type="button" class="btn btn-icon btn-warning mr-1 mb-1 waves-effect waves-light">
                                                                <div class="fonticon-wrap">
                                                                    <i class="feather icon-edit"></i>
                                                                </div>
                                                            </button></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-icon btn-danger mr-1 mb-1 waves-effect waves-light">
                                                            <div class="fonticon-wrap">
                                                                <i class="feather icon-trash-2"></i>
                                                            </div>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
