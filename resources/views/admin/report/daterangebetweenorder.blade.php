@extends('admin.admin_layout')

@section('admin_panel')
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card pd-20 pd-sm-40">
                        <div class="table-wrapper">
                            <form method="post" action="{{ route('search.by.date') }}">
                                @csrf
                                <div class="modal-body pd-20">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Search Between Date</label>

                                        <input type="date" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="date">
                                        <br>
                                        <input type="date" class="form-control" style="margin-right : 30px"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" name="enddate">



                                    </div>
                                </div><!-- modal-body -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info pd-x-20">Submit</button>

                                </div>
                            </form>
                        </div><!-- table-wrapper -->
                    </div><!-- card -->


                </div>

            </div>
        </div>
    </div><!-- sl-mainpanel -->
@endsection
