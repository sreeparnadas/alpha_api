<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\PersonType;
use App\Models\Person;
use App\Models\Area;
use App\Models\ParliamentaryConstituency;
use App\Models\District;
use App\Models\Assembly;
use App\Models\PollingStation;
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


        //storing state
        State::insert([
            ['state_code'=>1,'state_name'=>'Jammu & Kashmir'],
            ['state_code'=>2,'state_name'=>'Himachal Pradesh'],
            ['state_code'=>3,'state_name'=>'Punjab'],
            ['state_code'=>4,'state_name'=>'Chandigarh'],
            ['state_code'=>5,'state_name'=>'Uttranchal'],
            ['state_code'=>6,'state_name'=>'Haryana'],
            ['state_code'=>7,'state_name'=>'Delhi'],
            ['state_code'=>8,'state_name'=>'Rajasthan'],
            ['state_code'=>9,'state_name'=>'Uttar Pradesh'],
            ['state_code'=>10,'state_name'=>'Bihar'],
            ['state_code'=>11,'state_name'=>'Sikkim'],
            ['state_code'=>12,'state_name'=>'Arunachal Pradesh'],
            ['state_code'=>13,'state_name'=>'Nagaland'],
            ['state_code'=>14,'state_name'=>'Manipur'],
            ['state_code'=>15,'state_name'=>'Mizoram'],
            ['state_code'=>16,'state_name'=>'Tripura'],
            ['state_code'=>17,'state_name'=>'Meghalaya'],
            ['state_code'=>18,'state_name'=>'Assam'],
            ['state_code'=>19,'state_name'=>'West Bengal'],
            ['state_code'=>20,'state_name'=>'Jharkhand'],
            ['state_code'=>21,'state_name'=>'Odisha (Formerly Orissa'],
            ['state_code'=>22,'state_name'=>'Chhattisgarh'],
            ['state_code'=>23,'state_name'=>'Madhya Pradesh'],
            ['state_code'=>24,'state_name'=>'Gujarat'],
            ['state_code'=>25,'state_name'=>'Daman & Diu'],
            ['state_code'=>26,'state_name'=>'Dadra & Nagar Haveli'],
            ['state_code'=>27,'state_name'=>'Maharashtra'],
            ['state_code'=>28,'state_name'=>'Andhra Pradesh'],
            ['state_code'=>29,'state_name'=>'Karnataka'],
            ['state_code'=>30,'state_name'=>'Goa'],
            ['state_code'=>31,'state_name'=>'Lakshdweep'],
            ['state_code'=>32,'state_name'=>'Kerala'],
            ['state_code'=>33,'state_name'=>'Tamil Nadu'],
            ['state_code'=>34,'state_name'=>'Pondicherry'],
            ['state_code'=>35,'state_name'=>'Andaman & Nicobar Islands'],
            ['state_code'=>36,'state_name'=>'Telangana'],
            ['state_code'=>37,'state_name'=>'Ladak']
        ]);

        ParliamentaryConstituency::create(['parliamentary_constituency_name' => 'Shillong','state_id' => 17]);
        ParliamentaryConstituency::create(['parliamentary_constituency_name' => 'Tura','state_id' => 17]);

        District::create(['district_name' => 'WEST JAINTIA HILLS','state_id' => 17,'parliamentary_constituency_id' => 1]);
        District::create(['district_name' => 'EAST JAINTIA HILLS','state_id' => 17,'parliamentary_constituency_id' => 1]);
        District::create(['district_name' => 'RIBHOI','state_id' => 17,'parliamentary_constituency_id' => 1]);
        District::create(['district_name' => 'EAST KHASI HILLS','state_id' => 17,'parliamentary_constituency_id' => 1]);
        District::create(['district_name' => 'WEST KHASI HILLS','state_id' => 17,'parliamentary_constituency_id' => 1]);
        District::create(['district_name' => 'SOUTH WEST KHASI HILLS','state_id' => 17,'parliamentary_constituency_id' => 1]);

        District::create(['district_name' => 'NORTH GARO HILLS','state_id' => 17,'parliamentary_constituency_id' => 2]);
        District::create(['district_name' => 'EAST GARO HILLS','state_id' => 17,'parliamentary_constituency_id' => 2]);
        District::create(['district_name' => 'WEST GARO HILLS','state_id' => 17,'parliamentary_constituency_id' => 2]);
        District::create(['district_name' => 'SOUTH WEST GARO HILLS','state_id' => 17,'parliamentary_constituency_id' => 2]);
        District::create(['district_name' => 'SOUTH GARO HILLS','state_id' => 17,'parliamentary_constituency_id' => 2]);

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


        Person::create(['person_type_id' => 2,'person_name' => 'Super admin', 'email' => 'super@gmail.com', 'mobile1' => '', 'aadhar_id' =>'' , 'voter_id' => '']);
        Person::create(['person_type_id' => 2,'person_name' => 'Meghalaya admin', 'email' => 'meghalaya@gmail.com', 'state_id' => 17]);
        Person::create(['person_type_id' => 2,'person_name' => 'Shillong', 'email' => 'shillong@gmail.com', 'parliamentary_constituency_id' => 1]);
        Person::create(['person_type_id' => 2,'person_name' => 'Tura', 'email' => 'tura@gmail.com', 'parliamentary_constituency_id' => 2]);

        Person::create(['person_type_id' => 2,'person_name' => 'Nartiang', 'email' => '1@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>1]);
        Person::create(['person_type_id' => 2,'person_name' => 'Jowai', 'email' => '2@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>2]);
        Person::create(['person_type_id' => 2,'person_name' => 'Raliang', 'email' => '3@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>3]);
        Person::create(['person_type_id' => 2,'person_name' => 'Mowkaiaw', 'email' => '4@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>4]);
        Person::create(['person_type_id' => 2,'person_name' => 'Sutnga', 'email' => '5@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>5]);
        Person::create(['person_type_id' => 2,'person_name' => 'Nartiang', 'email' => '6@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>6]);
        Person::create(['person_type_id' => 2,'person_name' => 'Jowai', 'email' => '7@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>7]);
        Person::create(['person_type_id' => 2,'person_name' => 'Raliang', 'email' => '8@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>8]);
        Person::create(['person_type_id' => 2,'person_name' => 'Mowkaiaw', 'email' => '9@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>9]);
        Person::create(['person_type_id' => 2,'person_name' => 'Sutnga', 'email' => '10@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>10]);

        Person::create(['person_type_id' => 2,'person_name' => 'Nartiang', 'email' => '11@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>11]);
        Person::create(['person_type_id' => 2,'person_name' => 'Jowai', 'email' => '12@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>12]);
        Person::create(['person_type_id' => 2,'person_name' => 'Raliang', 'email' => '13@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>13]);
        Person::create(['person_type_id' => 2,'person_name' => 'Mowkaiaw', 'email' => '14@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>14]);
        Person::create(['person_type_id' => 2,'person_name' => 'Sutnga', 'email' => '15@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>15]);
        Person::create(['person_type_id' => 2,'person_name' => 'Nartiang', 'email' => '16@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>16]);
        Person::create(['person_type_id' => 2,'person_name' => 'Jowai', 'email' => '17@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>17]);
        Person::create(['person_type_id' => 2,'person_name' => 'Raliang', 'email' => '18@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>18]);
        Person::create(['person_type_id' => 2,'person_name' => 'Mowkaiaw', 'email' => '19@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>19]);
        Person::create(['person_type_id' => 2,'person_name' => 'Sutnga', 'email' => '20@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>20]);

        Person::create(['person_type_id' => 2,'person_name' => 'Nartiang', 'email' => '21@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>21]);
        Person::create(['person_type_id' => 2,'person_name' => 'Jowai', 'email' => '22@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>22]);
        Person::create(['person_type_id' => 2,'person_name' => 'Raliang', 'email' => '23@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>23]);
        Person::create(['person_type_id' => 2,'person_name' => 'Mowkaiaw', 'email' => '24@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>24]);
        Person::create(['person_type_id' => 2,'person_name' => 'Sutnga', 'email' => '25@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>25]);
        Person::create(['person_type_id' => 2,'person_name' => 'Nartiang', 'email' => '26@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>26]);
        Person::create(['person_type_id' => 2,'person_name' => 'Jowai', 'email' => '27@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>27]);
        Person::create(['person_type_id' => 2,'person_name' => 'Raliang', 'email' => '28@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>28]);
        Person::create(['person_type_id' => 2,'person_name' => 'Mowkaiaw', 'email' => '29@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>29]);
        Person::create(['person_type_id' => 2,'person_name' => 'Sutnga', 'email' => '30@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>30]);

        Person::create(['person_type_id' => 2,'person_name' => 'Nartiang', 'email' => '31@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>31]);
        Person::create(['person_type_id' => 2,'person_name' => 'Jowai', 'email' => '32@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>32]);
        Person::create(['person_type_id' => 2,'person_name' => 'Raliang', 'email' => '33@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>33]);
        Person::create(['person_type_id' => 2,'person_name' => 'Mowkaiaw', 'email' => '34@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>34]);
        Person::create(['person_type_id' => 2,'person_name' => 'Sutnga', 'email' => '35@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>35]);
        Person::create(['person_type_id' => 2,'person_name' => 'Nartiang', 'email' => '36@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>36]);
        Person::create(['person_type_id' => 2,'person_name' => 'Jowai', 'email' => '37@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>37]);
        Person::create(['person_type_id' => 2,'person_name' => 'Raliang', 'email' => '38@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>38]);
        Person::create(['person_type_id' => 2,'person_name' => 'Mowkaiaw', 'email' => '39@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>39]);
        Person::create(['person_type_id' => 2,'person_name' => 'Sutnga', 'email' => '40@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>40]);

        Person::create(['person_type_id' => 2,'person_name' => 'Nartiang', 'email' => '41@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>41]);
        Person::create(['person_type_id' => 2,'person_name' => 'Jowai', 'email' => '42@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>42]);
        Person::create(['person_type_id' => 2,'person_name' => 'Raliang', 'email' => '43@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>43]);
        Person::create(['person_type_id' => 2,'person_name' => 'Mowkaiaw', 'email' => '44@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>44]);
        Person::create(['person_type_id' => 2,'person_name' => 'Sutnga', 'email' => '45@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>45]);
        Person::create(['person_type_id' => 2,'person_name' => 'Nartiang', 'email' => '46@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>46]);
        Person::create(['person_type_id' => 2,'person_name' => 'Jowai', 'email' => '47@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>47]);
        Person::create(['person_type_id' => 2,'person_name' => 'Raliang', 'email' => '48@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>48]);
        Person::create(['person_type_id' => 2,'person_name' => 'Mowkaiaw', 'email' => '49@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>49]);
        Person::create(['person_type_id' => 2,'person_name' => 'Sutnga', 'email' => '50@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>50]);

        Person::create(['person_type_id' => 2,'person_name' => 'Nartiang', 'email' => '51@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>51]);
        Person::create(['person_type_id' => 2,'person_name' => 'Jowai', 'email' => '52@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>52]);
        Person::create(['person_type_id' => 2,'person_name' => 'Raliang', 'email' => '53@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>53]);
        Person::create(['person_type_id' => 2,'person_name' => 'Mowkaiaw', 'email' => '54@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>54]);
        Person::create(['person_type_id' => 2,'person_name' => 'Sutnga', 'email' => '55@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>55]);
        Person::create(['person_type_id' => 2,'person_name' => 'Nartiang', 'email' => '56@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>56]);
        Person::create(['person_type_id' => 2,'person_name' => 'Jowai', 'email' => '57@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>57]);
        Person::create(['person_type_id' => 2,'person_name' => 'Raliang', 'email' => '58@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>58]);
        Person::create(['person_type_id' => 2,'person_name' => 'Mowkaiaw', 'email' => '59@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>59]);
        Person::create(['person_type_id' => 2,'person_name' => 'Sutnga', 'email' => '60@gmail.com', 'mobile1' => '99025888252', 'aadhar_id' =>'4578988' , 'voter_id' => '1236547','assembly_constituency_id'=>60]);


        User::create(['person_id' => 1,'parent_id' => NULL,'area_id'=> 1, 'email' => '1', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']); #Super
        User::create(['person_id' => 2,'parent_id' => 1,'area_id'=> 1, 'email' => '2', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']); #Meghalaya
        User::create(['person_id' => 3,'parent_id' => 2,'area_id'=> 1, 'email' => '3', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']); #shillong
        User::create(['person_id' => 4,'parent_id' => 2,'area_id'=> 1, 'email' => '4', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']); #Tura


        User::create(['person_id' => 5,'parent_id' => 3,'area_id'=> 1, 'email' => '5', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 6,'parent_id' => 3,'area_id'=> 1, 'email' => '6', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 7,'parent_id' => 3,'area_id'=> 2, 'email' => '7', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 8,'parent_id' => 3,'area_id'=> 2, 'email' => '8', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 9,'parent_id' => 3,'area_id'=> 2, 'email' => '9', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 10,'parent_id' => 3,'area_id'=> 1, 'email' => '10', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 11,'parent_id' => 3,'area_id'=> 1, 'email' => '11', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 12,'parent_id' => 3,'area_id'=> 2, 'email' => '12', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 13,'parent_id' => 3,'area_id'=> 2, 'email' => '13', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 14,'parent_id' => 3,'area_id'=> 2, 'email' => '14', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);

        User::create(['person_id' => 15,'parent_id' => 3,'area_id'=> 1, 'email' => '15', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 16,'parent_id' => 3,'area_id'=> 1, 'email' => '16', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 17,'parent_id' => 3,'area_id'=> 2, 'email' => '17', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 18,'parent_id' => 3,'area_id'=> 2, 'email' => '18', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 19,'parent_id' => 3,'area_id'=> 2, 'email' => '19', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 20,'parent_id' => 3,'area_id'=> 1, 'email' => '20', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 21,'parent_id' => 3,'area_id'=> 1, 'email' => '21', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 22,'parent_id' => 3,'area_id'=> 2, 'email' => '22', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 23,'parent_id' => 3,'area_id'=> 2, 'email' => '23', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 24,'parent_id' => 3,'area_id'=> 2, 'email' => '24', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);

        User::create(['person_id' => 25,'parent_id' => 3,'area_id'=> 1, 'email' => '25', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 26,'parent_id' => 3,'area_id'=> 1, 'email' => '26', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 27,'parent_id' => 3,'area_id'=> 2, 'email' => '27', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 28,'parent_id' => 3,'area_id'=> 2, 'email' => '28', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 29,'parent_id' => 3,'area_id'=> 2, 'email' => '29', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 30,'parent_id' => 3,'area_id'=> 1, 'email' => '30', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 31,'parent_id' => 3,'area_id'=> 1, 'email' => '31', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 32,'parent_id' => 3,'area_id'=> 2, 'email' => '32', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 33,'parent_id' => 3,'area_id'=> 2, 'email' => '33', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 34,'parent_id' => 3,'area_id'=> 2, 'email' => '34', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);

        User::create(['person_id' => 35,'parent_id' => 3,'area_id'=> 1, 'email' => '35', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 36,'parent_id' => 3,'area_id'=> 1, 'email' => '36', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 37,'parent_id' => 3,'area_id'=> 2, 'email' => '37', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 38,'parent_id' => 3,'area_id'=> 2, 'email' => '38', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 39,'parent_id' => 3,'area_id'=> 2, 'email' => '39', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 40,'parent_id' => 3,'area_id'=> 1, 'email' => '40', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);



        User::create(['person_id' => 41,'parent_id' => 4,'area_id'=> 1, 'email' => '41', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 42,'parent_id' => 4,'area_id'=> 2, 'email' => '42', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 43,'parent_id' => 4,'area_id'=> 2, 'email' => '43', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 44,'parent_id' => 4,'area_id'=> 2, 'email' => '44', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);

        User::create(['person_id' => 45,'parent_id' => 4,'area_id'=> 1, 'email' => '45', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 46,'parent_id' => 4,'area_id'=> 1, 'email' => '46', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 47,'parent_id' => 4,'area_id'=> 2, 'email' => '47', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 48,'parent_id' => 4,'area_id'=> 2, 'email' => '48', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 49,'parent_id' => 4,'area_id'=> 2, 'email' => '49', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 50,'parent_id' => 4,'area_id'=> 1, 'email' => '50', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 51,'parent_id' => 4,'area_id'=> 1, 'email' => '51', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 52,'parent_id' => 4,'area_id'=> 2, 'email' => '52', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 53,'parent_id' => 4,'area_id'=> 2, 'email' => '53', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 54,'parent_id' => 4,'area_id'=> 2, 'email' => '54', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);

        User::create(['person_id' => 55,'parent_id' => 4,'area_id'=> 1, 'email' => '55', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 56,'parent_id' => 4,'area_id'=> 1, 'email' => '56', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 57,'parent_id' => 4,'area_id'=> 2, 'email' => '57', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 58,'parent_id' => 4,'area_id'=> 2, 'email' => '58', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 59,'parent_id' => 4,'area_id'=> 2, 'email' => '59', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 60,'parent_id' => 4,'area_id'=> 1, 'email' => '60', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 61,'parent_id' => 4,'area_id'=> 1, 'email' => '61', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 62,'parent_id' => 4,'area_id'=> 2, 'email' => '62', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 63,'parent_id' => 4,'area_id'=> 2, 'email' => '63', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);
        User::create(['person_id' => 64,'parent_id' => 4,'area_id'=> 2, 'email' => '64', 'password' => '81dc9bdb52d04dc20036dbd8313ed055']);


    }
}
