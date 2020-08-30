@extends('layout')
@section('content')
		   
	<table class="table table-bordered" id="district_master">
        <thead>
            <tr>
                <th>Dcode</th>
                <th>District Name</th>
                <th>District Name Guj</th>
                <th>State Code</th>
            </tr>
        </thead>
	</table>

@endsection
<script>
$('#district_master').DataTable( {
	"scrollY":        "500px",
	"scrollX":        true,
	"scrollCollapse": true,	   
	"aLengthMenu": [
		[10,25, 50],
		[10,25, 50]
	],		
	"processing": true,
	'language': {
		'loadingRecords': '&nbsp;',
		'processing': '<div class="spinner_datatable"></div>'
	},
	"serverSide": true,
	"ajax": {
	url : '{{ route("master.district")}}'
	type: "POST" 
	},
    "columns":[
        {
            date:'dcode',
            name:'dcode'
        },
        {
            date:'dname',
            name:'dname'
        }, 
        {
            date:'dnameguj',
            name:'dnameguj'
        },
        {
            date:'stateid',
            name:'stateid'
        }                     
    ],
	"columnDefs": [ {
		"searchable": false,
		"orderable": false,
		"targets":[0]
	}],
	"order": [[1, 'ASC' ]]
});
</script>