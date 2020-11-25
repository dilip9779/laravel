<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class UserModel extends Model
{
    public static function latest(){
          $value=DB::table('employee.usermaster_sso_master')->orderBy('username', 'asc')->get(); 
          return $value;
      }
}
