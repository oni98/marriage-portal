@foreach ($applications as $application)
<div class="modal fade" id="view-modal-{{$application->id }}" tabindex="-1" role="dialog" aria-labelledby="view-modal-{{$application->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary2">{{$application->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p> <strong>Profile Created By: </strong> {{$application->profile_created_by }}</p>
                <p> <strong>Looking For: </strong> {{$application->looking_for }}</p>
                <p> <strong>Name: </strong> {{$application->name }}</p>
                <p> <strong>SurName: </strong> {{$application->surname }}</p>
                <p> <strong>Religion: </strong> {{$application->religion->name }}</p>
                <p> <strong>Caste: </strong> {{$application->caste }}</p>
                <p> <strong>Year of Birth: </strong> {{$application->dob }}</p>
                <p> <strong>Marital Status: </strong> {{$application->maritalStatus->name }}</p>
                <p> <strong>Education System: </strong> {{$application->education_system }}</p>
                <p> <strong>Highest Education: </strong> {{$application->education->name}}</p>
                <p> <strong>SSC/Dakhil/Equivalent Year: </strong> {{$application->ssc_year }}</p>

                <p> <strong>Bride/Groom's Profession: </strong> {{ ($professions[$application->profession_id - 1]->name != 'Others') ? $professions[$application->profession_id - 1]->name : $application->other_profession }}</p>
                <p> <strong>Father's Profession: </strong> {{ ($professions[$application->father_profession - 1]->name != 'Others') ? $professions[$application->father_profession - 1]->name : $application->father_other_profession }}</p>
                <p> <strong>Mother's Profession: </strong> {{ ($professions[$application->mother_profession - 1]->name != 'Others') ? $professions[$application->mother_profession - 1]->name : $application->mother_other_profession }} </p>
                
                <p> <strong>Height: </strong> {{$application->height }}</p>
                <p> <strong>Father's District: </strong> {{$districts[$application->father_district - 1]->name }}</p>
                <p> <strong>Mother's District: </strong> {{$districts[$application->mother_district - 1]->name }}</p>
                <p> <strong>Present District: </strong> {{$districts[$application->present_district - 1]->name }}</p>
                <p> <strong>Area: </strong> {{$application->area }}</p>
                <p> <strong>Email Address: </strong> {{$application->email }}</p>
                <p> <strong>WhatsApp: </strong> <a href="https://wa.me/88{{$application->whatsapp }}" target="_blank"> {{$application->whatsapp }}</a></p>
                <p> <strong>Bride/Groom Phone Number: </strong> {{$application->phone }}</p>
                <p> <strong>Guardian Phone Number: </strong> {{$application->guardian_phone }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-primary2 text-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach