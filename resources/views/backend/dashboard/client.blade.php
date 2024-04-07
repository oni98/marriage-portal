@extends('backend.layouts.app')
@section('title', 'Dashboard')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/library/datatables/media/css/jquery.dataTables.min.css') }}">
@endpush
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table id="table-1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Looking For</th>
                                    <th>Religion</th>
                                    <th>Profession</th>
                                    <th>WhatsApp</th>
                                    <th>Phone</th>
                                    <th>Package</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($applications))
                                    @foreach ($applications as $application)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $application->name }}</td>
                                            <td>{{ $application->looking_for }}</td>
                                            <td>{{ $application->religion?->name }}</td>
                                            <td>{{ $application->profession?->name }}</td>
                                            <td> <a href="https://wa.me/88{{ $application->whatsapp }}"
                                                    target="_blank">{{ $application->whatsapp }}</a> </td>
                                            <td>{{ $application->phone }}</td>
                                            <td>{{ $application->userPackage?->package?->name }}</td>
                                            <td class="d-flex">
                                                </a>
                                                <a href="#" class="btn btn-sm btn-success mr-1" title="View Details"
                                                    data-toggle="modal" data-target="#view-modal-{{ $application->id }}"><i
                                                        class="fas fa-eye"></i>
                                                </a>
                                                <a href="#">
                                                    <form method="POST"
                                                        action="{{ route('applications.destroy', $application->id) }}">
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
                                @else
                                    <tr class="text-center">
                                        <td colspan="9">No CV available for you</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <!-- Modal -->
    @include('backend.application.details_modal')
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
