@extends('admin.master')

@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">General Company Info</h4>
                        <a href="{{ route('admin.aboutUs.edit', $about->id) }}" class="btn btn-primary btn-round ms-auto">
                            <i class="fa fa-edit"></i>
                            Update General Company Info
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-hover">
                            <tbody>
                            <tr>
                                <th class="table-primary">Company Name</th>
                                <td>{{ $about->name }}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">Phone</th>
                                <td>{{ $about->phone }}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">Email</th>
                                <td>{{ $about->email }}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">Address</th>
                                <td>{{ $about->address }}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">Description</th>
                                <td>{{ substr($about->description, 0, 110) }}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">Our Story</th>
                                <td>{!! substr($about->our_story, 0, 110) !!}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">LinkedIn Link</th>
                                <td>{{ $about->linkedin }}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">Instagram Link</th>
                                <td>{{ $about->instagram }}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">Facebook Link</th>
                                <td>{{ $about->facebook }}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">Twitter Link</th>
                                <td>{{ $about->twitter }}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">Snapchat Link</th>
                                <td>{{ $about->snapchat }}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">Tiktok Link</th>
                                <td>{{ $about->tiktok }}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">Longitude</th>
                                <td>{{ $about->long }}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">Latitude</th>
                                <td>{{ $about->lat }}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">Logo</th>
                                <td><img width="150" src="{{ asset('upload/aboutUs/'. $about->logo ) }}"></td>
                            </tr>
                            <tr>
                                <th class="table-primary">Header Image</th>
                                <td><img width="150" src="{{ asset('upload/aboutUs/'. $about->header_image ) }}"></td>
                            </tr>
                            <tr>
                                <th class="table-primary">Image One</th>
                                <td><img width="150" src="{{ asset('upload/aboutUs/'. $about->image_one ) }}"></td>
                            </tr>
                            <tr>
                                <th class="table-primary">Image Two</th>
                                <td><img width="150" src="{{ asset('upload/aboutUs/'. $about->image_two ) }}"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
