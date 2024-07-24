@extends('admin.master')

@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Update Service</div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <form action="{{ route('admin.services.update', $service->id) }}" method="POST"
                      enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="name"
                                           value="{{ old('title', $service->title) }}"
                                           placeholder="Enter Service Title"/>
                                </div>

                                <div class="form-group">
                                    <label for="image">Upload New Service Image</label>
                                    <input type="file" name="image" class="form-control" id="image"/>
                                </div>

                                <div class="form-group">
                                    <label for="short_description">Short Description</label>
                                    <textarea type="text" name="short_description" class="form-control" rows="5"
                                              id="short_description">{{ old('short_description', $service->short_description) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="image">Current Service Image</label><br/>
                                    <img src="{{ asset('upload/services/'. $service->image ) }}">
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="long_description">Long Description</label>
                                    <textarea type="text" name="long_description" class="form-control" rows="3"
                                              id="elm1">{{ old('long_description', $service->long_description) }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!--tinymce js-->
    <script src="{{ asset('dashboard/assets/js/plugin/tinymce/tinymce.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ asset('dashboard/assets/js/form-editor.init.js') }}"></script>
@endsection
