
<!doctype html>
<head>
	<meta charset="utf-8">

	<title>MVC Todo</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">

	<link href="starter-template.css" rel="stylesheet">

	<style>
	body {
		padding-top: 5rem;
	}
	.starter-template {
		padding: 3rem 1.5rem;
		text-align: center;
	}
</style>
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="/mvc">MVC Todo</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="/mvc">Home <span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
	</nav>

	<main role="main" class="container">

		<div class="starter-template">
			<?php 
		
               $person=(object)$members;


			 ?>

			<h1>Edit HouseHold</h1>
			<form method='post' action='#'>
				<div class="form-group">
					<label for="title">Họ Tên</label>
					<input type="text" class="form-control" id="title" placeholder="Enter a title" name="hoten" value ="<?php echo $person->hoten;?>">
				</div>

				<div class="form-group">
					<label for="description">Năm Sinh</label>
					<input type="text" class="form-control" id="description" placeholder="Enter a description" name="namsinh" value ="<?php echo $person->namsinh ?>">
				</div>
					<div class="form-group">
					<label for="description">Nghề nghiệp</label>
					<input type="text" class="form-control" id="description" placeholder="Enter a description" name="nghenghiep" value ="<?php echo $person->nghenghiep ?>">
				</div>
					</div>
					<div class="form-group">
						<input type="hidden" value="<?php echo $members['id_hodan'] ?>" name="id_hodan">
					<label for="description">Chủ Hộ:</label>
						<input type="text" disabled class="form-control" id="description" placeholder="Enter a description" name="" value ="<?php 
                    
                      foreach ($households as $key) {
                      	if($key['id']==$members['id_hodan'])
                      	{
                      		echo $key['tenchuho'];
                      		break;
                      	}
                      }


                     ?>">
                    
                     


				

					
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>

	</main>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>
