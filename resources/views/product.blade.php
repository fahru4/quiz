<html>
<head>
	<title>Quiz Semarang</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<h3 class="text-center">Product Quiz</a></h3>
				<h5 class="text-center my-4">Quiz</h5>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Nama Product</th>
							<th>Jenis Category</th>
							<th>Jenis Product</th>
							<th>harga</th>
						</tr>
					</thead>
					<tbody>
						@foreach($product as $a)
						<tr>
							<td>{{ $a->name }}</td>
							<td>{{ $a->id_category}}</td>
							<td>{{ $a->id_product_detail}}</td>
							<td>{{ $a->price}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
 
    
	{{ $product->links() }}
</body>
</html>