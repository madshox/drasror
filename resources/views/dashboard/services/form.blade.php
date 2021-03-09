@extends('dashboard.layout.master')
{{--@dd($services)--}}
@isset($services)
    @section('title', 'Редактировать услугу ' . $services['title'])
@else
    @section('title', 'Создать услугу')
@endisset


@section('content')
            <section id="input-with-icons">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card" style="">
                            <div class="card-header">
                                @isset($services)
                                    <h4 class="card-title">Редактировать услугу</h4>
                                @else
                                    <h4 class="card-title">Создать услугу</h4>
                                @endisset
                            </div>
                            <form id="form" method="POST" enctype="multipart/form-data"
                                  @isset($services)
                                  action="{{ route('services.update', $services['id']) }}"
                                  @else
                                  action="{{ route('services.store') }}"
                                @endisset>

                                @isset($services)
                                    @method('PUT')
                                @endisset
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6 col-12">
                                                @error('title')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                    Название
                                                </div>
                                                <fieldset
                                                    class="form-group position-relative has-icon-left input-divider-left">
                                                        <input type="text" class="form-control" id="name" name="title"
                                                               placeholder="Название услуги"
                                                               value="{{ old('title', isset($services) ? $services['title'] : null) }}">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-phone"></i>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <!--CK-editor-->
                                            <div class="col-12">
                                                @error('description')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                    Описание
                                                </div>
                                                <textarea name="description" id="editor" cols="30" placeholder="Описание услуги"
                                                    rows="10">{{ old('description', isset($services) ? $services['description'] : null) }}</textarea>
                                            </div>
                                            <!--end-CK-editor-->

                                            <!--CK-editor-->
                                            <div class="col-12 mt-2">
                                                @error('long_d')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                    Длинное описание
                                                </div>
                                                <textarea name="long_d" id="editor2" cols="30" placeholder="Длинное описание услуги"
                                                          rows="10">{{ old('description', isset($services) ? $services['long_d'] : null) }}</textarea>
                                            </div>
                                            <!--end-CK-editor-->

                                            <div class="col-12" style="margin-top: 30px">
                                                @error('head_image')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
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
                                            @isset($services)
                                                <div class="input-images-2 col-12"></div>
                                            @else
                                                <div class="input-images col-12"></div>
                                            @endisset
                                            <!--End-multiple-image-->

                                            <div class="col-12" style="margin-top: 30px">
                                            <select name="category_id" id="category_id" class="form-control">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        @isset($services)
                                                            @if($services->category_id == $category->id)
                                                                selected
                                                            @endif
                                                        @endisset>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
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
            <script>
                $('.input-images').imageUploader();

                <?php if(isset($services)) { ?>
                $('.input-images-2').imageUploader({
                    preloaded: [
                            <?php foreach ($services->images as $image) { ?>
                        { id: {{ $image->id }}, src: '{{ Storage::url($image->image) }}' },
                        <?php } ?>
                    ]
                });
                <?php } ?>
            </script>
@endsection
