<div id="mobile-menu">
  <ul>
   @foreach($categories as $category)
    <li><a href="#">{{$category->categoryName}} </a>
      @foreach($category->manufactires as $manufacture)
          <ul>
            <li><a target="_blank" href="{{url('product/Canon')}}"> {{$manufacture->manufactureName}}</a></li>
          </ul>
   
      @endforeach
    </li>
    @endforeach
  </ul>
</div>

