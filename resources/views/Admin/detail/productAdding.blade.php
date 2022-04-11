<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>product add</title>
	@include('Admin.layouts.links')
</head>
<body>
</head>
<body>
 <section>
 	<div class="container-fluid">


 		<div class="row" style="">
 			<div class="col-md-12" style="border:3px solid;padding: 50px;">
 				@if(Session::get('success'))
					<div class="alert alert-success">
						{{Session('success')}}
					</div>

					@endif

					@if(Session::get('fail'))
					<div class="alert alert-danger">
						{{Session('fail')}}
					</div>

					@endif

					<br/>
 				<h3 style="text-align:center;color:white;background-color:#006666;padding:10px;border-radius:10px">Product Adding</h3><br/>
 				<form action="{{ route('product.save') }}" method="POST" enctype="multipart/form-data">
  	             @csrf
                   
                    <div class="form-group">
                    <label>ProductName</label>
                    <input type="text" class="form-control" id="ProductName" placeholder="Enter ProductName" name="ProductName">
                    </div>
                    <div class="form-group">
                    <label>Productprice</label>
                    <input type="text" class="form-control" id="ProductPrice" placeholder="Enter Productprice" name="ProductPrice">
                    </div>
                     <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" id="description" placeholder="Enter Description" name="description"></textarea>
                    </div>
                    <div class="form-group">
                    <label>ProductImage</label>
                    <input type="file" class="form-control" id="ProductImage" name="ProductImage">
                    </div>
                   <br/>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
 			</div>
 		</div>
 	</div>
 </section>

</body>
</html>