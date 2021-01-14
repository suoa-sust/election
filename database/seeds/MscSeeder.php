<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Seat;
use App\Models\Year;
use Illuminate\Database\Seeder;

class MscSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $year1 = Year::create([
            'name' => '2019',
            'start' => '2019-01-26',
            'end' => '2020-01-25',
            'status' => 'COMPLETED'
        ]);

        $year2 = Year::create([
            'name' => '2020',
            'start' => '2020-01-26',
            'end' => '2021-01-25',
            'status' => 'ACTIVE'
        ]);

        $seat = Seat::create(['name' => 'Software Engineer', 'priority' => 1, 'status' => 'ACTIVE']);
        $president = Seat::create(['name' => 'সভাপতি', 'priority' => 1, 'status' => 'ACTIVE']);
        $vp = Seat::create(['name' => 'সহ-সভাপতি', 'priority' => 2, 'status' => 'ACTIVE']);
        $gs = Seat::create(['name' => 'সাধারণ সম্পাদক', 'priority' => 3, 'status' => 'ACTIVE']);
        $ags = Seat::create(['name' => 'সহ-সাধারণ সম্পাদক', 'priority' => 4, 'status' => 'ACTIVE']);
        $treasurer = Seat::create(['name' => 'কোষাধ্যক্ষ', 'priority' => 5, 'status' => 'ACTIVE']);
        $exicutive_member = Seat::create(['name' => 'কার্যনির্বাহী সদস্য', 'priority' => 6, 'status' => 'ACTIVE']);

        Candidate::create([
            'name' => 'John Doe',
            'designation' => 'Software Engineer',
            'seat_id' => $seat->id,
            'year_id' => $year2->id,
            'number_of_votes' => '1',
            'status' => 'ACTIVE',
            'panel' => 'Admin',
            'priority' => '10'
        ]);

        Candidate::create([
             'name' => 'মোহাম্মাদ মুর্শেদ আহমদ',
             'designation' => 'উপ পরিচালক (অর্থ ও হিসাব)',
             'seat_id' => $president->id,
             'year_id' => $year2->id,
             'number_of_votes' => '130',
             'status' => 'ACTIVE',
             'panel' => '1',
             'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'আ.ন.ম জয়নাল আবেদীন',
            'designation' => 'হিসাব পরিচালক',
            'seat_id' => $president->id,
            'year_id' => $year2->id,
            'number_of_votes' => '114',
            'status' => 'ACTIVE',
            'panel' => '2',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'এমরান আহমদ চৌধুরী',
            'designation' => 'নির্বাহী পরিবহন প্রকৌশলী',
            'seat_id' => $vp->id,
            'year_id' => $year2->id,
            'number_of_votes' => '129',
            'status' => 'ACTIVE',
            'panel' => '1',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'মোঃ ছালেহ আহমদ',
            'designation' => 'প্রিন্সিপাল ইন্সট্রুমেন্ট ইঞ্জিনিয়ার',
            'seat_id' => $vp->id,
            'year_id' => $year2->id,
            'number_of_votes' => '114',
            'status' => 'ACTIVE',
            'panel' => '2',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'আবু সাদাৎ মোহাম্মদ সায়েম তালুকদার',
            'designation' => 'সহকারী পরিচালক',
            'seat_id' => $gs->id,
            'year_id' => $year2->id,
            'number_of_votes' => '135',
            'status' => 'ACTIVE',
            'panel' => '1',
            'priority' => '10'
        ]);

        Candidate::create([
            'name' => 'মোঃ সিরাজুল ইসলাম',
            'designation' => 'প্রশাসনিক কর্মকর্তা',
            'seat_id' => $gs->id,
             'year_id' => $year2->id,
            'number_of_votes' => '110',
             'status' => 'ACTIVE',
             'panel' => '2',
             'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'মোঃ ফারুক আহমদ',
            'designation' => 'প্রশাসনিক কর্মকর্তা',
            'seat_id' => $ags->id,
            'year_id' => $year2->id,
            'number_of_votes' => '107',
            'status' => 'ACTIVE',
            'panel' => '1',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'মোহাম্মদ আবুল কালাম চৌধুরী',
            'designation' => 'একাউন্টস অফিসার',
            'seat_id' => $ags->id,
            'year_id' => $year2->id,
            'number_of_votes' => '128',
            'status' => 'ACTIVE',
            'panel' => '2',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'মোঃ নাজমুল হক',
            'designation' => 'সহকারী রেজিস্ট্রার',
            'seat_id' => $treasurer->id,
            'year_id' => $year2->id,
            'number_of_votes' => '129',
            'status' => 'ACTIVE',
            'panel' => '1',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'মোহাম্মদ মঈনুল হক',
            'designation' => 'প্রশাসনিক কর্মকর্তা',
            'seat_id' => $treasurer->id,
            'year_id' => $year2->id,
            'number_of_votes' => '109',
            'status' => 'ACTIVE',
            'panel' => '2',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'মোঃ জয়নাল ইসলাম চৌধুরী',
            'designation' => 'তত্ত্বাবধায়ক প্রকৌশলী',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '134',
            'status' => 'ACTIVE',
            'panel' => '1',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'সৈয়দ ছলিম মোহাম্মদ আব্দুল কাদির',
            'designation' => 'অতিরিক্ত রেজিস্ট্রার',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '133',
            'status' => 'ACTIVE',
            'panel' => '1',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'আহমদ মাহবুব ফেরদৌসী',
            'designation' => 'উপ রেজিস্ট্রার',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '142',
            'status' => 'ACTIVE',
            'panel' => '1',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'আ ফ ম মিফতাউল হক',
            'designation' => 'উপ রেজিস্ট্রার',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '146',
            'status' => 'ACTIVE',
            'panel' => '1',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'মখলিছুর রহমান',
            'designation' => 'সহকারী পরীক্ষা নিয়ন্ত্রক',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '127',
            'status' => 'ACTIVE',
            'panel' => '1',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'শাহ আলম',
            'designation' => 'সহকারী রেজিস্ট্রার (স্টোর)',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '81',
            'status' => 'ACTIVE',
            'panel' => '1',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'মুজিবুর রহমান',
            'designation' => 'পরীক্ষা নিয়ন্ত্রক',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '136',
            'status' => 'ACTIVE',
            'panel' => '2',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'সৈয়দ হাবিবুর রহমান',
            'designation' => 'প্রধান প্রকৌশলী',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '115',
            'status' => 'ACTIVE',
            'panel' => '2',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'ড. খন্দকার মোঃ মমিনুল হক',
            'designation' => 'প্রিন্সিপাল ইন্সট্রুমেন্ট ইঞ্জিনিয়ার',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '112',
            'status' => 'ACTIVE',
            'panel' => '2',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'সৈয়দ আহমেদ',
            'designation' => 'প্রোগ্রামার',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '91',
            'status' => 'ACTIVE',
            'panel' => '2',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'ডাঃ হাবিবুল ইসলাম',
            'designation' => 'মেডিকেল অফিসার',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '82',
            'status' => 'ACTIVE',
            'panel' => '2',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'নুরজাহান ফাতেমা',
            'designation' => 'প্রশাসনিক কর্মকর্তা',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '119',
            'status' => 'ACTIVE',
            'panel' => '2',
            'priority' => '10'
        ]);
    }
}
