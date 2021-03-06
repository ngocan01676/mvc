
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

			<h1> HouseHold</h1>
			<form method='post' action='#'>
				<div class="form-group">
					<label for="title">Họ Tên</label>
					<input type="text" class="form-control" id="title" placeholder="Enter a title" name="hoten" value ="<?php if (isset($members["hoten"])) echo $members["hoten"];?>">
				</div>

				<div class="form-group">
					<label for="description">Năm Sinh</label>
					<input type="text" class="form-control" id="description" placeholder="Enter a description" name="namsinh" value ="<?php if (isset($members["namsinh"])) echo $members["namsinh"];?>">
				</div>
					<div class="form-group">
					<label for="description">Nghề nghiệp</label>
					<input type="text" class="form-control" id="description" placeholder="Enter a description" name="nghenghiep" value ="<?php if (isset($members["nghenghiep"])) echo $members["nghenghiep"];?>">
				</div>
					</div>
					<div class="form-group">
					<label for="description">Chủ Hộ</label>

					<select name="id_chuho" id="" class="form-control">
						<?php 

                           foreach ($households as $key) {
                           	?>
                           	<option value="<?php echo $key['id'] ?>"><?php echo $key['tenchuho'] ?></option>
                           	<?php 
                           }
                           ?>
                           
						
						
					</select>
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>

	</main>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>
