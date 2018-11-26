@extends("admin.adminMasterContent")
@section("title", "product/Edit")

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
                <h4 class="card-title">Product Edit Form</h4>
              </div>
         
              <div class="card-body ">   
              {!! Form::open(['url' => 'admin/Product/Update', "method"=>"POST", "enctype"=> "multipart/form-data","name"=>"EditProductForm" ]) !!}
              <div class="form-group row">
                  {!! Form::label('productName', 'Product Name', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                    {!! Form::text('productName', $productById->productName, ['class'=>'form-control'] ) !!} 
                    {!! Form::hidden('productId', $productById->productId, ['class'=>'form-control'] ) !!} 
                        
                   </div>
                </div>
                <div class="form-group row">
                  {!! Form::label('categoryName', 'Category Name ', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6"> 
                       <select name="categoryId" id="" class="form-control">
                           <option> select category Name</option>
                          @foreach($categories as $category)
                           <option value="{!!$category->id !!}">{{$category->categoryName}}</option> 
                          @endforeach                 
                       </select>
                    
                   </div>

                </div>
                 <div class="form-group row">
                  {!! Form::label('manufactureName', 'Manufacture Name', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6"> 
                       <select name="manufactureId" id="" class="form-control">
                           <option> select manufacture Name</option>
                           @foreach($manufactures as $manufacture)
                           <option value="{!!$manufacture->id !!}">{{$manufacture->manufactureName}}</option> 
                          @endforeach  
                       </select>
                   </div>
                </div>

               <div class="form-group row">
                  {!! Form::label('brandName', 'Brand Name', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6"> 
                       <select name="brandId" id="" class="form-control">
                           <option> select brand Name</option>
                           @foreach($brands as $brand)
                           <option value="{!!$brand->brandId !!}">{{$brand->brandName}}</option> 
                          @endforeach  
                       </select>
                   </div>
                </div>





                 <div class="form-group row">
                  {!! Form::label('productShortDescription', 'Product Short Description', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                     <textarea name="productShortDescription" id="textArea" class="form-control">
                        {!! $productById->productShortDescription !!}
                     </textarea>
                     
                   </div>

                </div>
                <div class="form-group row">
                  {!! Form::label('productLongDescription', 'Product Long Description', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                     <textarea name="productLongDescription" id="productLongDescription" class="form-control">
                       
                          {!! $productById->productLongDescription !!}
                     </textarea>
                      
                   </div>

                </div>
                <div class="form-group row">
                  {!! Form::label('productImage', 'Product Image', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                      <input type="file" name="productImage[]" id="productImage"  multiple="1">
                   </div>
                    <div class="col-sm-6">
                        <div class="text" style="margin-left:30%; margin-top: 10px">
                           <?php 

                            $productsById=  explode(",",  $productById->productImage); 
                              foreach ( $productsById as $productByImage) {?>
                                 
                                      <img src='{{asset("$productByImage")}}' alt="" width="80px" height="80">

                            <?php }?>
                        </div>
                    </div>
                </div>

             
               <div class="form-group row">
                  {!! Form::label('productPrice', 'Product Price', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                    {!! Form::text('productPrice', $productById->productPrice , ['class'=>'form-control'] ) !!} 
                        
                   </div>
                </div>
               <div class="form-group row">
                  {!! Form::label('productQty', 'Product Quantity', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                    {!! Form::text('productQty', $productById->productQty , ['class'=>'form-control'] ) !!} 
                      
                   </div>
                </div>
             

               <div class="form-group row">
                  {!! Form::label('productSize', 'productSize', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                    {!! Form::select('productSize', ['s' => 'S', 'm' => 'M','xl' => 'Xl','xxl' => 'XXL'],$productById->productSize, ['class'=>'form-control']  ); !!} 
                                         
                   </div>
                </div>
                <div class="form-group row">
                  {!! Form::label('productColor', 'productColor', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                    {!! Form::select('productColor', ['g' => 'Green', 'r' => 'Red','b' => 'Black','w' => 'White'], $productById->productColor, ['class'=>'form-control']  ); !!} 
                    
                       
                   </div>
                </div>
             
                <div class="form-group row">
                  {!! Form::label('publicationStatus', 'Publication Status', ["class"=>"col-sm-2 col-form-label"]) !!}
                   <div class="col-sm-6">
                    {!! Form::select('publicationStatus', ['1' => 'published', '0' => 'Unpublished'], $productById->publicationStatus, ['class'=>'form-control']  ); !!} 
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

<script> 
document.forms['EditProductForm'].elements['categoryId'].value ={{$productById->categoryId}}
document.forms['EditProductForm'].elements['manufactureId'].value ={{$productById->manufactureId}}
document.forms['EditProductForm'].elements['brandId'].value ={{$productById->brandId}}
</script>

@endsection


