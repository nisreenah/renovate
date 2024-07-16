@extends('admin.master')

@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Show Message Details
                        <button class="badge badge-{{ $comment->status == 0 ? 'danger' : 'primary' }}">
                            {{ $comment->status == 0 ? 'Disabled' : 'Active' }}
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label for="project">Project Title</label>
                                <input type="text" disabled class="form-control" id="project"
                                       value="{{ $comment->project->title }}"/>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label for="name">Sender Name</label>
                                <input type="text" disabled class="form-control" id="name"
                                       value="{{ $comment->name }}"/>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-8">
                            <div class="form-group">
                                <label for="email">Message</label>
                                <textarea rows="5" class="form-control">{{$comment->comment}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
