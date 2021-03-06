@extends('dashboard.layout.master')

@isset($category)
    @section('title', 'Редактировать категорию ' . $category->name)
@else
    @section('title', 'Создать категорию')
@endisset


@section('content')
            <section id="input-with-icons">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card" style="">
                            <div class="card-header">
                                @isset($category)
                                    <h4 class="card-title">Редактировать категорию</h4>
                                @else
                                    <h4 class="card-title">Создать категорию</h4>
                                @endisset
                            </div>
                            <form id="form" method="POST" enctype="multipart/form-data"
                                  @isset($category)
                                  action="{{ route('categories.update', $category) }}"
                                  @else
                                  action="{{ route('categories.store') }}"
                                @endisset>

                                @isset($category)
                                    @method('PUT')
                                @endisset

                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6 col-12">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                    Название
                                                </div>
                                                <fieldset
                                                    class="form-group position-relative has-icon-left input-divider-left">
                                                    @isset($category)
                                                        <input type="text" class="form-control" id="name" name="name"
                                                               placeholder="Название категории"
                                                               value="{{ old('name', isset($category) ? $category->name : null) }}">
                                                    @else
                                                        <input type="text" class="form-control" id="name" name="name"
                                                               placeholder="Название категории"
                                                               value="{{ old('name', isset($category) ? $category->name : null) }}">
                                                    @endisset
                                                    <div class="form-control-position">
                                                        <i class="feather icon-phone"></i>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div class="col-12" style="margin-top: 30px">
                                                @error('icon')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                    Иконка
                                                </div>
                                                <fieldset class="form-group">
                                                    <label for="basicInputFile">Загрузить</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                               id="inputGroupFile01" name="icon">
                                                        <label class="custom-file-label" for="inputGroupFile01">Файлы
                                                            типа:
                                                            webp, jpeg, jpg, png</label>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div class="card-body">
                                                <div class="row" style="display: inline-flex">
                                                    <div class="col-6">
                                                        @csrf
                                                        <button type="submit"
                                                                class="btn btn-outline-success round mr-1 mb-1 waves-effect waves-light">
                                                            Сохранить
                                                        </button>

                                                    </div>
                                                    <div class="col-6">
                                                        <a href="{{ route('categories.index') }}">
                                                            <button type="button"
                                                                    class="btn btn-outline-danger round mr-1 mb-1 waves-effect waves-light">
                                                                Отмена
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
@endsection
