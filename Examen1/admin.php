<?php 
include('common/utils.php');


$products = getProductos($conn);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresa</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
   
</head>
<body>


<center>
<div class="container" style = "padding-top: 10px">
        <div class="col-md-5" style = "border: black 1px solid"> 
		<legend class="text-left header">Administrador</legend>
                        <hr noshade="noshade" size="2" width="100%" />           
                <form action="php/process_newProduct.php" class="form-inline" method="POST">
                    <fieldset>
						<?php if(isset($error_message)) { ?>
							<div><strong><?php echo $error_message; ?></strong></div>
						<?php } ?>
                        


                        <div class="form-group" style = "padding-bottom:25px">
                            <div class = "container">
                                <div class="row">
                                    <div class="col" style="text-align: left">
                                    <span>Nombre de producto</span>
                                    </div>
                                    <div class="col">
									<input type="text" name="prod" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style = "padding-bottom:25px">
                            <div class = "container">
                                <div class="row">
                                    <div class="col" style="text-align: left">
                                    <span>Precio por unidad</span>
                                    </div>
                                    <div class="col">
									<input type="text" name="precio" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table>
						<thead>
							<tr >
								<th>Producto</th>
								<th>Precio</th>
								
							</tr>
						</thead>

						<tbody>
						<?php foreach ($products as $p) { ?>
								<tr>
									<td><?php echo $p['producto'] ?></td>
									<td><?php echo $p['precio'] ?></td>
									
								</tr>
							<?php } ?>
						</tbody>
					</table>

                  <!--  <table>
						<thead>
							<tr >
								<th>Cliente</th>
								<th>Producto</th>
								<th>Cantidad Pedida</th>
								<th>Total a Pagar</th>
								<th></th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($products as $p) { ?>
								<tr>
									<td><?php echo $p['code'] ?></td>
									<td><?php echo $p['name'] ?></td>
									<td><?php echo $p['type'] ?></td>
									<td><?php echo $p['stock'] ?></td>
									
								</tr>
							<?php } ?>
						</tbody>
					</table>
                        -->

                        <div class="form-group" style = "padding-bottom:20px"> 
                                <div class = "container">
                                        <div class="row">
                                        <div class="col-sm-3">
                                    	</div>
                                            <div class="col text-center">
                                                <button type="submit" class="btn btn-primary btn-lg btn-sm">Registrar</button>
                                            </div>
                                        </div>
                                    </div>    
                        </div> 
                        
                        
                    </fieldset>
                </form>            
        </div>
    </div>
</div>
</center>
<!---------------------------------------------------------->

<!----------------------------------------------------------->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
<!----------------------------------------------------------->   
</body>
</html>