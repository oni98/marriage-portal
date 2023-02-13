<?php

namespace Database\Seeders;

use App\Models\Education;
use App\Models\MaritalStatus;
use App\Models\Profession;
use App\Models\Religion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Store Religions
        $religion = ['Muslim', 'Hindu', 'Christian', 'Buddhist', 'Spiritual'];
        foreach ($religion as $name) {
            $rel = new Religion();
            $rel->name = $name;
            $rel->save();
        }

        // Store Marital Statuses
        $maritul_status = ['Never Married', 'Widowed', 'Awaiting Divorce', 'Annulled', 'Divorced'];
        foreach ($maritul_status as $name) {
            $mar = new MaritalStatus();
            $mar->name = $name;
            $mar->save();
        }

        // Store Education Degrees
        $education = [
            'Associates Degree',
            'Bachelor',
            'B.C.S Cadre',
            'BBA',
            'BBS',
            'BA|BSS|BCOM|BSC',
            'BSC-Honours',
            'BDS|Dental Surgery',
            'B-Tech',
            'C.A ',
            'Diploma',
            'DVM',
            'Honours Degree',
            'Higher Diploma',
            'High School',
            'H.S.C',
            'S.S.C',
            'Masters',
            'M.A|M.SS|M.COM|MSC',
            'MBA',
            'MBBS',
            'FCPS Part - 2',
            'M.Phil',
            'PHD|Doctorate',
            'Trade school',
            'Undergraduate',
            'FCPS Part - 1',
            'A Level',
            'Dakhil',
            'Alim',
            'Fazil',
            'Kamil',
            'O level'
        ];
        foreach ($education as $name) {
            $edu = new Education();
            $edu->name = $name;
            $edu->save();
        }

        // Store Professions
        $profession = [
            'Not working',
            'Non-mainstream professional',
            'Accountant',
            'Acting Professional',
            'Actor',
            'Administration Professional',
            'Advertising Professional',
            'Air Hostess',
            'Airline',
            'Architect',
            'Artisan',
            'Audiologist',
            'Banker',
            'Beautician',
            'Biologist / Botanist',
            'Business Person',
            'Chartered Accountant',
            'Civil Engineer',
            'Clerical Official',
            'Commercial Pilot',
            'Company Secretary',
            'Computer Professional',
            'Consultant',
            'Contractor',
            'Cost Accountant',
            'Creative Person',
            'Customer Support Professional',
            'Defense Employee',
            'Dentist',
            'Designer',
            'Doctor',
            'Economist',
            'Engineer',
            'Engineer (Mechanical)',
            'Engineer (Project)',
            'Entertainment Professional',
            'Event Manager',
            'Executive',
            'Factory worker',
            'Farmer',
            'Fashion Designer',
            'Finance Professional',
            'Flight Attendant',
            'Government Employee',
            'Health Care Professional',
            'Home Maker',
            'Hotel And Restaurant Professional',
            'Human Resources Professional',
            'Interior Designer',
            'Investment Professional',
            'IT / Telecom Professional',
            'Journalist',
            'Lawyer',
            'Lecturer',
            'Legal Professional',
            'Manager',
            'Merchandiser',
            'Marketing Professional',
            'Media Professional',
            'Medical Professional',
            'Medical Transcriptionist',
            'Merchant Naval Officer',
            'Nurse',
            'Occupational Therapist',
            'Optician',
            'Pharmacist',
            'Private services',
            'Physician Assistant',
            'Physicist',
            'Physiotherapist',
            'Pilot',
            'Politician',
            'Production professional',
            'Professor',
            'Psychologist',
            'Public Relations Professional',
            'Real Estate Professional',
            'Research Scholar',
            'Retired Person',
            'Retail Professional',
            'Sales Professional',
            'Scientist',
            'Self-employed Person',
            'Social Worker',
            'Software Engineer',
            'Software Consultant',
            'Sportsman',
            'Student',
            'Teacher',
            'Technician',
            'Training Professional',
            'Transportation Professional',
            'Veterinary Doctor',
            'Volunteer',
            'Writer',
            'Working Abroad',
            'Zoologist',
            'Others',
            'Professional',
            'Not Employeed',
            'Employeed',
            'Retired',
            'Marine Professional',
            'Shipping Professional',
            'Marine Engineer',
            'NGO',
            'Retired Gov. Person',
            'Magistrate'
        ];
        foreach ($profession as $name) {
            $prof = new Profession();
            $prof->name = $name;
            $prof->save();
        }
    }
}
