@extends('backend.layouts.app')

@section('title', 'Application List')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/library/datatables/media/css/jquery.dataTables.min.css') }}">
@endpush
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Applications</h1>
            </div>
            <div class="container-fluid">
                <div class="card">
                    {{-- <div class="card-header row">
                        <div class="col-md-12"><a href="{{ route('users.create') }}" class="btn btn-info">Create New User</a></div>
                    </div> --}}
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        @include('backend.partials.message')
                        <table id="table-1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Looking For</th>
                                    <th>Name</th>
                                    <th>Religion</th>
                                    <th>Profession</th>
                                    <th>WhatsApp</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($applications as $application)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $application->looking_for }}</td>
                                        <td>{{ $application->name }}</td>
                                        <td>{{ $application->religion->name }}</td>
                                        <td>{{ $application->profession->name }}</td>
                                        <td> <a href="https://wa.me/88{{ $application->whatsapp }}" target="_blank">{{ $application->whatsapp }}</a> </td>
                                        <td>{{ $application->phone }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-sm btn-danger" href="" class="nav-link" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $application->id }}').submit();">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <form id="delete-form-{{ $application->id }}"
                                                action="" method="POST"
                                                style="display: none;">
                                                @method('DELETE')
                                                @csrf
                                            </form>
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
                "lengthChange": false,
                "autoWidth": true,
                "ordering": false,
            });
        });
    </script>
@endpush
