@extends('dashboard.layout.master')

@isset($service)
    @section('title', 'Редактировать услугу ' . $service->name)
@else
    @section('title', 'Создать услугу')
@endisset


@section('content')
            <section id="input-with-icons">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card" style="">
                            <div class="card-header">
                                @isset($service)
                                    <h4 class="card-title">Редактировать услугу</h4>
                                @else
                                    <h4 class="card-title">Создать услугу</h4>
                                @endisset
                            </div>
                            <form id="form" method="POST" enctype="multipart/form-data"
                                  @isset($service)
                                  action="{{ route('services.update', $service) }}"
                                  @else
                                  action="{{ route('services.store') }}"
                                @endisset>

                                @isset($service)
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
                                                        <input type="text" class="form-control" id="name" name="title"
                                                               placeholder="Название услуги"
                                                               value="{{ old('title', isset($service) ? $service->title : null) }}">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-phone"></i>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            {{--CK-editor--}}
                                            <div class="col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                    Описание
                                                </div>
                                                <textarea name="description" id="editor" cols="30" placeholder="Описание услуги"
                                                    rows="10">{{ old('description', isset($service) ? $service->description : null) }}</textarea>
                                            </div>
                                            {{--end-CK-editor--}}

                                            <div class="col-12" style="margin-top: 30px">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                    Главная картинка
                                                </div>
                                                <fieldset class="form-group">
                                                    <label for="basicInputFile">Загрузить</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                               id="inputGroupFile01" name="head_image">
                                                        <label class="custom-file-label" for="inputGroupFile01">Файлы
                                                            типа:
                                                            webp, jpeg, jpg, png</label>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            {{--Multiple image--}}
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Remove Thumbnail</h4>
                                                        </div>
                                                        <div class="card-content">
                                                            <div class="card-body">
                                                                <p class="card-text">This example allows user to remove any file out of all uploaded files. This will add a
                                                                    link to every file preview to remove or cancel (if already uploading) the file. The
                                                                    <code>dictCancelUpload</code>, <code>dictCancelUploadConfirmation</code> and <code>dictRemoveFile</code>
                                                                    options are used for the wording.</p>
                                                                <form action="#" class="dropzone dropzone-area dz-clickable" id="dpz-remove-thumb">
                                                                    <div class="dz-message">Drop Files Here To Upload</div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End-multiple-image-->

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
                                                        <a href="{{ route('services.index') }}">
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
