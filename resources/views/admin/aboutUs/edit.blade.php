@extends('admin.master')

@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
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
                <div class="card-body">
                    <form action="{{ route('admin.aboutUs.update', $about->id) }}" class="form-horizontal" method="POST"
                          enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-hover">
                                <tbody>
                                <tr>
                                    <th class="table-primary">Company Name</th>
                                    <td>
                                        <input type="text" name="name" class="form-control" id="name"
                                               value="{{ old('name', $about->name) }}"
                                               placeholder="Enter Company Name"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="table-primary">Phone</th>
                                    <td>
                                        <input type="tel" name="phone" class="form-control" id="phone"
                                               value="{{ old('phone', $about->phone) }}"
                                               placeholder="+123 456 789 33"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="table-primary">Email</th>
                                    <td>
                                        <input type="email" name="email" class="form-control" id="email"
                                               value="{{ old('email', $about->email) }}"
                                               placeholder="Enter Company Email"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="table-primary">Address</th>
                                    <td>
                                        <input type="text" name="address" class="form-control" id="address"
                                               value="{{ old('address', $about->address) }}"
                                               placeholder="Enter Company Address"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="table-primary">Description</th>
                                    <td>
                                        <textarea type="text" name="description" class="form-control"
                                                  rows="3">{{ old('description', $about->description) }}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="table-primary">Our Story</th>
                                    <td>
                                         <textarea type="text" name="our_story" class="form-control"
                                                   id="elm1">{{ old('our_story', $about->our_story) }}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="table-primary">LinkedIn Link</th>
                                    <td>
                                        <input type="url" name="linkedin" class="form-control" id="linkedin"
                                               value="{{ old('linkedin', $about->linkedin) }}"
                                               placeholder="Enter LikedIn Link"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="table-primary">Instagram Link</th>
                                    <td>
                                        <input type="url" name="instagram" class="form-control" id="instagram"
                                               value="{{ old('instagram', $about->instagram) }}"
                                               placeholder="Enter Instagram Link"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="table-primary">Facebook Link</th>
                                    <td>
                                        <input type="url" name="facebook" class="form-control" id="facebook"
                                               value="{{ old('facebook', $about->facebook) }}"
                                               placeholder="Enter Facebook Link"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="table-primary">Twitter Link</th>
                                    <td>
                                        <input type="url" name="twitter" class="form-control" id="twitter"
                                               value="{{ old('twitter', $about->twitter) }}"
                                               placeholder="Enter Twitter Link"/>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="table-primary">Tiktok Link</th>
                                    <td>
                                        <input type="url" name="tiktok" class="form-control" id="tiktok"
                                               value="{{ old('tiktok', $about->tiktok) }}"
                                               placeholder="Enter Tiktok Link"/>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="table-primary">Snapchat Link</th>
                                    <td>
                                        <input type="url" name="snapchat" class="form-control" id="snapchat"
                                               value="{{ old('snapchat', $about->snapchat) }}"
                                               placeholder="Enter Snapchat Link"/>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="table-primary">Longitude</th>
                                    <td>
                                        <input type="text" name="long" class="form-control" id="long"
                                               value="{{ old('long', $about->long) }}"
                                               placeholder="Enter Longitude"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="table-primary">Latitude</th>
                                    <td>
                                        <input type="text" name="lat" class="form-control" id="lat"
                                               value="{{ old('lat', $about->lat) }}"
                                               placeholder="Enter Latitude"/>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="table-primary">Logo</th>
                                    <td>
                                        <div class="mb-3">
                                            <img width="100" src="{{ asset('upload/aboutUs/'. $about->logo ) }}">
                                        </div>
                                        <input type="file" name="logo" class="form-control" id="logo"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="table-primary">Header Image</th>
                                    <td>
                                        <div class="mb-3">
                                            <img width="300"
                                                 src="{{ asset('upload/aboutUs/'. $about->header_image ) }}">
                                        </div>
                                        <input type="file" name="header_image" class="form-control" id="header_image"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="table-primary">Image One</th>
                                    <td>
                                        <div class="mb-3">
                                            <img width="300" src="{{ asset('upload/aboutUs/'. $about->image_one ) }}">
                                        </div>
                                        <input type="file" name="image_one" class="form-control" id="image_one"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="table-primary">Image Two</th>
                                    <td>
                                        <div class="mb-3">
                                            <img width="300" src="{{ asset('upload/aboutUs/'. $about->image_two ) }}">
                                        </div>
                                        <input type="file" name="image_two" class="form-control" id="image_two"/>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-info" type="submit">Update Info</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
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
