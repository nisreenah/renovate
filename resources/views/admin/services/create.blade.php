@extends('admin.master')

@section('styles')
    <!-- TinyMCE -->
    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/vb0lux2n7aguuih12eudkbyn5fzq6nvzekryez49o2iiue9b/tinymce/7/tinymce.min.js"
            referrerpolicy="origin"></script>

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>
        tinymce.init({
            selector: 'textarea#tiny',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                {value: 'First.Name', title: 'First Name'},
                {value: 'Email', title: 'Email'},
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>
@endsection

@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add New Service</div>
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
                <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="name"
                                           value="{{ old('title') }}" placeholder="Enter Service Title"/>
                                </div>

                                <div class="form-group">
                                    <label for="image">Service Image</label>
                                    <input type="file" name="image" class="form-control" id="image"/>
                                </div>

                                <div class="form-group">
                                    <label for="short_description">Short Description</label>
                                    <textarea type="text" name="short_description" class="form-control"
                                              rows="5" id="short_description">{{ old('short_description') }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="long_description">Long Description</label>
                                    <textarea type="text" name="long_description" class="form-control"
                                              rows="3" id="tiny">{{ old('long_description') }}</textarea>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
@endsection
