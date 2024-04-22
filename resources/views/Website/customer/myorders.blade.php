
@extends('Website.master')
	@section('pagename')


  
  <link href="{{asset('backend/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
  <link href="{{asset('website/css/bracket.css')}}" rel="stylesheet">



	<div class="hero-section">
		<div class="container">
            <div class="card p-5">
            <h4>Order Information</h4> 
             <div class="table-wrapper">
      
        
          <table class="table display responsive nowrap" id="datatable1">
              <thead>
                <tr>
                  <th class="wd-15p">SL</th>
                  <th class="wd-15p">User Name</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-15p">Address</th>
                  <th class="wd-15p">Phone Number</th>
                  <th class="wd-20p">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                
                <tr>
                  <td style="font-family: Arial;color: black;">sss</td>
                  <td style="font-family:Arial;color: black;">sss</td>
                  <td style="font-family:Arial;color: black;">dfaas</td>
                  <td style="font-family:Arial;color: black;">sdasda</td>
                  <td style="font-family:Arial;color: black;">5566</td>
                  <td>
                    <a href="" class="btn btn-sm btn-info">Edit</a>
                    <a href="" class="btn btn-sm btn-danger" id="delete">Delete</a>
                  </td>
                   
                </tr>
                
                 
              </tbody>
            </table>
          </div>

            </div>
        </div>
	</div>


  <script src="{{asset('backend/lib/jquery/jquery.js')}}"></script>
  <script src="{{asset('backend/lib/jquery-ui/jquery-ui.js')}}"></script>
  <script src="{{asset('backend/lib/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('backend/lib/datatables-responsive/dataTables.responsive.js')}}"></script>

    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });


        $('#datatable3').DataTable({
          responsive: true,
          "pageLength": 100000 ,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>

@endsection