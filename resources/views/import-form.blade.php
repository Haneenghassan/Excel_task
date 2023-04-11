
<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Import Export Excel to Database Example - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
     Import Export Excel to Database 
        </div>
        <div class="card-body">
            <form action="{{ route('products.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button  class="btn btn-success">Import Product Data</button>
            </form>
  
            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="3">
                        List Of Products
                        <a class="btn btn-warning float-end" href="{{ route('products.export') }}">Export Product Data</a>
                    </th>
                </tr>
                <tr>
                    <th>product_id</th>
                    <th>product</th>
                    <th>discount</th>
                    <th>price</th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->product_id }}</td>
                    <td>{{ $product->product }}</td>
                    <td>{{ $product->discount }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
                @endforeach
            </table>
  
        </div>
    </div>
</div>
     
</body>
</html>