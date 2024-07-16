@extends('admin.master')

@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        {{--                        <h4 class="card-title">Add Category</h4>--}}
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Sender Name</th>
                                <th>Project Title</th>
                                <th>Comment</th>
                                <th>Updated At</th>
                                <th>Status</th>
                                {{--                                <th>Activation</th>--}}
                                <th style="width: 10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $comment)
                                <tr>
                                    <td>{{ $comment->id }}</td>
                                    <td>{{ $comment->name }}</td>
                                    <td>{{ $comment->project->title }}</td>
                                    <td>{{ substr($comment->comment,0,20) }}</td>
                                    <td>{{ $comment->updated_at }}</td>
                                    <td>
                                        <span
                                            class="badge badge-pill badge-{{ $comment->status == 0 ? 'danger' : 'success' }}">
                                            <i class="fas fa-{{ $comment->status == 0 ? 'eye-slash' : 'check-circle' }}"></i>
                                            {{ $comment->status == 0 ? 'Disabled' : 'Active' }}
                                        </span>
                                    </td>

                                    <td>
                                        <div class="form-button-action">

                                            <form action="{{ route('admin.comments.update', $comment->id) }}"
                                                  method="POST">
                                                @method('PUT')
                                                @csrf
                                                <input type="hidden" name="status"
                                                       value="{{ $comment->status == 0 ? 1 : 0 }}">
                                                <button type="submit" title="click to {{ $comment->status == 0 ? 'activate' : 'disable' }}" class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="{{ $comment->status == 0 ? 'activate' : 'disable' }}">
                                                    <i class="fas fa-lock{{ $comment->status == 0 ? '' : '-open' }}"></i>
                                                </button>
                                            </form>

                                            <a href="{{ route('admin.comments.show', $comment->id) }}" type="button"
                                               data-bs-toggle="tooltip" title="show"
                                               class="btn btn-link btn-primary btn-lg"
                                               data-original-title="show comment">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-link btn-danger"
                                                    data-bs-toggle="modal" title="delete"
                                                    data-original-title="Remove"
                                                    data-bs-target="#Modal{{$comment->id}}">
                                                <i class="fa fa-times"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="Modal{{$comment->id}}" tabindex="-1"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Are You
                                                                Sure?</h5>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">Are you sure that you want to delete
                                                            this
                                                            item?
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">
                                                                Close
                                                            </button>

                                                            <form
                                                                action="{{ route('admin.comments.destroy', $comment->id) }}"
                                                                method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger px-5">
                                                                    Yes, delete
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
