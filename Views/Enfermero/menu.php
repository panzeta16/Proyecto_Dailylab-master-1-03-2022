

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
<link rel="stylesheet" href="Views/css/tablas.css">
<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
<!-- esto va en cada tabla-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title>Mis citas</title>
    </head>
    <body>

<h1>Mis citas </h1>

<div class= "container-fluid">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?c=citas&a=TomasEnf">Inicio</a></li>
        <li class="breadcrumb-item active">Resultados</li>
    </ol>
</nav>
    </div>

<div class="container"> 

</div> 
<br>
<div class="contact-box">  
<br>
<table class="table table-hover table-striped" id="tabla" class="display"> 
    <thead class="table">
        <tr>
        <td>ID 
                <div class="float-right"> <i class="fas fa-arrow-up"></i> 
            <i class="fas fa-arrow-down"></i>
</div>
                    </td>
            <td>Nombre Sucursal</td>
            <td>Nombre Examen</td>
            <td>Nombre Usuario</td>
            <td>Apellido</td>
            <td>C??dula</td>
            <td>Subir resultado</td>
        </tr>    
    </thead>  

    <?php 
    try{
        foreach($cital as $cita): ?> 

        <tr>
        <td> <?= $cita->getId_Cita() ?> </td>
        <td> <?= $sucursal->getById($cita->getId_Sucursal())->getNombre_Sucursal() ?> </td>
        <td> <?= $examen->getById($cita->getId_Examen())->getNombre_Examen() ?> </td>
        <td> <?= $usuario->getById($cita->getId_Usuario())->getNombres_Usuario() ?> </td>
        <td> <?= $usuario->getById($cita->getId_Usuario())->getApellidos_Usuario() ?> </td>
        <td> <?= $usuario->getById($cita->getId_Usuario())->getDocumento_Identificacion() ?> </td>
        <td>  <form id="cancelar" > <a href="?c=citas&a=subirResult&Id_Usuario=<?= $cita->getId_Usuario() ?>&Id_Cita=<?= $cita->getId_Cita() ?>"  onclick='return cancelar();'  id="cancelar" type="submit">Subir <br>Resultados</a></form> </td>        
                        
        </a>
        

        </td>
    </tr>
    <?php endforeach; 
    }catch(Exception $e){
        die($e->getMessage());
        die("No se pudo listar");
    }
    ?>
    </tbody>
</table>

    </div>
    <script src='Views/js/cancelar.js'></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src='Views/js/dataTable.js'></script>
    </body>
    </html>