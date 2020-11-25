@extends('layout')
@section('content') 
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>SSO ID</th>
                <th>User Name</th>
                <th>UserID</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>   
 @endsection

 @section('javascript') 
 <script src="/vendor/datatables/buttons.server-side.js"></script>
 <script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('users.index') }}",
    dom: 'Bfrtip',
        buttons: [
             'excel', 
        ],	
        columns: [
            {data: 'usercode', name: 'usercode'},
            {data: 'fullname', name: 'fullname'},
            {data: 'username', name: 'username'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script>
 @endsection

