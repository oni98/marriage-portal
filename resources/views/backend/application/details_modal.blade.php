@foreach ($applications as $application)
    <div class="modal fade" id="view-modal-{{ $application->id }}" tabindex="-1" role="dialog"
        aria-labelledby="view-modal-{{ $application->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary2">{{ $application->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body table-responsive">
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <td><strong>Registration Date: </strong>
                                        {{ date_format($application->created_at, 'd-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Profile Created By: </strong> {{ $application->profile_created_by }}
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Looking For: </strong> {{ $application->looking_for }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-4 text-right">
                            <img src="{{ asset('storage/' . optional($application->files->first())->image) }}"
                                alt="Photo Missing" width="100%" height="150">
                        </div>
                    </div>
                    <table class="table table-striped table-bordered">

                        <tr>
                            <td><strong>Name: </strong> </td>
                            <td>{{ $application->name }}</td>
                        </tr>
                        <tr>
                            <td><strong>SurName: </strong> </td>
                            <td>{{ $application->surname }}</td>
                        </tr>
                        <tr>
                            <td><strong>Religion: </strong> </td>
                            <td>{{ $application->religion?->name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Caste: </strong> </td>
                            <td>{{ $application->caste }}</td>
                        </tr>
                        <tr>
                            <td><strong>Birth Year: </strong> </td>
                            <td>{{ $application->dob }}</td>
                        </tr>
                        <tr>
                            <td><strong>Marital Status: </strong> </td>
                            <td>{{ $application->maritalStatus?->name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Education System: </strong> </td>
                            <td>{{ $application->education_system }}</td>
                        </tr>
                        <tr>
                            <td><strong>Highest Education: </strong> </td>
                            <td>{{ $application->education?->name }}</td>
                        </tr>
                        <tr>
                            <td><strong>SSC/Dakhil/Equivalent Year: </strong> </td>
                            <td>{{ $application->ssc_year }}</td>
                        </tr>
                        <tr>
                            <td><strong>Height: </strong> </td>
                            <td>{{ $application->height }}</td>
                        </tr>
                        <tr>
                            <td><strong>Bride/Groom's Profession: </strong> </td>
                            <td>{{ !empty($application->profession_id) && $professions[$application->profession_id - 1]->name != 'Others' ? $professions[$application->profession_id - 1]->name : $application->other_profession }}
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Father's Profession: </strong> </td>
                            <td>{{ !empty($application->father_profession) && $professions[$application->father_profession - 1]->name != 'Others' ? $professions[$application->father_profession - 1]->name : $application->father_other_profession }}
                                </< /td>
                        </tr>
                        <tr>
                            <td><strong>Mother's Profession: </strong> </td>
                            <td>{{ !empty($application->mother_profession) && $professions[$application->mother_profession - 1]->name != 'Others' ? $professions[$application->mother_profession - 1]->name : $application->mother_other_profession }}
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Father's District: </strong> </td>
                            <td>{{ !empty($application->father_district) && $districts[$application->father_district - 1]->name }}
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Mother's District: </strong> </td>
                            <td>{{ !empty($application->mother_district) && $districts[$application->mother_district - 1]->name }}
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Present District: </strong> </td>
                            <td>{{ !empty($application->present_district) && $districts[$application->present_district - 1]->name }}
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Email Address: </strong> </td>
                            <td>{{ $application->email }}</td>
                        </tr>
                        <tr>
                            <td><strong>WhatsApp: </strong> </td>
                            <td><a href="https://wa.me/88{{ $application->whatsapp }}" target="_blank">
                                    {{ $application->whatsapp }}</a></td>
                        </tr>
                        <tr>
                            <td><strong>Bride/Groom Phone Number: </strong> </td>
                            <td>{{ $application->phone }}</td>
                        </tr>
                        <tr>
                            <td><strong>Guardian Phone Number: </strong> </td>
                            <td>{{ $application->guardian_phone }}</td>
                        </tr>
                    </table>

                    @if (!empty($application->biodata))
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top"
                                    title="Download" href="{{ asset('storage/' . $application->biodata) }}"
                                    download="{{ $application->name }}"> <i class="fas fa-download"></i> Click to
                                    download Biodata
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-primary2 text-white" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
