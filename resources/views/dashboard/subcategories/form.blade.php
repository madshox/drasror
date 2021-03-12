@extends('dashboard.layout.master')
{{--@dd($subcategories)--}}
@isset($subcategories)
    @section('title', 'Редактировать подкатегорию ' . $subcategories['title'])
@else
    @section('title', 'Создать подкатегорию')
@endisset


@section('content')
            <section id="input-with-icons">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card" style="">
                            <div class="card-header">
                                @isset($subcategories)
                                    <h4 class="card-title">Редактировать подкатегорию</h4>
                                @else
                                    <h4 class="card-title">Создать подкатегорию</h4>
                                @endisset
                            </div>
                            <form id="form" method="POST" enctype="multipart/form-data"
                                  @isset($subcategories)
                                  action="{{ route('subcategories.update', $subcategories['id']) }}"
                                  @else
                                  action="{{ route('subcategories.store') }}"
                                @endisset>

                                @isset($subcategories)
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
                                                               placeholder="Название подкатегории"
                                                               value="{{ old('title', isset($subcategories) ? $subcategories['title'] : null) }}">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-phone"></i>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            {{--Multiple image--}}
                                            @isset($subcategories)
                                                <div class="input-images-2 col-12"></div>
                                            @else
                                                <div class="input-images col-12"></div>
                                            @endisset
                                            <!--End-multiple-image-->

                                            <div class="col-12" style="margin-top: 30px">
                                            <select name="service_id" id="servid" class="form-control">
{{--                                                <option></option>--}}
                                                @foreach($services as $service)
                                                    <option value="{{ $service->id }}"
                                                        @isset($subcategories)
                                                            @if($subcategories->service_id == $service->id)
                                                                selected
                                                            @endif
                                                        @endisset>
                                                        {{ $service->title }}
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
                                                        <a href="{{ route('subcategories.index') }}">
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
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#servid').select2();
                })
            </script>
            <script>
                $('.input-images').imageUploader();

                <?php if(isset($subcategories)) { ?>
                $('.input-images-2').imageUploader({
                    preloaded: [
                            <?php foreach ($subcategories->images as $image) { ?>
                        { id: {{ $image->id }}, src: '{{ Storage::url($image->image) }}' },
                        <?php } ?>
                    ]
                });
                <?php } ?>
            </script>
@endsection
