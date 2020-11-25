<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Page;

class PagesController extends Controller{
 
  public function index($officeid=0){
 
    // Fetch all records
    $userData['data'] = Page::getuserData();
 
    $userData['edit'] = $officeid;

    // Fetch edit record
    if($officeid>0){
      $userData['editData'] = Page::getuserData($officeid);
    }

    // Pass to view
    return view('page')->with("userData",$userData);
  }

  public function save(Request $request){
 
    if ($request->input('submit') != null ){

      // Update record
      if($request->input('officeid') !=null ){
        $parentid = $request->input('parentid');
        $office_name = $request->input('office_name');
        $email = $request->input('email');
        $officeid = $request->input('officeid');

        if($office_name !='' && $email != '' && $parentid !=''){
           $data = array('office_name'=>$office_name,"email"=>$email,'parentid'=>$parentid);
 
           // Update
           Page::updateData($officeid, $data);

           Session::flash('message','Update successfully.');
 
        }
 
      }else{ // Insert record
        $parentid = $request->input('parentid');
        $office_name = $request->input('office_name');
        $email = $request->input('email');

         if($office_name !='' && $email != '' && $parentid !=''){
            $data = array('office_name'=>$office_name,"email"=>$email,'parentid'=>$parentid);
 
            // Insert
            $value = Page::insertData($data);
            if($value){
              Session::flash('message','Insert successfully.');
            }else{
              Session::flash('message','Username already exists.');
            }
 
         }
      }
 
    }
    return redirect()->action('PagesController@index',['officeid'=>0]);
  }

  public function deleteUser($officeid=0){

    if($officeid != 0){
      // Delete
      Page::deleteData($officeid);

      Session::flash('message','Delete successfully.');
      
    }
    return redirect()->action('PagesController@index',['officeid'=>0]);
  }
}
