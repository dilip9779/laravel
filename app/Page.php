<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class Page extends Model {
  public static function getuserData($officeid=0){

    if($officeid==0){
      $value=DB::table('employee.office_sso_master')->orderBy('officeid', 'asc')->get(); 
    }else{
      $value=DB::table('employee.office_sso_master')->where('officeid', $officeid)->first();
    }
    return $value;
  }

  public static function insertData($data){
    $value=DB::table('employee.office_sso_master')->where('officeid', $data['officeid'])->get();
    if($value->count() == 0){
      DB::table('employee.office_sso_master')->insert($data);
      return 1;
     }else{
       return 0;
     }
 
  }

  public static function updateData($officeid,$data){
    DB::table('employee.office_sso_master')
      ->where('officeid', $officeid)
      ->update($data);
  }

  public static function deleteData($officeid){
    DB::table('employee.office_sso_master')->where('officeid', '=', $officeid)->delete();
  }
 
}