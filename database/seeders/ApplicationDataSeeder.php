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
        $maritul_status = ['Awaiting Divorce', 'Divorced', 'Never Married', 'Separated', 'Short Divorced', 'Widowed'];
        foreach ($maritul_status as $name) {
            $mar = new MaritalStatus();
            $mar->name = $name;
            $mar->save();
        }

        // Store Education Degrees
        $education = [
            'Below SSC',
            'A Level',
            'Alim',
            'Associates Degree',
            'B.Tech',
            'Bachelor',
            'B.C.S Cadre',
            'BBA',
            'BBS',
            'BA|BSS|BCOM|BSC',
            'BDS|Dental Surgery',
            'C.A ',
            'Dakhil',
            'Diploma',
            'DVM',
            'FCPS Part - 1',
            'FCPS Part - 2',
            'Fazil',
            'Higher Diploma',
            'High School',
            'H.S.C',
            'Kamil',
            'Masters',
            'M.A|M.SS|M.COM|MSC',
            'MBA',
            'MBBS',
            'M.Phil',
            'PHD|Doctorate',
            'O level',
            'S.S.C',
            'Trade school',
            'Undergraduate'
        ];
        foreach ($education as $name) {
            $edu = new Education();
            $edu->name = $name;
            $edu->save();
        }

        // Store Professions
        $profession = [
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
            'House Wife',
            'Human Resources Professional',
            'Interior Designer',
            'Investment Professional',
            'IT / Telecom Professional',
            'Journalist',
            'Lecturer',
            'Legal Professional',
            'Manager',
            'Magistrate',
            'Marine Professional',
            'Marketing Professional',
            'Media Professional',
            'Medical Professional',
            'Medical Transcriptionist',
            'Merchant Naval Officer',
            'NGO',
            'Nurse',
            'Not Employed',
            'Not working',
            'Occupational Therapist',
            'Optician',
            'Others',
            'Pharmacist',
            'Physician Assistant',
            'Physicist',
            'Physiotherapist',
            'Pilot',
            'Police',
            'Politician',
            'Production Professional',
            'Professor',
            'Psychologist',
            'Public Relations Professional',
            'Real Estate Professional',
            'Research Scholar',
            'Retired',
            'Retired Gov. Person',
            'Sales Professional',
            'Scientist',
            'Self-employed Person',
            'Shipping Professional',
            'Social Worker',
            'Software Consultant',
            'Software Engineer',
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
            'Zoologist'
        ];
        foreach ($profession as $name) {
            $prof = new Profession();
            $prof->name = $name;
            $prof->save();
        }
    }
}
