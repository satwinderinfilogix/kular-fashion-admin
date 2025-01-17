@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">View Article</h4>

                        <div class="page-title-right">
                            <a href="{{ route('products.index') }}" class="btn btn-primary"><i class="bx bx-arrow-back"></i>
                                Back to products</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-xl-4">
                                    <img src="{{ asset($product->image) }}" alt=""
                                        class="img-fluid mx-auto d-block w-100 product-preview-image"
                                        onerror="this.onerror=null; this.src='{{ asset(setting('default_product_image')) }}';">
                                </div>

                                <div class="col-xl-8">
                                    <div class="mt-4 mt-xl-3">
                                        <h4 class="mt-1 mb-2">Article Code: {{ $product->article_code }}</h4>
                                        <p class="text-muted mb-2">{{ $product->short_description }}</p>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div>
                                                    <a href="javascript: void(0);" class="text-primary">{{ $product->brand->name }}</a>
                                                    > {{ $product->productType->product_type_name }}
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="mb-2">Manufacture Code: {{ $product->manufacture_code }}</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="mb-2">In Date: {{ $product->in_date }}</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="mb-3">Price: <b>£{{ $product->mrp }}</b></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="mt-4">
                                <h5 class="mb-3">Quantities & Sizes:</h5>

                                <div class="table-responsive">
                                    <table class="table mb-0 table-bordered">
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="p-1">Size</th>
                                                @foreach ($product->sizes as $size)
                                                <th class="p-1">{{ $size->sizeDetail->size }}</th>
                                                @endforeach
                                            </tr>

                                            @foreach ($product->colors as $color)
                                            <tr>
                                                <th class="d-flex p-1">
                                                    <div class="me-1 d-color-code" style="background: {{ $color->colorDetail->ui_color_code }}"></div>
                                                    <h6 class="m-0">{{ $color->colorDetail->color_name }} ({{ $color->colorDetail->color_code }})</h6>
                                                </th>
                                                @foreach ($product->sizes as $size)
                                                    <td class="p-1">{{ $size->quantity($color->id) }}</td>
                                                @endforeach
                                            </tr>
                                            @endforeach

                                            <tr>
                                                <th scope="row" class="p-1">MRP</th>
                                                @foreach ($product->sizes as $size)
                                                <td class="p-1">£{{ $size->mrp }}</td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end Specifications -->

                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div>
    </div>
@endsection
