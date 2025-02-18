@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Web Settings</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-xl-12">
                    <x-error-message :message="$errors->first('message')" />
                    <x-success-message :message="session('success')" />

                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('web-settings.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                        <div class="mb-3">
                                            <x-form-input type="file" name="web_icon" id="" class="form-control" label="Choose icon" />
                                                
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            @if (setting('web_icon'))
                                                                <img src="{{ asset(setting('web_icon')) }}" id="preview-web_icon"
                                                                class="img-preview img-fluid mt-2">
                                                                @else
                                                                <img src="" id="preview-web_icon" class="img-fluid mt-2 w-150" hidden>
                                                            @endif
                                                            
                                                        </div>
                                                    </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                        <div class="mb-3">
                                            <x-form-input type="file" name="web_favicon" id="web_favicon" class="form-control" label="Choose favicon" />
                                                
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            @if (setting('web_favicon'))
                                                                <img src="{{ asset(setting('web_favicon')) }}" id="preview-web_favicon"
                                                                class="img-preview img-fluid mt-2">
                                                                @else
                                                                <img src="" id="preview-web_favicon" class="img-fluid mt-2 w-150" hidden>
                                                            @endif
                                                            
                                                        </div>
                                                    </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                        <div class="mb-3">
                                            <x-form-input name="web_site_title" value="{{ setting('web_site_title') }}" label="web site title" placeholder="Enter web sit title" required="true" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                        <div class="mb-3">
                                            <x-form-input name="web_contact_no" value="{{ setting('web_contact_no') }}" label="web contact number" placeholder="Enter web contact number" required="true" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                        <div class="mb-3">
                                            <x-form-input name="web_contact_email" value="{{ setting('web_contact_email') }}" label="web contact email" placeholder="Enter web contact email" required="true" />
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-md">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-include-plugins :plugins="['imagePreview']"></x-include-plugins>
@endsection