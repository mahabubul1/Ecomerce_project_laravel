@extends("admin.adminMasterContent")
@section("title", "Brand/Edit")

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
                <h4 class="card-title">Brand Update Form</h4>
              </div>
         
              <div class="card-body ">   
              {!! Form::open(['url' => 'admin/Brand/Update', "method"=>"POST"]) !!}
                <div class="form-group row">
                    {!! Form::label('brandName', 'Brand Name', ["class"=>"col-sm-2 col-form-label"]) !!}
                     <div class="col-sm-6">
                      {!! Form::text('brandName', $brandById->brandName, ['class'=>'form-control']  ) !!} 
                      {!! Form::hidden('brandId', $brandById->brandId, ['class'=>'form-control']  ) !!} 
                        
                         
                     </div>
                  </div>
                  <div class="form-group row">
                    {!! Form::label('publicationStatus', 'Publication Status', ["class"=>"col-sm-2 col-form-label"]) !!}
                     <div class="col-sm-6">
                      {!! Form::select('publicationStatus', ['1' => 'published', '0' => 'Unpublished'], $brandById->publicationStatus, [ 'class'=>'form-control']  ); !!} 
                      
                         
                     </div>
                  </div>
        
              <div class="form-group row">
                <div class="col-sm-2"></div>
                 <div class="col-sm-6">
                     {!!Form::submit('Update Brand Info',['class'=>'btn btn-rose']); !!}
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


