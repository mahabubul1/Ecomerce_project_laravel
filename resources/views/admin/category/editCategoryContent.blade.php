@extends("admin.adminMasterContent")
@section("title", "Category/Edit")

@section("adminMainContent")
    <div class="content">
   <div class="container-fluid">
      <div class="row">
        <div class="col-md-9">
          <div class="card ">
               @if(Session::has("message"))
                    <div class="text-success"> <p style="font-size: 16px; padding: 5px 15px">{{Session::get("message")}}</p>  </div>

                @endif
              <div class="card-header card-header-rose card-header-icon">
                <h4 class="card-title">Category Update Form</h4>
              </div>
         
              <div class="card-body ">   
              {!! Form::open(['url' => 'admin/Category/Update', "method"=>"POST"]) !!}
              <div class="form-group row">
                    {!! Form::label('categoryName', 'Category Name', ["class"=>"col-sm-2 col-form-label"]) !!}
                      <div class="col-sm-6">
                           {!! Form::text("categoryName", "$categoryById->categoryName", ["class"=>"form-control"]) !!}
                             {!! Form::hidden("categoryId", "$categoryById->id", ["class"=>"form-control"]) !!}
                       </div>
                </div>
                <div class="form-group row">
                           {!! Form::label('publicationStatus', 'Publication Status', ['class'=>'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::select('publicationStatus', ['1' => 'published', '0' => 'Unpublished'], $categoryById->publicationStatus, ['class'=>'form-control']); !!}   
                        </div>
                </div>
        
              <div class="form-group row">
                <div class="col-sm-2"></div>
                 <div class="col-sm-6">
                     {!!Form::submit('save category Update',['class'=>'btn btn-rose']); !!}
                 </div>
              </div>

               {!! Form::close() !!}
            </div>
           
          </div>
        </div>
      </div>
    </div>
</div>
        
@endsection


