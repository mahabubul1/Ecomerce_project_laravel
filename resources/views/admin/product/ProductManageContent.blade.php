
@extends('admin.adminMasterContent')

@section("title", "Product/Manage")

@section("adminMainContent")
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            @if(Session::has("message"))
              <div class="text-success" style="padding: 20px"><p> {{Session::get("message")}}</p></div> 
             @endif
            <div class="card-header card-header-primary card-header-icon">
             
              <h4 class="card-title">All products  Show</h4>
            </div>
            <div class="card-body">
              <div class="toolbar">
                <!--        Here you can write extra buttons/actions for the toolbar              -->
              </div>
              <div class="material-datatables">
                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Product Name</th>
                      <th>Product Short Description</th>
                      <th>Product Size</th>
                      <th>Product Price</th>
                      <th>Product Image</th>
                      <th>Publication Status</th>
                      <th>Action</th>                     
                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Product Name</th>
                      <th>Product Short Description</th>
                      <th>Product Size</th>
                      <th>Product Price</th>
                      <th>Product Image</th>
                      <th>Publication Status</th>
                      <th>Action</th>                     
                     
                    </tr>
                  </tfoot>
                  <tbody>

                  @foreach($products as $product)

                    <tr>
                      <td>{{$product->productId}}</td>
                      <td>{{$product->productName}}</td>
                      <td width="20%">{!!$product->productShortDescription!!}</td>
                      <td>{{$product->productSize}}</td>
                      <td>{{$product->productPrice}}</td>
                    <td>
                     <?php 
                         $productImages=explode(",", $product->productImage);
                         foreach ($productImages as $productImage){?>
                              <img src='{{asset("$productImage")}}' alt="" width="50px">
                        <?php }?>
                     </td>

                      <td> {{($product->publicationStatus ==1)?"Published" : "Unpublished"}} </td>
                  
                      <td>
                          
                          @if($product->publicationStatus ==1)
                             <a href='{{url("admin/Product/Unpublished/$product->productId")}}' class='btn btn-success' title="Unpublished"><i class="fas fa-long-arrow-alt-up"></i></a>
                          
                          @else
                          <a href='{{url("admin/Product/Published/$product->productId") }}' class='btn btn-danger' title="Published"><i class="fas fa-long-arrow-alt-down"></i></a>

                          @endif  
                           <a href='{{ url("admin/Product/Edit/$product->productId") }}' class='btn btn-info' title="edit"><i class="fas fa-edit"></i></a>
                           <a href='{{ url("admin/Product/delete/$product->productId")}}' onclick=" return confirm('Are you want  delete to data') " class='btn btn-danger' title="delete"><i class="far fa-trash-alt"></i></a>

                        </td>
                    </tr>
                    @endforeach
                   
                  </tbody>
                </table>
              </div>
            </div>
            <!-- end content-->
          </div>
          <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
      </div>
      <!-- end row -->
    </div>
</div>

@endsection