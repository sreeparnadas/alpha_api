<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\CustomVoucher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Controllers\ApiController;

class PersonController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try{
            $now = Carbon::now();
            $currentYear = $now->year;

            $voucher="userRegistration";
            $customVoucher=CustomVoucher::where('voucher_name','=',$voucher)->first();
            if($customVoucher) {
                //already exist
                $customVoucher->last_counter = $customVoucher->last_counter + 1;
                $customVoucher->save();
            }else{
                //fresh entry
                $customVoucher= new CustomVoucher();
                $customVoucher->voucher_name=$voucher;
                $customVoucher->accounting_year= $currentYear;
                $customVoucher->last_counter=1;
                $customVoucher->delimiter='-';
                $customVoucher->prefix='MP';
                $customVoucher->save();
            }
            //adding Zeros before number
            $counter = str_pad($customVoucher->last_counter,3,"0",STR_PAD_LEFT);


            // if any record is failed then whole entry will be rolled back
            //try portion execute the commands and catch execute when error.
            $person= new Person();
            $person->person_type_id = $request->input('personTypeId');
            $person->person_name = $request->input('personName');
            $person->email= $request->input('email');
            $person->mobile1= $request->input('mobile1');
            $person->mobile2= $request->input('mobile2');
            $person->voter_id= $request->input('voter_id');
            $person->save();

            $user = new User();
            $user->person_id = $person->id;
            $user->parent_id = $request->input('parentId');
            $user->remark = $request->input('remark');
            $user->email = $person->id;
            $user->password = $request->input('password');
            $user->save();
            DB::commit();

        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['success'=>0,'exception'=>$e->getMessage()], 500);
        }
        return $this->successResponse($person,'User added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        //
    }
}
