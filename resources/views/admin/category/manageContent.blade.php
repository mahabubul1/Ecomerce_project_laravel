
@extends('admin.adminMasterContent')

@section("title", "Category/Manage")

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
             
              <h4 class="card-title"> Category Show</h4>
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
                      <th>Category Name</th>
                      <th>Publication Status</th>
                      <th>Action</th>                     
                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Category Name</th>
                      <th>Publication Status</th>
                      <th>Action</th>                     
                     
                    </tr>
                  </tfoot>
                  <tbody>

                  @foreach($categories as $category)

                    <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->categoryName}}</td>
                      <td> {{($category->publicationStatus ==1)?"Published" : "Unpublished"}} </td>
                  
                      <td>
                          
                          @if($category->publicationStatus ==1)
                             <a href='{{url("admin/Category/Unpublished/$category->id")}}' class='btn btn-success' title="Unpublished"><i class="fas fa-long-arrow-alt-up"></i></a>
                          
                          @else
                          <a href='{{url("admin/Category/Published/$category->id") }}' class='btn btn-danger' title="Published"><i class="fas fa-long-arrow-alt-down"></i></a>

                          @endif  
                           <a href='{{ url("admin/Category/Edit/$category->id") }}' class='btn btn-info' title="edit"><i class="fas fa-edit"></i></a>
                           <a href='{{ url("admin/Category/delete/$category->id")}}' onclick=" return confirm('Are you want  delete to data') " class='btn btn-danger' title="delete"><i class="far fa-trash-alt"></i></a>

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