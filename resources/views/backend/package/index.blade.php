@extends('backend.layouts.app')
@section('title', 'Packages')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/library/datatables/media/css/jquery.dataTables.min.css') }}">
@endpush
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Packages</h1>
            </div>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-12"><a href="{{ route('packages.create') }}"
                                class="btn btn-info">Create
                                New Package</a></div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="table-1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>CV Limit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packages as $package)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $package->name }}</td>
                                        <td>{{ $package->price }}</td>
                                        <td>{{ $package->limit }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-sm btn-info mr-1"><i
                                                    class="fas fa-edit"></i></a>
                                            <a href="#">
                                                <form method="POST"
                                                    action="{{ route('packages.destroy', $package->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger mr-1"
                                                        onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/backend/library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script>
        $(function() {
            $("#table-1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
            });
        });
    </script>
@endpush
