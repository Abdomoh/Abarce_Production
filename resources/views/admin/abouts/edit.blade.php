@extends('layouts.master2')
@section('css')
@endsection
@section('page-header')
    <br>
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">معلومات الشركة </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    ااضافة
                    معلومات </span>
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
                                class="fas fa-edit"></i>&nbsp;تعديل بيانات الشركة </button><br><br>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('abouts.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="repeater-add">
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>  العنوان الرئيسي : <span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control" id="inputEmail5"
                                        value="{{ $about->title }}">
                                    @error('title')
                                        <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label> الصورة  : <span class="text-danger">*</span></label>
                                    <img src="{{ asset('storage/'.$about->image) }}" width="50" class="mb-2">
                                    <input type="file" name="image" class="form-control" id="inputEmail5"
                                        value="{{ $about->image }}">
                                    @error('image')
                                        <span class="form-text text-danger">{{ $message }}</s>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label> وصف من نحن   : <span class="text-danger">*</span></label>

                                        <textarea name="sub_title" id="" class="form-control">{{ $about->sub_title }}</textarea>
                                    @error('sub_title')
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
