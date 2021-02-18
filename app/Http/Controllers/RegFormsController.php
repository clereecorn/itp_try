<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RegFormData;

class RegFormsController extends Controller
{
    /* 
    * 
    */
    // call instructions form
    public function getInstructions(){
        return view('regis.instructions');
    }

    
    /*
    * 
    */
    // call form 1 (personal information)
    public function getPersonal(Request $request){
        $regFormData = $request->session()->get('regFormData');

        return view('regis.personal',compact('regFormData',$regFormData));
    }

    // validate then proceed
    public function postPersonal(Request $request){

        $validatedData = $request -> validate([
            // student
            'sName' => 'required',
            'sContact' => 'required',
            'sEmail' => 'required',
            'sAddress' => 'required',

            // guardian
            'gName' => 'required',
            'gRelation' => 'required',
            'gContact' => 'required',
            'gEmail' => 'nullable',
            'gAddress' => 'required'
        ]);

        // save values to session
        if (empty($request->session()->get('regFormData'))) {
            $regFormData = new RegFormData();   // make new
        }else{
            $regFormData = $request->session()->get('regFormData'); // get current variables
        }

        $regFormData->fill($validatedData);
        $request->session()->put('regFormData',$regFormData);

        return redirect()->route('getRegDocs');
    }

    
    /*
    * 
    */
    // call form 2 (documents)
    public function getDocuments(Request $request){
        $regFormData = $request->session()->get('regFormData');

        return view('regis.documents',compact('regFormData',$regFormData));
    }

    // validate then proceed
    public function postDocuments(Request $request){

        $regFormData = $request->session()->get('regFormData');

        // validation
        $validatedData = $request->validate([
            'birthcert' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'goodmoral' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'diploma' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tor' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $regFormData = $request->session()->get('regFormData');

        /*
            generate path/filename
            save file on given path/filename
            put path/filename on session
        */

        if($request->file('birthcert') != null){
            $birthCertFileName = "birthCert-" . time() . '.' . $request->file('birthcert')->getClientOriginalExtension();
            $request->file('birthcert')->storeAs('regFormDocs', $birthCertFileName);
            $regFormData->birthCert = $birthCertFileName;
        }else{
            $regFormData->birthCert = '';
        }

        if($request->file('goodMoral') != null){
            $goodMoralFileName = "goodMoral-" . time() . '.' . $request->file('goodMoral')->getClientOriginalExtension();
            $request->file('goodMoral')->storeAs('regFormDocs', $goodMoralFileName);
            $regFormData->goodMoral = $goodMoralFileName;
        }else{
            $regFormData->goodMoral = '';
        }

        if($request->file('diploma') != null){
            $diplomaFileName = "diploma-" . time() . '.' . $request->file('diploma')->getClientOriginalExtension();
            $request->file('diploma')->storeAs('regFormDocs', $diplomaFileName);
            $regFormData->diploma = $diplomaFileName;
        }else{
            $regFormData->diploma = '';
        }

        if($request->file('tor' != null)){
            $torFileName = "tor-" . time() . '.' . $request->file('tor')->getClientOriginalExtension();
            $request->file('tor')->storeAs('regFormDocs', $torFileName);
            $regFormData->tor = $torFileName;
        }else{
            $regFormData->tor = '';
        }

        $request->session()->put('regFormData', $regFormData);

        return redirect()->route('getRegConf');
    }

    function saveFile(){

    }

    public function removeDocument(Request $request){
        $regFormData = $request->session()->get('regFormData');
        //...
    }

    /*
    * 
    */
    // call submission form (confirmation)
    public function getConfirmation(Request $request){
        $regFormData = $request->session()->get('regFormData');

        return view('regis.confirmation',compact('regFormData',$regFormData));
    }

    // send to posts
    public function postConfirmation(){

        //$regFormData = $request->session()->get('regFormData');
        
        // save to database
        //$regFormData->save();

        

        // redirect with 'sent/posted' alert
        return redirect()->view('/')->with('regSuccess','Registration submitted.');
    }
}
