<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Idea;


class IdeaStepsController extends Controller
{
    public function firstStep(){
        if (Session::get('locale') == 'ar'){
            return view('ideas_ar.index');
        }
        return view('ideas.step1');
    }
    public function secondStep(Request $request){
        $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:ideas'],
            'address'=>['required','string'],
            'phone'=>['required'],
            'city'=>['required', 'string'],
            'country'=>['required'],

        ]);
        Session::put('first_name', $request->first_name);
        Session::put('last_name', $request->last_name);
        Session::put('email', $request->email);
        Session::put('address', $request->address);
        Session::put('phone', $request->phone);
        Session::put('city', $request->city);
        Session::put('country_id', $request->country);
        if (Session::get('locale') == 'ar'){
            return view('ideas_ar.step2');
        }
        return view('ideas.step2');
    }
    public function thirdStep(Request $request){
        $request->validate([
            'idea_name'=>['required', 'string'],
            'idea_description'=>['required', 'string'],
            'ack_eighteen'=>['required'],
            'initial'=>['required'],
        ]);
        Session::put('idea_name', $request->idea_name);
        Session::put('idea_description', $request->idea_description);
        Session::put('initial_fees', $request->initial);
        Session::put('age', 'confirmed');
        if (Session::get('locale') == 'ar'){
            return view('ideas_ar.step3');
        }
        return view('ideas.step3');
    }
    public function forthStep(Request $request){
        $request->validate([
            'agreement_aff'=>['required'],
        ]);
        Session::put('agreement1_confirmed', $request->agreement_aff);
        if (Session::get('locale') == 'ar'){
            return view('ideas_ar.step4');
        }
        return view('ideas.step4');
    }
    public function fifthStep(Request $request){
        $request->validate([
            'agreement_disc'=>['required'],
        ]);
        Session::put('agreement2_confirmed', $request->agreement_disc);
        //store Idea into database
        $idea = new Idea();
        $idea->first_name = Session::get('first_name');
        $idea->last_name = Session::get('last_name');
        $idea->email = Session::get('email');
        $idea->address = Session::get('address');
        $idea->phone = Session::get('phone');
        $idea->idea_name = Session::get('idea_name');
        $idea->idea_description = Session::get('idea_description');
        $idea->initial_fees = Session::get('initial_fees');
        $idea->city = Session::get('city');
        $idea->country_id = Session::get('country_id');
        $idea->save();
        if (Session::get('locale') == 'ar'){
            return view('ideas_ar.step5');
        }
        return view('ideas.step5');
    }

    public function back($pageNumber){
        if (Session::get('locale') == 'ar'){
            return view('ideas_ar.step'.$pageNumber);
        }
        return view('ideas.step'.$pageNumber);

    }


}
