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
                <h4 class="content-title mb-0 my-auto">جميع اراء العملاء </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">
                    جميع اراء العملاء
                </span>
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
                                class="fas fa-list"></i>&nbsp; اراء العملاء </button><br><br>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='5'>
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">اسم العميل </th>
                                    <th class="border-bottom-0">البريد</th>
                                    <th class="border-bottom-0">رقم الهاتف</th>
                                    <th class="border-bottom-0">نوع الخدمة</th>
                                    <th class="border-bottom-0">رسالة الطلب</th>

                                    <th class="border-bottom-0"></th>
                                    <th class="border-bottom-0"></th>


                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->full_name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->contact }}</td>
                                        <td>{{Str::limit( $contact->message,50) }}</td>
                                        <td data-toggle="modal" data-target="#detels_message{{$contact->id}}"><i class="fa fa-eye">view</i>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ $contact->id }}" title="">
                                                <i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>



                                    <!-- detels message with client -->

                                    <div class="modal fade" id="detels_message{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                       رسالة العميل
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="card-body">
                                                        <div class="card">
                                                            <div class="card-header">
                                                           <p>{{ $contact->created_at->format('y-m-d') }}</p>
                                                            </div>
                                                            <div class="card-body">

                                                              <p class="card-text">{{ $contact->message }}.</p>

                                                            </div>
                                                          </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer d-flex justify-content-start" >

                                                <button type="button" class="btn btn-secondary btn-md"
                                                    data-dismiss="modal">اغلاق</button>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Deleted -->
                                    <div class="modal fade" id="delete{{ $contact->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        حذف بيانات رسالة العميل
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('contacts.destroy', $contact->id) }}"
                                                        method="post">
                                                        {{ method_field('Delete') }}
                                                        @csrf
                                                        هل تريد حذف بيانات الرسالة ؟!
                                                        <input id="id" type="hidden" name="id"
                                                            class="form-control" value="{{ $contact->id }}">
                                                        <div class="modal-footer d-flex justify-content-start">
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
        @endsection
        @section('js')
            <!-- Internal Select2 js-->


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
