<div class="modal fade" tabindex="-1" role="dialog" id="assignPackage">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('user-package.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Assign Package</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <strong>Current Package: </strong> <span class="package"></span>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="package_id" class="font-weight-bold">Package<span
                                        class="text-danger">*</span></label>
                                <select class="form-control select2" name="package_id" id="select2">
                                    <option value="" selected>No Package</option>
                                    @foreach ($packages as $package)
                                        <option value="{{ $package->id }}">{{ $package->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="application_id">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="submit" class="btn btn-primary">Assign</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
