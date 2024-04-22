
@extends('Website.master')
	@section('pagename')


  
  <link href="{{asset('backend/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
  <link href="{{asset('website/css/bracket.css')}}" rel="stylesheet">



	<div class="hero-section">
		<div class="container">
            <div class="card p-5">
            <h4 class="text-center">Order Information</h4> 
             <div class="table-wrapper">
      
        
          <table class="table table-bordered display responsive nowrap" id="datatable1">
              <thead>
                <tr>
                  <th class="wd-15p text-center">Invoice Number</th>
                  <th class="wd-15p text-center">Tracking Id</th>
                  <th class="wd-15p text-center">Date</th>
                  <th class="wd-15p text-center">Status</th>
                  <th class="wd-20p text-center">Action</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($orders as $row)
                <tr>
                  <td class="text-center" style="font-family: Arial;color: black;">Invoice - {{$row->id}}</td>
                  <td class="text-center" style="font-family: Arial;color: black;">{{$row->status_code}}</td>
                  <td class="text-center" style="font-family:Arial;color: black;">{{$row->date}}</td>
                  <td  class="text-center" style="font-family:Arial;color: black;">
                  @if($row->status == 0)
                  <span class="badge badge-warning text-center">Pending</span>
                  @elseif($row->status == 1)
                  <span class="badge badge-info text-center">Cutting</span>
                  @elseif($row->status == 2)
                  <span class="badge badge-warning text-center">Progress</span>
                  @elseif($row->status == 3)
                  <span class="badge badge-success text-center">Delevered</span>
                  @else
                  <span class="badge badge-danger text-center">Cancle</span>

              @endif 
                </td>
                  <td class="text-center">
                    <a href="{{ URL::to('viewinvoice/'.$row->id) }}" class="btn btn-sm btn-info">View</a>
                  </td>
                   
                </tr>
                @endforeach             
                 
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