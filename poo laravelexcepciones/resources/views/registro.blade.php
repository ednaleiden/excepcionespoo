<?php include("header.blade.php")?>
<?php include("db.blade.php")?>


<div class="container p-4">

   <div class="row">

   <div class="col-md-4">

      <?php if(isset($_SESSION['message'])) { ?>
         <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
         <?= $_SESSION['message'] ?>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>

     <?php session_unset();}  ?>
       
      <div class="card card-body ">
         <form action="save_entrada.blade.php" method="POST">
            <div class="from-group">
               <input type="text" name="nombre" class="form-control" placeholder="Nombre del trabajador" 
               autofocus>
            </div>
            <div class="from-group mt-3">
               <textarea name="apellido" rows="2" class="form-control" placeholder="apellido del trabajador"></textarea>
            </div>
            <input type="submit" class="btn btn-warning btn-block mt-3" name="save_entrada" value="Registrar">
         </form>
      </div>
      
   </div> 
   
   <div class="col-md-8">
         <table class="table table-success table-striped">
            <thead >
               <tr>
                  <th>Registros</th>
                  <th>Nombre</th>
                  <th>apellido</th>
                  <th>registro fecha</th>
               </tr>
            </thead>
            <tbody>
            <?php
            $query = "SELECT * FROM entrada";
            $result_entrada = mysqli_query($conn, $query);
            while($row = mysqli_fetch_array($result_entrada)) {?>
            <tr>
               <td><?php echo $row['id'] ?></td>
               <td><?php echo $row['nombre'] ?></td>
               <td><?php echo $row['apellido'] ?></td>
               <td><?php echo $row['fecha'] ?></td>
               
            </tr>
            <?php } ?>
            
            </tbody>

         </table>
         
   </div>   
   </div>
</div>