

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->  
<!-- esto va en cada tabla-->


<link rel="stylesheet" href="Views/css/perfil.css">


<!-- esto va en cada tabla-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="Views/css/tablas.css">
<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
<!-- esto va en cada tabla-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title>Mis citas</title>
    </head>
    <body>


    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">

                <i class="icono fas fa-user-check"></i>
                
                </div>

            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
  


            </div>
            <div class="perfil-usuario-footer">
               
                <ul class="lista-datos">
                    <li><i class="icono fas fa-user-check"></i> Nombre :</li>
                    <li><i class="icono fas fa-user-check"></i> Apellido:</li>
                    <li><i class="icono fas fa-envelope"></i> Correo:</li>
                    <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
                </ul>
                <ul class="lista-datos">
                    <li><i class=""></i> <?=$_SESSION['user']->getNombres_Usuario();?> </li>
                    <li><i class=""></i><?=$_SESSION['user']->getApellidos_Usuario();?></li>
                    <li><i class=""></i> <?=$_SESSION['user']->getCorreo_Electronico();?></li>
                    <li><i class=""></i> <?=$_SESSION['user']->getTelefono_Usuario();?></li>
                </ul>

            
               
                <ul class="lista-datos">
                    <li><i class="icono fas fa-address-card"></i> Documento:</li>
                    <li><i class="icono fas fa-user-check""></i> nada:</li>
                    <li><i class="icono fas fa-briefcase"></i> nada:</li>
                    <li><i class="icono fas fa-phone-alt"></i> nada:</li>
                </ul>
                <ul class="lista-datos">
                    <li><i class=""></i> <?=$_SESSION['user']->getDocumento_Identificacion();?> </li>
                    <li><i class=""></i><?=$_SESSION['user']->getApellidos_Usuario();?></li>
                    <li><i class=""></i> <?=$_SESSION['user']->getCorreo_Electronico();?></li>
                    <li><i class=""></i> <?=$_SESSION['user']->getTelefono_Usuario();?></li>
                </ul>
              
            </div>

        </div>
    </section>

<h1>Mis citas </h1>



<div class= "container-fluid">
<h8>En este espacio encontrarás tus citas agendadas activas hasta el día de hoy. Para ver las citas que ya pasaron dirigete a historial general</h8>
</div>
<div class="container"> 

</div> 
<br>
<div class="contact-box">  
<br>
<table class="table table-hover table-striped" id="tabla" class="display"><!-- Datatable -->
    <thead class="table">
        <tr>
        <td>ID 
<div class="float-right"> <i class="fas fa-arrow-up"></i> <!-- Datatable -->
            <i class="fas fa-arrow-down"></i>
</div>
                    </td>
            <td>Fecha </td>
            <td>Hora </td>
            <td>Estado </td>
            <td>Nombre Sucursal</td>
            <td>Nombre Examen</td>
            <td>Nombre Usuario</td>
            <td>Cancelar</td>
        </tr>    
    </thead>  

    <?php 
    try{
        foreach($cital as $cita): ?> 

        <tr>
        <td> <?= $cita->getId_Cita() ?> </td>
        <td> <?= $cita->getFecha_Cita() ?> </td>
        <td> <?= $cita->getHora_Cita() ?> </td>
        <td> <?= $cita->getEstado_Cita() ?> </td>
        <td> <?= $sucursal->getById($cita->getId_Sucursal())->getNombre_Sucursal() ?> </td>
        <td> <?= $examen->getById($cita->getId_Examen())->getNombre_Examen() ?> </td>
        <td> <?= $usuario->getById($cita->getId_Usuario())->getNombres_Usuario() ?> </td>
        <td> <a href="?c=citas&a=changeState&Id_Cita=<?= $cita->getId_Cita() ?>" class= "btn btn-danger" type="submit"  id="cancelar">Cancelar</a> </td>        
                        
        </a>
        

        </td>
    </tr>
    <?php endforeach; 
    }catch(Exception $e){
        die($e->getMessage());
        die("No se pudo listar");
    }
    ?>
    </tbody><!-- Datatable -->
</table>

    </div>
    <script src='Views/js/cancelar.js'></script>
    <script src='Views/js/dataTable.js'></script><!-- Datatable -->
   
 
    </body>
    </html>