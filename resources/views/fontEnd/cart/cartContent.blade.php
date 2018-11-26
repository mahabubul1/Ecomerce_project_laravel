@extends("fontEnd.masterContent")

 @section("title", " shopping-cart")

@section("mainContent")

 <script> 
     $(document).ready(function(){
     	 $("#msg").hide();
       @foreach($productCarts  as $productCart)
         
     	  $("#catUp{{$productCart->id}}").on("change keyup", function(){
     	  	   var newqty  = $("#catUp{{$productCart->id}}").val();
     	  	   var rowId  = $("#rowId{{$productCart->id}}").val();
     	  	    if(newqty <=1 )
                 alert("qty is not valid");
                 else if(newqty > 5 ) {
                    alert("qty is not allow more than 5");
                 }else{
                    
                    $.ajax({
                        type:"get",
                        url:'{{url("update-to-cart")}}',
                        data:"rowId="+rowId +"&qty="+newqty ,
                        success:function(data){
     	                  $("#msg").show();
                          $("#msg").html(data);
                        }
                    });

                 }
     	     });

     @endforeach
     });

 </script>

    <div class="main container">
      <div class="col-main">
        <div class="cart">
        	
          
          <div class="page-content page-order"><div class="page-title">
            <h2>Shopping Cart</h2>
             <div>
             	 <h4 class="text-success"> {{Session::get("message")}}</h4>
             </div>
             <div id="msg" class="alert alert-info"></div>
          </div>
            @if(Cart::count()>0)   
            <div class="order-detail-content">
              <div class="table-responsive">
                <table class="table table-bordered cart_summary">
                  <thead>
                    <tr>
                      <th class="cart_product">Product</th>
                      <th>Description</th>
                      <th>Avail.</th>
                      <th>Unit price</th>
                      <th>Qty</th>
                      <th>Total</th>
                      <th  class="action"><i class="fa fa-trash-o"></i></th>
                    </tr>
                  </thead>
                  <tbody> 
                  
               @foreach($productCarts  as $productCart) 
                     {{Session::put("cartImage" , $productCart->options->image)}}

                    <tr>
                      <td class="cart_product"><a href='{{url("single-product-view/".$productCart->id)}}'><img src= "{{$productCart->options->image}} " alt="Product"></a></td>
                      <td class="cart_description"><p class="product-name">{{$productCart->name}} </p>
                        <small><a href="#">Color : Red</a></small><br>
                        <small><a href="#">Size : M</a></small></td>
                      <td class="availability in-stock"><span class="label">In stock</span></td>
                      <td class="price"><span>{{$productCart->price}}</span></td>
                      <td class="qty">
                      	  <input class="form-control input-sm" type="text"   id="rowId{{$productCart->id}}" value="{{$productCart->rowId}}">
                      	  
                      	   <input class="form-control input-sm" type="number" id="catUp{{$productCart->id}}" name="qty" value="{{$productCart->qty}}" minlength="1" autocomplete= "off">
                     
                      </td>
                      <td class="price"><span>{{$productCart->qty*$productCart->price}}</span></td>
                      <td class="action"><a href='{{url("deleteToCart/".$productCart->rowId)}}' onclick=" return confirm('Are you want to remove from cart')"><i class="icon-close"></i></a></td>
                    </tr>
                @endforeach

                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2" rowspan="2"></td>
                      <td colspan="3">Total products (tax incl.)</td>
                      <td colspan="2">{{Cart::subtotal()}} </td>
                
                      <td colspan="2">{{Cart::tax()}} </td>
                    </tr>
                    <tr>
                      <td colspan="3"><strong>Total</strong></td>
                      <td colspan="2"><strong>{{Cart::total()}}</strong></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="cart_navigation"> <a class="continue-btn" href="#"><i class="fa fa-arrow-left"> </i>&nbsp; Continue shopping</a> <a class="checkout-btn" href="{{url('account/page')}}"><i class="fa fa-check"></i> Proceed to checkout</a> </div>
            </div>
            @else        
               <div class="text-info" align="center">There is not product in the cart</div>
            @endif
            
          </div>
        </div>
      </div>
    </div>
@endsection


