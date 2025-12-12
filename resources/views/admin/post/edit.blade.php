@extends('layouts.admin')

@section('admin')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Update Post</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Post</a></li>
                            <li class="breadcrumb-item active">Update Post</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Update Post</h4>
                        <p class="card-title-desc"></p>
                        <form method="POST" action="{{ route('posts.update', $data->id) }}" enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Post Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="blog_category_id" id="example-text-input">
                                        @foreach($category as $cat)
                                            <option value="{{ $cat->id }}" {{ $cat->id == $data->project_category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Post Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="title" value="{{ $data->title }}" placeholder="Post Title" id="example-text-input">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Post Short Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" type="text" name="short_desc" placeholder="Post Short Description" id="example-text-input">
                                        {{ $data->short_desc }}
                                    </textarea>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Post Long Description</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" type="text" name="long_desc" placeholder="Post Long Description" >
                                        {{ $data->long_desc }}
                                    </textarea>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Author</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="author" value="{{ $data->author }}" placeholder="Author" id="example-text-input">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Post Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="image" id="example-text-input">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img src="{{ asset($data->image) }}" height="50">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input class="btn btn-primary" type="submit" value="Update Post">
                                </div>
                            </div>
                            <!-- end row -->
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->
@endsection
