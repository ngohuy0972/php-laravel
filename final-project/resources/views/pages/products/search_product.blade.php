@extends('layouts.app')

@section('search_product')
    <!-- Categories Page Section Begin -->
    {{-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{asset('/home_page')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">All Products</li>
        </ol>
    </nav> --}}
<section class="categories-page spad">
    <div class="container">
        <div class="categories-controls">
            <div class="row">
                <div class="col-lg-12" style="margin-bottom: 70px;
            border-bottom: 2px solid #D0D7DB;">
                <h3 style="margin-bottom:15px;">Kết quả tìm kiếm</h3>
            </div>
                <div class="col-lg-12">
                    {{-- <div class="categories-filter">
                        <div class="cf-left">
                            <div class="dropdown-filter">
                              <select class="sort" name="filter" id="filter">
                                  <option id="sort_all" value="sort_all">All</option>
                                  <option id="name_sort" value="name_sort">Name</option>
                                  <option id="time_sort" value="time_sort">Newest</option>
                                  <option id="price_sort" value="price_sort">Price Lowest</option>
                              </select>
                            
                        </div>
                        <div class="cf-right">
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="row">   
            <div class="col-lg-12 col-md-12">
                <div class="row" id="product_section">
                    @foreach ($items as $item)
                    <div class="col-lg-3 col-md-3">
                        <div class="single-product-item">
                            <figure>
                                <img src="{{asset('/storage/'.$item->image)}}" alt="product-image">
                                <div class="p-status sale">sale</div>
                            </figure>
                            <div class="product-text">
                                <a href="{{route('product-detail.show',$item->id)}}">
                                    <h6>{{$item->name_product}}</h6>
                                </a>
                                <p>{{ $item->price }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- <div class="more-product">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <button id="load_more_button" class="primary-btn" onclick="load_more_button()" data-id="{{ $item->id }}">Xem thêm</button>
                </div>
            </div>
        </div> --}}
    </div>
</section>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  // allProduct();

    function changeFlter() {
      var sort_change = document.getElementById("filter").value;
      var sort_all = document.getElementById("sort_all").value;
      var name_sort = document.getElementById("name_sort").value;
      var time_sort = document.getElementById("time_sort").value;
      var price_sort = document.getElementById("price_sort").value;

      switch (sort_change) {
        case sort_all:
          allProduct();
          $(document).on('click', '#load_more_product', function () {
              var id = $(this).data('id');
              allProduct(id);
              alert(id);

          });
          break;
        case name_sort:
          sortName();
          $(document).on('click', '#load_more_product', function () {
              var id = $(this).data('id');
              sortName(id);
              alert(id);
          });
          break;
        case time_sort:
          sortTime();
          $(document).on('click', '#load_more_product', function () {
              var id = $(this).data('id');
              sortTime(id);
              alert(id);

          });
          break;
        case price_sort:
          sortPrice();
          $(document).on('click', '#load_more_product', function () {
              var id = $(this).data('id');
              sortPrice(id);
              alert(id);

          });
          break;
      
        default:
           allProduct();
           $(document).on('click', '#load_more_product', function () {
              var id = $(this).data('id');
              allProduct(id);
          });
          break;
      }
    };

    // All Product
    function allProduct(id = '') {
        $.ajax({
          url : "{{ route('all_product') }}",
          type : "POST",

          headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data : {id:id},
          success : function (data) {
            // $('#product_setion').remove();
            // $('#product_section').replaceWith(data);
            $('#load_more_product').remove();
            $('#product_section').append(data);
          }
        });
    }

    // Sort Name
    function sortName(name_product = '') {
      $.ajax({
            url : "{{ route('name_sort') }}",
            type : "POST",

            headers:{
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data : {name_product:name_product},
            success : function (data) {
              $('#load_more_product').remove();
              $('#product_section').append(data);
              // $('#product-setion').replaceWith(data);
            }
          });
    }

    function sortTime(created_at = '') {
      $.ajax({
            url : "{{ route('newest_sort') }}",
            type : "POST",

            headers:{
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data : {created_at:created_at},
            success : function (data) {
              $('#load_more_product').remove();
              $('#product_section').append(data);
              // $('#product-setion').replaceWith(data);
            }
          });
    }

    function sortPrice(price = ''){
        $.ajax({
            url : "{{ route('price_sort') }}",
            type : "POST",

            headers:{
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data : {price:price},
            success : function (data) {
              $('#load_more_product').remove();
              $('#product_section').append(data);
              // $('#product-setion').replaceWith(data);
            }
          });
    }
  
</script> --}}
@endsection