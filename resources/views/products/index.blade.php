@include('partials.header')
<x-nav/>
@if(Session::has('success'))
{{Session::get('success')}}
@endif
<link rel="stylesheet" href="styles.css">

<section class="intro">
  <div class="gradient-custom-2 h-100">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table table-dark table-bordered mb-0">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">QUANTITY</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>

                  </tr>
                </thead>
                  @foreach ($products as $product)
  <tbody>
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->description}}</td>
      <td>{{$product->quantity}}</td>
      <td>₱{{$product->price}}</td>
      <td><a href="edit/{{$product->id}}">Edit</a></td>
      <td><a href="delete/{{$product->id}}">Delete</a></td>
    </tr>
  </tbody>
  @endforeach
                  
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('partials.footer')