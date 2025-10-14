@extends('layouts.master2')
@section('css')
@endsection
@section('page-header')
    <br>
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> الاعدادات العامة </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    اعدادات عامة
                     </span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    {{-- @include('errors._message')
@include('errors.deletedone') --}}
    <!-- row -->
    <div class="row">

        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i
                                class="fas fa-edit"></i>&nbsp;تعديل بيانات الاعدادات </button><br><br>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('seetings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="repeater-add">
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label> اسم الشركة : <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" id="inputEmail5"
                                        value="{{ $seeting->name }}">
                                    @error('name')
                                        <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label> شعار الشركة : <span class="text-danger">*</span></label>
                                    <img src="{{ asset('storage/'.$seeting->logo) }}" width="50" class="mb-2">
                                    <input type="file" name="logo" class="form-control" id="inputEmail5"
                                        value="{{ $seeting->logo }}">
                                    @error('logo')
                                        <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label> الهاتف : <span class="text-danger">*</span></label>
                                    <input type="text" name="phone" class="form-control" id="inputEmail5"
                                        value="{{ $seeting->phone }}">
                                    @error('phone')
                                        <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label> رابط الواتس : <span class="text-danger">*</span></label>
                                    <input type="text" name="whatsapp" class="form-control" id="inputEmail5"
                                        value="{{ $seeting->whatsapp }}">
                                    @error('whatsapp')
                                        <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label> رابط الفيس : <span class="text-danger">*</span></label>
                                    <input type="text" name="facebook" class="form-control" id="inputEmail5"
                                        value="{{ $seeting->facebook }}">
                                    @error('facebook')
                                        <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label> رابط الانستغرام : <span class="text-danger">*</span></label>
                                    <input type="text" name="Instagram" class="form-control" id="inputEmail5"
                                        value="{{ $seeting->instagram }}">
                                    @error('Instagram')
                                        <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label> الايميل : <span class="text-danger">*</span></label>
                                    <input type="text" name="email" class="form-control" id="inputEmail5"
                                        value="{{ $seeting->email }}">
                                    @error('email')
                                        <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label> رابط تويتر : <span class="text-danger">*</span></label>
                                    <input type="text" name="tweeter" class="form-control" id="inputEmail5"
                                        value="{{ $seeting->tweeter }}">
                                    @error('tweeter')
                                        <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>



                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label> العنوان : <span class="text-danger">*</span></label>
                                    <input type="text" name="address" class="form-control" id="inputEmail5"
                                        value="{{ $seeting->address }}">
                                    @error('address')
                                        <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>




                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <button type="submit" class="btn btn-info x-small" value="Add shipping Address"> <i
                                            class="fa fa-plus"></i> تعديل</button>
                                    <button type="reset" class="btn btn-warning x-small" value="Add shipping Address"><i
                                            class="fa fa-share"></i>مسح </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <!-- add -->
        @endsection
        @section('js')
            <!-- Internal Select2 js-->


            <!--Internal  Datatable js -->
            <script src="{{ URL::asset('admin/js/table-data.js') }}"></script>
        @endsection
