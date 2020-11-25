@extends('layout')
@section('content') 
  <!-- Edit -->
  @if($userData['edit'])
  <form method='post' action='/page/save'>
   <table>
     <tr>
       <td colspan='2'><h1>Edit record</h1></td>
     </tr>
     <tr>
       <td colspan="2">{{ csrf_field() }}</td>
     </tr>
     <tr>
       <td>Office Name</td>
       <td><input type='text' name='office_name' readonly value='{{ $userData["editData"]->office_name }}' ></td>
     </tr>
     <tr>
       <td>Parent ID</td>
       <td><input type='text' name='parentid' value='{{ $userData["editData"]->parentid }}'></td>
     </tr> 
     <tr>
       <td>Email</td>
       <td><input type='email' name='email' value='{{ $userData["editData"]->email }}' ></td>
     </tr>
     <tr>
       <td>&nbsp;<input type='hidden' value='{{ $userData["edit"] }}' name='officeid'></td>
       <td><input type='submit' name='submit' value='Submit'></td>
     </tr>
   </table>
  </form>
  @endif
   <form method='post' action='/page/save'>

     <!-- Message -->
     @if(Session::has('message'))
       <p >{{ Session::get('message') }}</p>
     @endif

     <!-- Add/List records -->
     <table class="table table-bordered table-striped" id="office_master">
       <tr>
         <th>Office Name</th>
         <th>Parent ID</th>
         <th>Email</th>
         <th></th>
       </tr>
       <tr>
         <td colspan="4">{{ csrf_field() }}</td>
       </tr>
       <!-- Add -->
       <tr>
         <td><input type='text' name='Office Name'></td>
         <td><input type='text' name='parentid'></td>
         <td><input type='email' name='email'></td>
         <td><input type='submit' name='submit' value='Add'></td>
       </tr>

       <!-- List -->
       @foreach($userData['data'] as $user)
       <tr>
         <td>{{ $user->office_name }}</td>
         <td>{{ $user->parentid }}</td>
         <td>{{ $user->email }}</td>
         <td><a href='/page/{{ $user->officeid }}'>Update</a> <a href='/page/deleteUser/{{ $user->officeid }}'>Delete</a></td>
       </tr>
       @endforeach
    </table>
  </form>
  @endsection
    <script>
  $('#office_master').DataTable();
</script>