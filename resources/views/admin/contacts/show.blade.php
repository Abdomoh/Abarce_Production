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
               رسالة طلب العميل
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
                                class="fas fa-list"></i>&nbsp; رسالة طلب العميل  </button><br><br>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <a href="#" class="btn btn-info">{{$contact->full_name}}</a>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">{{ $contact->email }}</h5>
                          <p class="card-text">{{ $contact->message }}.</p>
                          {{ $contact->created_at->format('y-m-d') }}
                        </div>
                      </div>
                </div>
            </div>

            <!-- add -->
        @endsection
        @section('js')
            <!-- Internal Select2 js-->


            <!--Internal  Datatable js -->
            <script src="{{ URL::asset('admin/js/table-data.js') }}"></script>
        @endsection
