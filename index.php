<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đồ án tốt nghiệp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <style>
		h1 {
			color: mediumseagreen;
			text-align: center;
		}

		.warning {
			color: red;
			font-weight: bold;
			text-align: center;
		}
		.card{
		margin-left:410px;
		margin-top: 20px;
		color: white;
		}
		.container{
		background:#edf2f7;
		font-weight: bold;
		padding-bottom:10px;
		border-radius: 15px;
		}
	</style>




 <body style="background:#BCBBB8">
  <!--=======================navbar=====================================================-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">Crop Recommendation</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  
<div class="container my-3 mt-3">
      <h1 class="text-success">Crop Recommendation System <span class="text-success">🌱</span></h1>


<?php 
include 'connect.php';

$sql="select * from dht11 where id = (SELECT max(id) from dht11)";

$ket_qua = mysqli_query($connect,$sql);

$du_lieu = mysqli_fetch_array($ket_qua);

?>

 	<form method="POST" action="process.php">
 		<input type="hidden" name="id" value="<?php echo $id ?>">

        <div class="row mt-4">
					<div class="col-md-4">
						<label>Temperature</label>
						<input type="number" name="temperature" value="<?php echo $du_lieu['temperature'] ?>" class="form-control" required step="0">
					</div>

					<div class="col-md-4">
						<label>Moisture</label>
						<input type="number" name="moisture" value="<?php echo $du_lieu['moisture'] ?>" class="form-control" required step="0">
					</div>

					<div class="col-md-4">
						<label>Humidity</label>
						<input type="number" name="humidity" value="<?php echo $du_lieu['humidity'] ?>" class="form-control" required step="0">
					</div>
		</div>

		<div class="row">
            <div class="col-md-4">
					<label>Nito</label>
					<input type="number" name="nito" placeholder="Enter Nitrogen" class="form-control" required step="0">
			</div>
	        <div class="col-md-4">
						<label for="Phosporus">Photpho</label>
						<input type="number" name="photpho" placeholder="Enter Phosphorus" class="form-control" required step="0">
			</div>

			<div class="col-md-4">
				<label>Kali</label>
				<input type="number" name="kali" placeholder="Enter Potassium" class="form-control" required step="0">
			</div>
        </div>
        <div class="row">
	        <div class="col-md-4">
				<label >pH</label>
				<input type="number" name="ph" placeholder="Enter pH value" class="form-control" required step="0">
			</div>

			<div class="col-md-4">
				<label>Rainfall</label>
				<input type="number"name="rainfall" placeholder="Enter pH value" class="form-control" required step="0">
			</div>

        </div>
        <br>


		<button class="form-control" required step="0"> Dự đoán cây trồng phù hợp </button>
	</form>

</div>

<?php mysqli_close($connect);?>

</body>






</html>