@extends('admin.master')

@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add New Member Team</div>
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
                <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="name">Member Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                           value="{{ old('name') }}" placeholder="Enter member Name"/>
                                </div>
                                <div class="form-group">
                                    <label for="position">Member Position</label>
                                    <input type="text" name="position" class="form-control" id="position"
                                           value="{{ old('position') }}" placeholder="Enter member Position"/>
                                </div>
                                <div class="form-group">
                                    <label for="description">Member Description</label>
                                    <textarea type="text" name="description" class="form-control" id="description"
                                              rows="3" placeholder="Enter Description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Member Image</label>
                                    <input type="file" name="image" class="form-control" id="image"/>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <h6>Social Media Links (optional)</h6>
                                <div class="form-group">
                                    <label for="linkedin">LinkedIn</label>
                                    <input type="url" name="linkedin" class="form-control" id="linkedin"
                                           placeholder="https://www.linkedin.com/" value="{{ old('linkedin') }}"/>
                                </div>
                                <div class="form-group">
                                    <label for="youtube">YouTube</label>
                                    <input type="url" name="youtube" class="form-control" id="youtube"
                                           placeholder="https://www.youtube.com" value="{{ old('youtube') }}"/>
                                </div>
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="url" name="facebook" class="form-control" id="facebook"
                                           placeholder="https://www.facebook.com/" value="{{ old('facebook') }}"/>
                                </div>
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="url" name="twitter" class="form-control" id="twitter"
                                           placeholder="https://www.twitter.com" value="{{ old('twitter') }}"/>
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
