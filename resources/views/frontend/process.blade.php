@extends('frontend.layouts.app')
@section('title', 'Process')
@section('content')
    <div>
        <div class="process-modal-bg" id="chooseProcess">
            <div class="col-4 card m-auto"
                style="background-image: url('{{ asset('assets/frontend/img/home/Bride-Groom-bg2.webp') }}')">
                <div class="card-body">
                    <p>Register by creating a new Bio Data or, upload it</p>
                    <p>(নিচের দুইটি অপশন থেকে একটি সিলেক্ট করুন)</p>
                    <div class="d-flex justify-content-around">
                        <a id="haveCV" class="btn btn-sm btn-dark dark-shadow">I have Bio Data</a>
                        <a id="noCV" class="btn btn-sm btn-dark dark-shadow">I don't have Bio Data</a>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.modals.process_cv')
        @include('frontend.modals.process_register')
    </div>
@endsection

@push('js')
    <script>
        $('#chooseProcess').show()
        $('#processRegister').hide()
        $('#processCV').hide()
        // Show Register page
        $('#haveCV').on('click', function() {
            $('#chooseProcess').hide()
            $('#processRegister').show()
        })
        // Show CV page
        $('#noCV').on('click', function() {
            $('#chooseProcess').hide()
            $('#processCV').show()
        })

        // Other Professions
        $('#other_profession').hide();
        $('#father_other_profession').hide();
        $('#mother_other_profession').hide();

        $('#profession').on('change', function() {
            $('#other_profession').toggle($(this).find(':selected').text() === 'Others');
        });
        $('#father_profession').on('change', function() {
            $('#father_other_profession').toggle($(this).find(':selected').text() === 'Others');
        });
        $('#mother_profession').on('change', function() {
            $('#mother_other_profession').toggle($(this).find(':selected').text() === 'Others');
        });

    </script>
@endpush
