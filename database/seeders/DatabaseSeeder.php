<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\PersonType;
use App\Models\Person;
use App\Models\Area;
use App\Models\District;
use App\Models\Assembly;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //person_types table data
        PersonType::create(['person_type_name' => 'Developer']);            #1
        PersonType::create(['person_type_name' => 'Admin']);        #2
        PersonType::create(['person_type_name' => 'Legislative candidate']);          #3
        PersonType::create(['person_type_name' => 'polling station Volunteer']); #4
        PersonType::create(['person_type_name' => 'General members']);          #5

        
        $this->command->info('All User types are added');

        Area::create(['area_name' => 'area_1']);
        Area::create(['area_name' => 'area_2']);
        Area::create(['area_name' => 'area_3']);
        Area::create(['area_name' => 'area_4']);
        Area::create(['area_name' => 'area_5']);

        District::create(['district_name' => 'WEST JAINTIA HILLS']);
        District::create(['district_name' => 'EAST JAINTIA HILLS']);
        District::create(['district_name' => 'RIBHOI']);
        District::create(['district_name' => 'EAST KHASI HILLS']);
        District::create(['district_name' => 'WEST KHASI HILLS']);
        District::create(['district_name' => 'SOUTH WEST KHASI HILLS']);
        District::create(['district_name' => 'NORTH GARO HILLS']);
        District::create(['district_name' => 'EAST GARO HILLS']);
        District::create(['district_name' => 'WEST GARO HILLS']);
        District::create(['district_name' => 'SOUTH WEST GARO HILLS']);
        District::create(['district_name' => 'SOUTH GARO HILLS']);

        Assembly::create(['assembly_name' => 'Nartiang(ST)','district_id' => 1]);   #1
        Assembly::create(['assembly_name' => 'Jowai(ST)', 'district_id' => 1]); #2
        Assembly::create(['assembly_name' => 'Raliang(ST)', 'district_id' => 1]); #3
        Assembly::create(['assembly_name' => 'Mowkaiaw(ST)', 'district_id' => 1]); #4
        Assembly::create(['assembly_name' => 'Sutnga Saipung(ST)', 'district_id' => 2]); #5
        Assembly::create(['assembly_name' => 'Khliehriat(ST)', 'district_id' => 2]); #6
        Assembly::create(['assembly_name' => 'Amlarem(ST)', 'district_id' => 1]); #7

        Assembly::create(['assembly_name' => 'Mawhati(ST)', 'district_id' => 3]); #8
        Assembly::create(['assembly_name' => 'Nongpoh(ST)', 'district_id' => 3]); #9
        Assembly::create(['assembly_name' => 'Jirang(ST)', 'district_id' => 3]); #10
        Assembly::create(['assembly_name' => 'Umsning(ST)', 'district_id' => 3]); #11
        Assembly::create(['assembly_name' => 'Umroi(ST)', 'district_id' => 3]); #12

        Assembly::create(['assembly_name' => 'Mawryngkneng(ST)', 'district_id' => 4]); #13
        Assembly::create(['assembly_name' => 'Pynthorumkhrah(GEN)', 'district_id' => 4]); #14
        Assembly::create(['assembly_name' => 'Mawlai(ST)', 'district_id' => 4]); #15
        Assembly::create(['assembly_name' => 'East Shillong(ST)', 'district_id' => 4]); #16
        Assembly::create(['assembly_name' => 'North Shillong(ST)', 'district_id' => 4]); #17
        Assembly::create(['assembly_name' => 'West Shillong(GEN)', 'district_id' => 4]); #18
        Assembly::create(['assembly_name' => 'South Shillong(GEN)', 'district_id' => 4]); #19
        Assembly::create(['assembly_name' => 'Mylliem(ST)', 'district_id' => 4]); #20
        Assembly::create(['assembly_name' => 'Nongthymmai(ST)', 'district_id' => 4]); #21
        Assembly::create(['assembly_name' => 'Nongkrem(ST)', 'district_id' => 4]); #22
        Assembly::create(['assembly_name' => 'Sohiong(ST)', 'district_id' => 4]); #23
        Assembly::create(['assembly_name' => 'Mawphlang(ST)', 'district_id' => 4]); #24
        Assembly::create(['assembly_name' => 'Mawsynram(ST)', 'district_id' => 4]); #25
        Assembly::create(['assembly_name' => 'Shella(ST)', 'district_id' => 4]); #26
        Assembly::create(['assembly_name' => 'Pynursla(ST)', 'district_id' => 4]); #27
        Assembly::create(['assembly_name' => 'Sohra(ST)', 'district_id' => 4]); #28
        Assembly::create(['assembly_name' => 'Mawkynrew(ST)', 'district_id' => 4]); #29

        Assembly::create(['assembly_name' => 'Mairang(ST)', 'district_id' => 5]); #30
        Assembly::create(['assembly_name' => 'Mawthadraishan(ST)', 'district_id' => 5]); #31
        Assembly::create(['assembly_name' => 'Nongstoin(ST)', 'district_id' => 5]); #32
        Assembly::create(['assembly_name' => 'Rambrai Jyrngam(ST)', 'district_id' => 5]); #33
        Assembly::create(['assembly_name' => 'Mawshynrut(ST)', 'district_id' => 5]); #34

        Assembly::create(['assembly_name' => 'Ranikot(ST)', 'district_id' => 6]); #35
        Assembly::create(['assembly_name' => 'Mawkyrwat(ST)', 'district_id' => 6]); #36

        Assembly::create(['assembly_name' => 'Kharkutta(ST)', 'district_id' => 8]); #37

        Assembly::create(['assembly_name' => 'Mendipathar(ST)', 'district_id' => 7]); #38
        Assembly::create(['assembly_name' => 'Resubelpara(ST)', 'district_id' => 7]); #39
        Assembly::create(['assembly_name' => 'Bajengdoba(ST)', 'district_id' => 7]); #40

        Assembly::create(['assembly_name' => 'Songsak(ST)', 'district_id' => 8]); #41
        Assembly::create(['assembly_name' => 'Rongjeng(ST)', 'district_id' => 8]); #42
        Assembly::create(['assembly_name' => 'William Nagar(ST)', 'district_id' => 8]); #43

        Assembly::create(['assembly_name' => 'Raksamgre(ST)', 'district_id' => 9]); #44
        Assembly::create(['assembly_name' => 'Tikrikilla(ST)', 'district_id' => 9]); #45
        Assembly::create(['assembly_name' => 'Phulbari(GEN)', 'district_id' => 9]); #46
        Assembly::create(['assembly_name' => 'Rajabala(GEN)', 'district_id' => 9]); #47
        Assembly::create(['assembly_name' => 'Selsella(ST)', 'district_id' => 9]); #48
        Assembly::create(['assembly_name' => 'Dadenggre(ST)', 'district_id' => 9]); #49
        Assembly::create(['assembly_name' => 'North Tura(ST)', 'district_id' => 9]); #50
        Assembly::create(['assembly_name' => 'South Tura(ST)', 'district_id' => 9]); #51
        Assembly::create(['assembly_name' => 'Rangsakona(ST)', 'district_id' => 9]); #52

        Assembly::create(['assembly_name' => 'Ampati(ST)', 'district_id' => 10]); #53
        Assembly::create(['assembly_name' => 'Mahendraganj(ST)', 'district_id' => 10]); #54
        Assembly::create(['assembly_name' => 'Salmanpara(ST)', 'district_id' => 10]); #55
        
        Assembly::create(['assembly_name' => 'Gambegre(ST)', 'district_id' => 9]); #56
        Assembly::create(['assembly_name' => 'Dalu(ST)', 'district_id' => 9]); #57


        Assembly::create(['assembly_name' => 'Rongara Siju(ST)', 'district_id' => 11]); #58
        Assembly::create(['assembly_name' => 'Chokpot(ST)', 'district_id' => 11]); #59
        Assembly::create(['assembly_name' => 'Baghmara(ST)', 'district_id' => 11]); #60


        Person::create(['person_type_id' => 2,'person_name' => 'Nartiang', 'email' => 'dev@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547']);
        Person::create(['person_type_id' => 2,'person_name' => 'Jowai', 'email' => 'admin@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547']);
        Person::create(['person_type_id' => 2,'person_name' => 'Raliang', 'email' => 'candid@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547']);
        Person::create(['person_type_id' => 2,'person_name' => 'Mowkaiaw', 'email' => 'xyz@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547']);
        Person::create(['person_type_id' => 2,'person_name' => 'Sutnga', 'email' => 'abc@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547']);


        User::create(['person_id' => 1,'parent_id' => NULL,'area_id'=> 1, 'email' => '1', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 2,'parent_id' => 1,'area_id'=> 1, 'email' => '2', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 3,'parent_id' => 1,'area_id'=> 2, 'email' => '3', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 4,'parent_id' => 3,'area_id'=> 2, 'email' => '4', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 5,'parent_id' => 4,'area_id'=> 2, 'email' => '5', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        

    }
}