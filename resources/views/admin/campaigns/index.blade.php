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
                <h4 class="content-title mb-0 my-auto">حملاتنا </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ ااضافة
                    حملة</span>
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
                                class="fas fa-plus"></i>&nbsp;اضافة حملة جديد </button><br><br>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='5'>
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0"> عنوان الحملة </th>
                                    <th class="border-bottom-0"> وصف الحملة</th>
                                    <th class="border-bottom-0"> نوع الخدمة </th>
                                    <th class="border-bottom-0"> العميل</th>

                                    <th class="border-bottom-0"> عدد المشاهدات</th>

                                    <th class="border-bottom-0"> الصور </th>



                                    <th class="border-bottom-0"></th>
                                    <th class="border-bottom-0"></th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($campaings as $campaing)
                                    <tr>


                                        <td>{{ $campaing->id }}</td>
                                        <td>{{ $campaing->title }}</td>
                                        <td>{{ $campaing->description }}</td>
                                        <td>{{ $campaing->type }}</td>
                                        <td>{{ $campaing->client_name }}</td>

                                        <td>{{ $campaing->ads_count }}</td>
                                        <td data-toggle="modal" data-target="#img_show{{ $campaing->id }}"><i
                                                class="fa fa-eye" style="font-family: 'Cairo', sans-serif;">عرض صور
                                                المشروع</i>
                                        </td>
                                        <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#edit{{ $campaing->id }}" title="">
                                                <i class="fa fa-edit"></i></button></td>

                                        <td>

                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ $campaing->id }}" title="">
                                                <i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>

                                    <!--  edit model -->
                                    <div class="modal fade" id="edit{{ $campaing->id }}" tabindex="-1" role="dialog"
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


                                                <form action="{{ route('campaigns.update', $campaing->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    {{ method_field('PUT') }}

                                                    <div class="modal-body">

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label"> عنوان الحملة </label>
                                                                <input type="text" name="title"
                                                                    value="{{ old('title', $campaing->title) }}" required
                                                                    class="form-control" />
                                                                <input type="hidden" name="id" class="form-control"
                                                                    value="{{ $campaing->id }}">

                                                                @error('title')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label"> نوع الحملة </label>
                                                                <input type="text" name="type"
                                                                    value="{{ old('type', $campaing->type) }}" required
                                                                    class="form-control"
                                                                    placeholder="رقمية,اعلانية,ميدانية" />
                                                                <input type="hidden" name="id" class="form-control"
                                                                    value="{{ $campaing->id }}">

                                                                @error('type')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">

                                                                <label class="control-label"> وصف الحملة </label>
                                                                <textarea name="description" id="" required class="form-control">{{ $campaing->description }}</textarea>
                                                                <input type="hidden" name="id" class="form-control"
                                                                    value="{{ $campaing->id }}">
                                                                @error('description')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror

                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label class="control-label"> ( اكثر من صورة)صور من الحملة
                                                                </label>
                                                                <input type="file" name="images[]"
                                                                    class="form-control"  id="images" multiple
                                                                    value="{{ $campaing->image }}" />
                                                                <input type="hidden" name="id" class="form-control"
                                                                    value="{{ $campaing->id }}">
                                                                @error('images')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror

                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label"> اسم العميل(اختياري) </label>
                                                                <input type="text" name="client_name"
                                                                    value="{{ old('client_name', $campaing->client_name) }}"
                                                                    class="form-control" />
                                                                <input type="hidden" name="id" class="form-control"
                                                                    value="{{ $campaing->id }}">
                                                                @error('client_name')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label"> قطاع العميل (اختياري)
                                                                </label>
                                                                <input type="text" name="client_industry"
                                                                    value="{{ old('client_industry', $campaing->client_industry) }}"
                                                                    class="form-control" />
                                                                <input type="hidden" name="id" class="form-control"
                                                                    value="{{ $campaing->id }}">
                                                                @error('client_industry')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label"> عدد المشاهدات</label>
                                                                <input type="number" name="ads_count"
                                                                    value="{{ old('ads_count', $campaing->ads_count) }}"
                                                                    class="form-control" />
                                                                <input type="hidden" name="id" class="form-control"
                                                                    value="{{ $campaing->id }}">
                                                                @error('ads_count')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">عدد الايام</label>
                                                                <input type="number" name="duration_days"
                                                                    value="{{ old('duration_days', $campaing->duration_days) }}"
                                                                    class="form-control" placeholder="عدد الايام" />
                                                                <input type="hidden" name="id" class="form-control"
                                                                    value="{{ $campaing->id }}">
                                                                @error('duration_days')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">عدد المنصات</label>
                                                                <input type="number" name="platforms_count"
                                                                    value="{{ old('platforms_count', $campaing->platforms_count) }}"
                                                                    class="form-control" placeholder="عدد المنصات" />
                                                                <input type="hidden" name="id" class="form-control"
                                                                    value="{{ $campaing->id }}">
                                                                @error('platforms_count')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label"> النتائئج المحققة</label>
                                                                <textarea name="results[]" id="" rows="3" class="form-control">{{ isset($campaing) ? implode("\n", $campaing->results ?? []) : '' }}</textarea>

                                                                <input type="hidden" name="id" class="form-control"
                                                                    value="{{ $campaing->id }}">
                                                                @error('results')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror

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
                                    <div class="modal fade" id="img_show{{ $campaing->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">

                                                <div class="modal-body">

                                                    <div class="d-flex flex-wrap">
                                                        @foreach ($campaing->images as $img)
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
                                    <div class="modal fade" id="delete{{ $campaing->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        حذف بيانات الحملة
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('campaigns.destroy', $campaing->id) }}"
                                                        method="post">
                                                        {{ method_field('Delete') }}
                                                        @csrf
                                                        هل تريد حذف بيانات الحملة ؟!
                                                        <input id="id" type="hidden" name="id"
                                                            class="form-control" value="{{ $campaing->id }}">
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
                            <h5 class="modal-title" id="exampleModalLabel">اضافة حملة </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('campaigns.store') }}" method="post" enctype="multipart/form-data"
                            autocomplete="">
                            {{ csrf_field() }}
                            <div class="modal-body">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label"> عنوان الحملة </label>
                                        <input type="text" name="title" value="{{ old('title') }}" required
                                            class="form-control" />
                                        @error('title')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label"> نوع الحملة </label>
                                        <input type="text" name="type" value="{{ old('type') }}" required
                                            class="form-control" placeholder="رقمية,اعلانية,ميدانية" />
                                        @error('type')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">

                                        <label class="control-label"> وصف الحملة </label>
                                        <textarea name="description" id="" required class="form-control"></textarea>
                                        @error('description')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="control-label"> ( اكثر من صورة)صور من الحملة </label>
                                        <input type="file" name="images[]" class="form-control" required
                                            id="images" multiple />
                                        @error('images')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label"> اسم العميل(اختياري) </label>
                                        <input type="text" name="client_name" value="{{ old('client_name') }}"
                                            class="form-control" />
                                        @error('client_name')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label"> قطاع العميل (اختياري) </label>
                                        <input type="text" name="client_industry"
                                            value="{{ old('client_industry') }}" class="form-control" />
                                        @error('client_industry')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label"> عدد المشاهدات</label>
                                        <input type="number" name="ads_count" value="{{ old('ads_count') }}"
                                            class="form-control" />
                                        @error('ads_count')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label">عدد الايام</label>
                                        <input type="number" name="duration_days" value="{{ old('duration_days') }}"
                                            class="form-control" placeholder="عدد الايام" />
                                        @error('duration_days')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label">عدد المنصات</label>
                                        <input type="number" name="platforms_count"
                                            value="{{ old('platforms_count') }}" class="form-control"
                                            placeholder="عدد المنصات" />
                                        @error('platforms_count')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label"> النتائئج المحققة</label>
                                        <textarea name="results[]" id="" rows="3"
                                            {{ isset($campaing) ? implode("\n", $campaing->results ?? []) : '' }} class="form-control"></textarea>
                                        @error('results')
                                            <span class="form-text text-danger">{{ $message }}</span>
                                        @enderror

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
