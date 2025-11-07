@extends('layouts.master2')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('admin_asset/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('admin_asset/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_asset/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('admin_asset/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_asset/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_asset/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_asset/plugins/prism/prism.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin_asset/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection
@section('page-header')
    <br>
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">العملاء </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ ااضافة
                    عميل</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">

        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i
                                class="fas fa-plus"></i>&nbsp;اضافة مشروع جديد </button><br><br>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='5'>
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0"> عنوان المشروع </th>
                                    <th class="border-bottom-0"> وصف المشروع</th>
                                    <th class="border-bottom-0"> نوع الخدمة </th>
                                    <th class="border-bottom-0"> العميل</th>


                                    <th class="border-bottom-0"></th>
                                    <th class="border-bottom-0"></th>
                                    <th class="border-bottom-0"></th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($projects as $project)
                                    <tr>
                                        <td>{{ $project->id }}</td>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ $project->description }}</td>
                                        <td>{{ $project->service->title }}</td>
                                        <td>{{ $project->client->name }}</td>
                                        <td data-toggle="modal" data-target="#img_show{{ $project->id }}"><i
                                                class="fa fa-eye" style="font-family: 'Cairo', sans-serif;">عرض صور المشروع</i>
                                        </td>
                                        <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#edit{{ $project->id }}" title="">
                                                <i class="fa fa-edit"></i></button></td>

                                        <td>

                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ $project->id }}" title="">
                                                <i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>

                                    <!--  edit model -->
                                    <div class="modal fade" id="edit{{ $project->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        تعديل البيانات
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>


                                                <form action="{{ route('projects.update', $project->id) }}"
                                                     method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    {{ method_field('PUT') }}

                                                    <div class="modal-body">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label"> وصف المشروع </label>
                                                                <textarea name="description" id="" class="form-control">{{ $project->description }}</textarea>
                                                                <input id="id" type="hidden" name="id"
                                                                    class="form-control" value="{{ $project->id }}">

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label"> عنوان المشروع </label>
                                                                <input type="text" name="title"
                                                                    value="{{ $project->title }}" class="form-control" />
                                                                <input id="id" type="hidden" name="id"
                                                                    class="form-control" value="{{ $project->id }}">
                                                            </div>

                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label"> نوع الخدمة </label>
                                                                <select name="service_id" class="form-control">
                                                                    @foreach ($services as $service)
                                                                        <option value="{{ $service->id }}"
                                                                            {{ $project->service_id == $service->id ? 'selected' : '' }}>
                                                                            {{ $service->title }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label"> العميل </label>
                                                                <select name="client_id" class="form-control">
                                                                    @foreach ($clients as $client)
                                                                        <option value="{{ $client->id }}"
                                                                            {{ $project->client_id == $client->id ? 'selected' : '' }}>
                                                                            {{ $client->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label"> ( اكثر من صورة )صور من
                                                                    المشروع </label>
                                                                <input type="file" name="images[]"
                                                                    value="{{ $project->image }}" class="form-control"
                                                                    id="images" multiple />

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <div id="preview" class="mt-2 d-flex flex-wrap"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer d-flex justify-content-start">
                                                        <button type="submit" class="btn btn-info btn-md ">تعديل</button>
                                                        <button type="button" class="btn btn-secondary btn-md"
                                                            data-dismiss="modal">اغلاق</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- end edit model -->


                                    <!--  img- show -->
                                    <div class="modal fade" id="img_show{{ $project->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">

                                                <div class="modal-body">

                                                    <div class="d-flex flex-wrap">
                                                        @foreach ($project->images as $img)
                                                            <img src="{{ asset('storage/' . $img->image) }}"
                                                                class="img-thumbnail m-1" width="150">
                                                        @endforeach
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- img show -->

                                    <!-- Deleted -->
                                    <div class="modal fade" id="delete{{ $project->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        حذف بيانات المشروع
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('projects.destroy', $project->id) }}"
                                                        method="post">
                                                        {{ method_field('Delete') }}
                                                        @csrf
                                                        هل تريد حذف بيانات المشروع ؟!
                                                        <input id="id" type="hidden" name="id"
                                                            class="form-control" value="{{ $project->id }}">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">اغلاق</button>
                                                            <button type="submit" class="btn btn-danger">حذف
                                                                البيانات</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <!-- add -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">اضافة عميل </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data"
                            autocomplete="">
                            {{ csrf_field() }}
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">

                                        <label class="control-label"> وصف المشروع </label>
                                        <textarea name="description" id="" required class="form-control"></textarea>
                                        @error('description')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="control-label"> عنوان المشروع </label>
                                        <input type="text" name="title" value="{{ old('title') }}" required class="form-control" />
                                        @error('title')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label"> نوع الخدمة </label>

                                        <select name="service_id" class="form-control">
                                            @foreach ($services as $service)
                                            <option  value="">اختر نوع الخدمة </option>
                                                <option value="{{ $service->id }}">{{ $service->title }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label"> العميل </label>

                                        <select name="client_id" class="form-control">
                                            @foreach ($clients as $client)
                                            <option value="">اختر العميل</option>
                                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label"> ( اكثر من صورة)صور من المشروع </label>
                                        <input type="file" name="images[]" class="form-control"  required id="images"
                                            multiple />
                                            @error('images')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                            @enderror

                                    </div>
                                    <div class="form-group col-md-6">
                                        <div id="preview" class="mt-2 d-flex flex-wrap"></div>
                                    </div>
                                </div>


                            </div>
                            <div class="modal-footer d-flex justify-content-start">
                                <button type="submit" class="btn btn-success btn-md">حفظ</button>
                                <button type="button" class="btn btn-secondary btn-md"
                                    data-dismiss="modal">اغلاق</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- Internal Select2 js-->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('images');
            const preview = document.getElementById('preview');

            input.addEventListener('change', function() {
                preview.innerHTML = ''; // مسح الصور السابقة
                const files = input.files;

                for (let i = 0; i < files.length; i++) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.width = '100px';
                        img.style.margin = '5px';
                        img.style.borderRadius = '5px';
                        preview.appendChild(img);
                    }
                    reader.readAsDataURL(files[i]);
                }
            });
        });
    </script>


    <script src="{{ URL::asset('admin_asset/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('admin_asset/js/table-data.js') }}"></script>
@endsection
