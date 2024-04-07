@extends('backend.layouts.app')
@section('title', 'Packages')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Packages</h1>
            </div>
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h5 class="card-title">Edit Package</h5>

                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('packages.update', $package->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter Package Name" value="{{ $package->name }}">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" name="price" id="price"
                                    placeholder="Enter price" value="{{ $package->price }}">
                            </div>
                            <div class="form-group">
                                <label for="limit">CV Limit</label>
                                <input type="text" class="form-control" name="limit" id="limit"
                                    placeholder="Enter cv show limit" value="{{ $package->limit }}">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">UPDATE</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
