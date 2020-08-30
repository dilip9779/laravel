@extends('layout')
@section('content')   
     <br />
     <h3 align="center">District Master</h3>
     <br />

   <div class="table-responsive">
    <table class="table table-bordered table-striped" id="order_table">
           <thead>
            <tr>
                <th>Dcode</th>
                <th>District Name</th>
                <th>District Name Guj</th>
                <th>State Code</th>
            </tr>
           </thead>
       </table>
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

  $('#order_table').DataTable({
   processing: true,
   serverSide: true,
   ajax: {
    url:'{{ route("daterange.index") }}'
   },
   columns:[
        {
            data:'dcode',
            name:'dcode'
        },      
        {
            data:'dname',
            name:'dname'
        }, 
        {
            data:'dnameguj',
            name:'dnameguj'
        },
        {
            data:'stateid',
            name:'stateid'
        }
   ]
  });
});
</script>
@endsection
