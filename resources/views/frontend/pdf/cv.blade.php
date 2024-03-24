{{-- {{$user->id}} --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ public_path('assets/backend/library/bootstrap/dist/css/bootstrap.min.css') }}">
    <style>
        .profile-image {
            width: 120px;
            height: 120px;
        }

        .info tr td:first-child {
            width: 30%;
            font-weight: 600;
        }

        .info tr td:last-child {
            width: 70%;
        }

        table {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="">
        <h2 class="text-center">BIO DATA</h2>
        <table class="mt-2 pl-2 mb-1">
            <tr>
                <td width="90%">
                    <h4>{{ $user->name }}</h4>
                    <p>{{ $user->phone }}, {{ $user->email }} <br>
                        {{ $user->permanent_address }}</p>
                </td>
                <td width="10%">
                    @if (!empty($image))
                        <img class="profile-image" src="{{ public_path('storage/' . $image) }}" alt="">
                    @endif
                </td>
            </tr>
        </table>

        @if (!empty($user->about))
            <div class="bg-light py-2 pl-2">
                <strong>ABOUT</strong>
            </div>
            <p class="pl-2" style="text-align: justify;">
                {{ $user->about }}
            </p>
        @endif

        <div class="bg-light py-2 pl-2 mt-4">
            <strong>PERSONAL DETAILS</strong>
        </div>
        <table class="info pl-2">
            @if (!empty($user->name))
                <tr>
                    <td>Name</td>
                    <td>: {{ $user->name }}</td>
                </tr>
            @endif
            @if (!empty($user->surname))
                <tr>
                    <td>Sur Name</td>
                    <td>: {{ $user->surname }}</td>
                </tr>
            @endif
            @if (!empty($user->dob))
                <tr>
                    <td>Date Of Birth</td>
                    <td>: {{ $user->dob }}</td>
                </tr>
            @endif
            @if (!empty($user->education_id))
                <tr>
                    <td>Education</td>
                    <td>: {{ $educations[$user->education_id - 1]->name }}</td>
                </tr>
            @endif
            @if (!empty($user->ssc_year))
                <tr>
                    <td>SSC Year</td>
                    <td>: {{ $user->ssc_year }}</td>
                </tr>
            @endif
            @if (!empty($user->profession_id))
                <tr>
                    <td>Profession</td>
                    <td>:
                        {{ $professions[$user->profession_id - 1]->name != 'Others' ? $professions[$user->profession_id - 1]->name : $user->other_profession }}
                    </td>
                </tr>
            @endif
            @if (!empty($user->religion_id))
                <tr>
                    <td>Religion</td>
                    <td>: {{ $religions[$user->religion_id - 1]->name }}
                        {{ !empty($user->caste) ? '(' . $user->caste . ')' : '' }}</td>
                </tr>
            @endif
            @if (!empty($user->marital_status_id))
                <tr>
                    <td>Marital Status</td>
                    <td>: {{ $marital_statuses[$user->marital_status_id - 1]->name }}</td>
                </tr>
            @endif
            @if (!empty($user->height))
                <tr>
                    <td>Height</td>
                    <td>: {{ $user->height }}</td>
                </tr>
            @endif
            @if (!empty($user->nationality))
                <tr>
                    <td>Nationality</td>
                    <td>: {{ $user->nationality }}</td>
                </tr>
            @endif
            @if (!empty($user->permanent_address))
                <tr>
                    <td>Permanent Address</td>
                    <td>: {{ $user->permanent_address }}</td>
                </tr>
            @endif
        </table>

        <div class="bg-light py-2 pl-2 mt-4">
            <strong>FAMILY DETAILS</strong>
        </div>
        <table class="info pl-2">
            @if (!empty($user->father_profession))
                <tr>
                    <td>Father's Profession</td>
                    <td>:
                        {{ $professions[$user->father_profession - 1]->name != 'Others' ? $professions[$user->father_profession - 1]->name : $user->father_other_profession }}
                    </td>
                </tr>
            @endif
            @if (!empty($user->father_district))
                <tr>
                    <td>Father's District</td>
                    <td>: {{ $districts[$user->father_district - 1]->name }}</td>
                </tr>
            @endif
            @if (!empty($user->mother_profession))
                <tr>
                    <td>Mother's Profession</td>
                    <td>:
                        {{ $professions[$user->mother_profession - 1]->name != 'Others' ? $professions[$user->mother_profession - 1]->name : $user->mother_other_profession }}
                    </td>
                </tr>
            @endif
            @if (!empty($user->mother_district))
                <tr>
                    <td>Mother's District</td>
                    <td>: {{ $districts[$user->mother_district - 1]->name }}</td>
                </tr>
            @endif
            @if (!empty($user->sibling_brother))
                <tr>
                    <td>Brother</td>
                    <td>: {{ $user->sibling_brother }}</td>
                </tr>
            @endif
            @if (!empty($user->sibling_sister))
                <tr>
                    <td>Sister</td>
                    <td>: {{ $user->sibling_sister }}</td>
                </tr>
            @endif
        </table>

        <div class="bg-light py-2 pl-2 mt-4">
            <strong>CONTACT DETAILS</strong>
        </div>
        <table class="info pl-2 mb-2">
            @if (!empty($user->phone))
                <tr>
                    <td>Phone</td>
                    <td>: {{ $user->phone }}</td>
                </tr>
            @endif
            @if (!empty($user->whatsapp))
                <tr>
                    <td>WhatsApp</td>
                    <td>: {{ $user->whatsapp }}</td>
                </tr>
            @endif
            @if (!empty($user->email))
                <tr>
                    <td>Email</td>
                    <td>: {{ $user->email }}</td>
                </tr>
            @endif
            @if (!empty($user->guardian_phone))
                <tr>
                    <td>Guardian's Number</td>
                    <td>: {{ $user->guardian_phone }}</td>
                </tr>
            @endif
        </table>
    </div>

    <script src="{{ public_path('assets/backend/library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>

</html>
