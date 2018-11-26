@extends("admin.adminMasterContent")
@section("title", "product/Add")
@section("adminMainContent")
 <div class="content">
   <div class="container-fluid">
      <div class="row">
        <div class="col-md-10">
          <div class="card ">
               @if(Session::has("message"))
                    <div class="text-success"> <p style="font-size: 16px; padding: 5px 15px">{{Session::get("message")}}</p>  </div>

                @endif
              <div class="card-header card-header-rose card-header-icon">
                <h4 class="card-title">Product Add Form</h4>
              </div>
         
              <div class="card-body ">   
              {!! Form::open(['url' =>'admin/Product/save', "method"=>"POST", "enctype"=> "multipart/form-data" ]) !!}

              <div class="form-group row">
                  {!! Form::label('productName', 'Product Name', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                    {!! Form::text('productName', null, ['class'=>'form-control'] ) !!} 
                       <div class="text-danger">
                         {{$errors->has('productName')?$errors->first("productName"):""}}
                      </div>  
                   </div>
                </div>
                <div class="form-group row">
                  {!! Form::label('categoryName', 'Category Name ', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6"> 
                       <select name="categoryId" id="" class="form-control">
                           <option> select category Name</option>
                          @foreach($categories as $category)

                           <option value="{!! $category->id !!}">{{$category->categoryName}}</option>
                           
                          @endforeach 


                       </select>
                    <div class="text-danger">
                         {{$errors->has('categoryId')?$errors->first("categoryId"):""}}
                      </div>  
                   </div>

                </div>
                 <div class="form-group row">
                  {!! Form::label('manufactureName', 'Manufacture Name', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6"> 
                       <select name="manufactureId" id="" class="form-control">
                           <option> select manufacture Name</option>

                        @foreach($manfactures  as $manufacture)

                           <option value="{!! $manufacture->id!!}">{{$manufacture->manufactureName}}</option>
                          
                       @endforeach

                       </select>
                    <div class="text-danger">
                         {{$errors->has('manufactureId')?$errors->first("manufactureId"):""}}
                      </div>  
                   </div>

                </div>
                <div class="form-group row">
                  {!! Form::label('brandName', 'Brand Name', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6"> 
                       <select name="brandId" id="" class="form-control">
                           <option> select Brand Name</option>

                        @foreach($brands  as $brands)

                           <option value="{!! $brands->brandId !!}">{{$brands->brandName}}</option>
                          
                          @endforeach

                       </select>
                    <div class="text-danger">
                         {{$errors->has('brandId')?$errors->first("brandId"):""}}
                      </div>  
                   </div>

                </div>

                 <div class="form-group row">
                  {!! Form::label('productShortDescription', 'Product Short Description', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                     <textarea name="productShortDescription" id="textArea" class="form-control"></textarea>
                    <div class="text-danger">
                         {{$errors->has('productShortDescription')?$errors->first("productShortDescription"):""}}
                      </div>  
                   </div>

                </div>
                <div class="form-group row">
                  {!! Form::label('productLongDescription', 'Product Long Description', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                     <textarea name="productLongDescription" id="productLongDescription" class="form-control"></textarea>
                    <div class="text-danger">
                         {{$errors->has('productLongDescription')?$errors->first("productLongDescription"):""}}
                      </div>  
                   </div>

                </div>
                <div class="form-group row">
                  {!! Form::label('productImage', 'Product Image', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                      <input type="file" name="productImage[]" id="productImage"  multiple="1">
                       <div class="text-danger" style="margin-top:40px; margin-left: 65px">
                         {{$errors->has('productImage')?$errors->first("productImage"):""}}
                      </div>  
                   </div>
                </div>

             
               <div class="form-group row">
                  {!! Form::label('productPrice', 'Product Price', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                    {!! Form::text('productPrice', null, ['class'=>'form-control'] ) !!} 
                       <div class="text-danger">
                         {{$errors->has('productPrice')?$errors->first("productPrice"):""}}
                      </div>  
                   </div>
                </div>
               <div class="form-group row">
                  {!! Form::label('productQty', 'Product Quantity', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                    {!! Form::text('productQty', null, ['class'=>'form-control'] ) !!} 
                       <div class="text-danger">
                         {{$errors->has('productQty')?$errors->first("productQty"):""}}
                      </div>  
                   </div>
                </div>
             

               <div class="form-group row">
                  {!! Form::label('productSize', 'productSize', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                    {!! Form::select('productSize', ['s' => 'S', 'm' => 'M','xl' => 'Xl','xxl' => 'XXL'], null, ['placeholder' => 'select your size...', 'class'=>'form-control']  ); !!} 
                    <div class="text-danger" style="margin-top: 30px">{{$errors->has('productSize')?$errors->first("productSize"):""}}</div>  
                       
                   </div>
                </div>
                <div class="form-group row">
                  {!! Form::label('productColor', 'productColor', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                    {!! Form::select('productColor', ['g' => 'Green', 'r' => 'Red','b' => 'Black','w' => 'White'], null, ['placeholder' => 'select your Color...', 'class'=>'form-control']  ); !!} 
                    <div class="text-danger" style="margin-top: 30px">{{$errors->has('productColor')?$errors->first("productColor"):""}}</div>  
                       
                   </div>
                </div>

                <div class="form-group row">
                  {!! Form::label('publicationStatus', 'Publication Status', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                    {!! Form::select('publicationStatus', ['1' => 'published', '0' => 'Unpublished'], null, ['placeholder' => 'select your optaion...', 'class'=>'form-control']  ); !!} 
                    <div class="text-danger" style="margin-top: 30px">{{$errors->has('publicationStatus')?$errors->first("publicationStatus"):""}}</div>  
                       
                   </div>
                </div>
        
              <div class="form-group row">
                <div class="col-sm-2"></div>
                 <div class="col-sm-6">
                     {!!Form::submit('save Product Info',['class'=>'btn btn-rose']); !!}
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


