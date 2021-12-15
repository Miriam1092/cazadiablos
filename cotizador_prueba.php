<!DOCTYPE HTML>
<html lang="en">

<head>
		<title>Impresión</title>
		<meta charset="utf-8" />
     
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<style type="text/css">
  
table {
   border-collapse: separate;
  border: solid 1px #000000;
   background: #000 url("gradient.gif") bottom left repeat-x;
   color: #000;
}

tr {
  background: #000;
     color: #fff;
}


td {
   background: #ccc;
   color: #000;
}

table, th, td {
  border: 1px solid black;
}
tr:hover {background-color: #ccc;}
th {
  background-color: #000;
  color: white;
}

</style>



	</head>
	<body >
 <header>
 <?php include("flexbox.php"); ?>

 </header>
				<!-- Main -->
	<br><br>				

<center>
<h2 style="color: #7C7E7E"> COTIZACIÓN IMPRESIÓN </h2>
</center>





	<br><br>
	<div class="container" style="padding: 30px">
		  <div class="row">
	


	<form method="post" id="myForm" action="operacion_cotipru.php" style="font-size: 16px; ">
		
               <div class="form-group" >
               	<center>

            	
            
                 <label  for="input-nombre" class="col-sm-1 control-label">Clave</label>
            <div class="col-sm-2">
		    	 <input type="numeric" size="10" name="clave" id="clave" value="" placeholder="clave" class="form-control" style=" border:#686869 2px solid;font-size: 16px "/>
		    </div>
		   



		    <div class="col-sm-2">
		    	Clave anterior
              <br>
		  	<?php

               include ("conect.php");

              $sql= "SELECT MAX(clave) AS CLAVE FROM cotizador_dificil2 ";

               $res=mysqli_query($link,$sql);
                          $fila=mysqli_fetch_array($res); ?>
                         <tr>
                           
                          <td><?php echo $fila['CLAVE'] ; ?></td>
                      </tr>
                          
              </div>             
            </center>
               </div>
                <br><br><br>
             <div class="form-group" >
                 <label  for="input-nombre" class="col-sm-1 control-label">Proyecto</label>
		  	      <div class="col-sm-5">
		         <input type="text" size="10" name="proyecto" id="proyecto" value="" placeholder="proyecto"  class="form-control" style=" border:#686869 2px solid;font-size: 16px "/>
		   
		    </div>



		    	    <label  for="input-nombre" class="col-sm-1 control-label">Cliente</label>
             <div class="col-sm-5">
		         <input type="text" size="50"  name="cli" id="cli" value="" placeholder="cliente" class="form-control" style=" border:#686869 2px solid;font-size: 16px "/>
		     </div>
                    
		   
            
		    
		    </div>
		    <br><br>

             
             <div class="form-group" >
             
                 <label  for="input-nombre" class="col-sm-1 control-label">Concepto</label>
             <div class="col-sm-5">
		         <input type="text" size="50"  name="concepto" id="concepto" value="" placeholder="concepto" class="form-control" style=" border:#686869 2px solid;font-size: 16px "/>
		     </div>

            <label  for="input-nombre" class="col-sm-1 control-label">Fecha</label>
            <div class="col-sm-3">
		    	
				<input type="date" size="10" name="fecha_cot" id="fecha_cot" value=""  class="form-control" style=" border:#686869 2px solid;font-size: 16px "/>
		    </div>

            </div>

            <br><br>


             <div class="form-group" >
                 <label  for="input-nombre" class="col-sm-5 control-label">Dimensiones</label>
                 <br><br>

                 <label  for="input-nombre" class="col-sm-1 control-label">Ancho</label>
            <div class="col-sm-2">
		          <input type="numeric" size="10" name="ancho" id="ancho" value="" placeholder="ancho" class="form-control" style=" border:#686869 2px solid;font-size: 16px "/>
		    </div>
                  <label  for="input-nombre" class="col-sm-1 control-label">Altura</label>
		    <div class="col-sm-2">
				<input type="numeric" size="10"   name="largo" id="largo" value="" placeholder="altura" class="form-control" style=" border:#686869 2px solid;font-size: 16px "/>
		    </div>
                   <label  for="input-nombre" class="col-sm-1 control-label">Cantidad</label>
		    <div class="col-sm-2">
				<input type="numeric" size="10" name="cantidad" id="cantidad" value="" placeholder="0"   class="form-control" style=" border:#686869 2px solid;font-size: 16px " />
		    </div>
             

            </div>
             <br><br>

             <div class="form-group" >
             	 <label  for="input-nombre" class="col-sm-1 control-label">Material</label>
             <div class="col-sm-5">
		     	 <input type="text" size="10" name="material" id="material" value="" placeholder="material"  class="form-control" style=" border:#686869 2px solid;font-size: 16px "/>
		    </div>
                  
                 <label  for="input-nombre" class="col-sm-1 control-label">Observación</label>
		     <div class="col-sm-5">
		    	
				<textarea name="comen" id="comen" value=""  class="form-control"  rows="5" cols="30" style=" border:#686869 2px solid;font-size: 16px "></textarea>
		     </div>
 

             </div>




             <div class="form-group" >
             	 <label  for="input-nombre" class="col-sm-1 control-label">Precio cm2</label>
             <div class="col-sm-2">
				<input type="numeric" size="10"  name="precio" id="precio" value="" placeholder="$"  class="form-control"  style=" border:#686869 2px solid;font-size: 16px "/>
		    </div>


                   <label  for="input-nombre" class="col-sm-2 control-label"></label>
		    <div class="col-sm-2">
		    	<input type="button"   value="Agregar" class="principal"   class="form-control" id="add_row"  style="background:black ; color: #fff; font-size: 20px" />
		    </div>
 

             </div>

		    
		 
		  </div>
	</form>

<br><br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#exampleModal">
  Ver precios
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #000;"><center>
        <h4 class="modal-title" id="exampleModalLabel" style="color: #fff" >PAPELES CAZADIABLOS</h4></center>
        <button type="button" class="close"     data-dismiss="modal" aria-label="Cerrar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table" id="tab" style="font-size: 13px;text-align: center; " >
         <thead>
         
            
            <tr>
              
            
             <td style="background: #6C6A6A;color:#fff"><b> Tipo de papel</b></td>
             <td style="background: #6C6A6A;color:#fff"><b> Precio unitario</b></td>
             <td style="background: #6C6A6A;color:#fff"><b> Eliminar</b></td>
      
              
               
            </tr>
            <?php
                         include("conect.php");

                        $sql="SELECT * FROM papel_impre"; 
                          $res=mysqli_query($link, $sql);
                          while($fila=mysqli_fetch_array($res)){ ?>
                         <tr>
                         
                         
                          <td><?php echo $fila['papel']; ?></td>
                          <td>$ <?php echo $fila['precio'] ; ?></td>
                          <td><a class="btn btn-secondary  glyphicon glyphicon-remove" href="eliminar_papel.php? id_papel= <?php echo $fila['id_papel']; ?> "></a></td>
                         
                         
                         </tr>




                <?php
                          }
            ?>
          </tbody>
         </thead>
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger " data-dismiss="modal">Cerrar</button>
       
      </div>
    </div>



  </div>
</div>


		<br><br>
		<table id="tabla_factura" class="table">
			<thead>
				<tr >
					<th>Clave</th>
					<th>Proyecto</th>
					<th>Observaciones</th>
				    <th>Fecha</th>
					<th>Material</th>
					<th>Ancho</th>
					<th>Largo</th>
					<th>Concepto</th>
					<th>cliente</th>
					<th>Cantidad</th>
					<th>Precio cm2</th>
					<th>Total cm2</th>
					<th>Total Precio</th>
					<th>Subtotal</th>
					<th>iva 16%</th>
					<th>Total</th>
					
				</tr>
			</thead>
			<tbody id="content_table">
			
				<tr>
					
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>

					
				</tr>

			</tbody>
			<tfoot>
				
				<tr>
					<td colspan="9"></td>
					<td id="total_cantidad">00</td>
					<td id="total_precio" >0.00</td>
					<td id="total_cm" >00</td>
					<td id="total_precio_cm" >0.00</td>
					<td id="total_subtotales" >0.00</td>
					<td id="total_impuesto" >0.00</td>
					<td id="total_total"> 0.00</td>
					
				</tr>
				
			</tfoot>
		</table>

</div></div>






<!--  PHP -->


				

			<script src="js/impresion.js"></script>



	</body>
</html>
