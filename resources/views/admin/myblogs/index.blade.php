@extends('admin.admin_layout')

@section('admin_panel')
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Blog List</h5>
            </div>
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Blog List
                    <a href="{{ route('add.blog') }}" class="btn btn-sm btn-warning" style="float: right;">Add New</a>
                </h6>


                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th class="wd-15p">Title</th>
                                <th class="wd-15p">Type</th>
                                <th class="wd-15p">Icon Name</th>
                                <th class="wd-20p">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $row)
                                <tr>
                                    <!-- title section  -->
                                    <td style="color: black;">{{ $row->title }}</td>
                                    <!-- title section  -->
                                    <!-- author name  -->
                                    
                                    <td style="color: black;">{{ $row->type }}</td>
                                    <td style="color: black;">{{ $row->icon_name }}</td>

                                    <!-- action -->


                                    <td>
                                        <a href="{{ URL::to('edit/blog/' . $row->id) }} " class="btn btn-sm btn-info"
                                            title="edit"><i class="fa fa-edit"></i></a>
                                        <a href="{{ URL::to('admin/blog/delete/' . $row->id) }}" class="btn btn-sm btn-danger"
                                            title="delete" id="delete"><i class="fa fa-trash"></i></a>

                                        <a href="{{ URL::to('admin/blog/' . $row->id) }}" class="btn btn-sm btn-warning"
                                            title="view details"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
