@extends('Website.master')
	@section('pagename')


    <section class="product">
    <h3 class="text-center mt-5 text-dark" style="color:black">{{$category ? $category : 'Products'}}<span>{{$subcategory ? '['.$subcategory .']' : ''}}</span>{{$lastlevelName ? '['.$lastlevelName.']' : ''}}</span></h3>
    </section>

    <section class="product">
      <div class="container d-flex">
        <div class="col-lg-9">
          <div class="items row">
            @foreach($products as $row)
            <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card">
            <img
              src="{{ URL::to($row->image_one) }}"
              class="card-img-top"
              alt="..."
              height="250"
              width="250"
            />
            <ul class="list-group list-group-flush">
              <li class="list-group-item text-center"><b>TK {{$row->product_name}}</b></li>
            </ul>
          </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="col-lg-3">
          <aside class="category bd-sidebar">
            <nav class=" bd-links" id="bd-docs-nav" aria-label="Docs navigation">
              <ul class="list-unstyled mb-0 py-3 pt-md-1">
              @php
								$category = DB::table('categories')->get();
						@endphp
						@foreach($category as $cat)  
              <li class="mb-1">
                  <a href="{{ url('productbycategory/'.$cat->id) }}" class="d-inline-flex align-items-center level1"       data-bs-toggle="collapse"
                    data-bs-target="#cltegory-1-collapse" aria-expanded="false">
                    <span>{{$cat->category_name}}</span><i class="fa fa-angle-down" aria-hidden="true"></i>

                  </a>
                  @php
                    $subcategory = DB::table('subcategories')->where('category_id',$cat->id)->get();
							   	@endphp
                  @foreach($subcategory as $sub)
                  <div class="collapse" id="cltegory-1-collapse" style="">
                    <ul class="list-unstyled fw-normal pb-1 small">
                      <li>
                        <a href="{{ url('productbysubcategory/'.$cat->id .'/'.$sub->id ) }}"
                            class="d-inline-flex align-items-center level2" data-bs-toggle="collapse"
                            data-bs-target="#cltegory-1-1-collapse" aria-expanded="false">
                            <span>{{$sub->subcategory_name}}</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                          </a>
                          @php
                          $lastlevel = DB::table('lastlavels')->where('category_id',$cat->id)->where('subcategory_id',$sub->id)->get();
                          @endphp
                          @foreach($lastlevel as $last)
                          <div class="collapse" id="cltegory-1-1-collapse" style="">
                            <ul class="list-unstyled fw-normal pb-1 small">
                              <li><a href="#" class="d-inline-flex align-items-center level3">{{$last->lastlevel}}</a></li>
                              
                            </ul>
                          </div>
                          @endforeach
                      </li>
                     
                    </ul>
                  </div>
                  @endforeach
                </li>
                @endforeach
              </ul>
            </nav>
  
          </aside>
        </div>
      </div>
    </section>

    

    @endsection