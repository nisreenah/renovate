@extends('admin.master')

@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">All Members</h4>
                        <a href="{{ route('admin.teams.create') }}" class="btn btn-primary btn-round ms-auto">
                            <i class="fa fa-plus"></i>
                            Add Member
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Member Name</th>
                                <th>Position</th>
                                <th>Updated At</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $team)
                                <tr>
                                    <td>{{ $team->id }}</td>
                                    <td>
                                        <img width="75px" src="{{ asset('upload/teams/'. $team->image ) }}">
                                    </td>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $team->position }}</td>
                                    <td>{{ $team->updated_at }}</td>
                                    <td>
                                        <div class="form-button-action">
                                            <a href="{{ route('admin.teams.edit', $team->id) }}" type="button"
                                               data-bs-toggle="tooltip" title="edit"
                                               class="btn btn-link btn-primary btn-lg"
                                               data-original-title="Edit Task">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-link btn-danger"
                                                    data-bs-toggle="modal" title="delete"
                                                    data-original-title="Remove"
                                                    data-bs-target="#teamModal{{$team->id}}">
                                                <i class="fa fa-times"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="teamModal{{$team->id}}" tabindex="-1"
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

                                                            <form action="{{ route('admin.teams.destroy', $team->id) }}"
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
