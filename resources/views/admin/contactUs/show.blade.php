@extends('admin.master')

@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Show message details</h4>
                        <a href="{{ route('admin.contacts.index') }}" class="btn btn-primary btn-round ms-auto">
                            <i class="fa fa-plus"></i>
                            All Messages
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">

                            <div class="form-group">
                                <label for="name">Sender Name</label>
                                <input type="text" class="form-control" value="{{ $contact->name }}"/>
                            </div>

                            <div class="form-group">
                                <label for="email">Sender Email</label>
                                <input type="email" class="form-control" value="{{ $contact->email }}"/>
                            </div>

                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="message">Sender Message</label>
                                <textarea class="form-control" rows="6">
                                   {!! $contact->message !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
