@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Update Product Type</h4>

                        <div class="page-title-right">
                            <a href="{{ route('product-types.index') }}" class="btn btn-primary"><i class="bx bx-arrow-back"></i> Back to all product types</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <x-error-message :message="$errors->first('message')" />
                    <x-success-message :message="session('success')" />

                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('product-types.update', $productType->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @include('product-types.form')
                            </form>    
                        </div>    
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <x-include-plugins :plugins="['chosen']"></x-include-plugins>
    <script>
        $(function(){
            var selectedDeparments =  @json($selectedDeparments);
            $('#department_id').val(selectedDeparments).trigger('chosen:updated');
        });
    </script> 
@endsection
   