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
                        <h5 class="card-title">Create A New Package</h5>

                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('packages.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter a Package Name">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" name="price" id="price"
                                    placeholder="Enter price">
                            </div>
                            <div class="form-group">
                                <label for="limit">CV Limit</label>
                                <input type="text" class="form-control" name="limit" id="limit"
                                    placeholder="Enter cv show limit">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">CREATE</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
