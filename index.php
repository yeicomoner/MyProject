<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'dao/PedidosDAO.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tienda Online</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/pedidos.css" rel="stylesheet" type="text/css"/>
        
        <script src="js/jquery-2.1.3.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        
        $oUsuario = new PedidosDAO();
        $res = $oUsuario->ConsultaProductos();
        $formProd="";
        while ($row = mysqli_fetch_row($res)){   
         ?>
        <div class="panel panel-default ctn-Producto" style="text-align:left; float:left;">
            <div class="panel-body">
                <img src="img/productos/<?php echo $row[0]; ?>.jpg" alt="<?php echo $row[1]; ?>" class="img-thumbnail" style="width:170px; height:190px;"/>
                <div style="text-align: center; margin: 3px 0px 3px 0px;">
                    <strong>
                        <?php echo $row[1]; ?>
                    </strong>
                </div>
                <div>
                    <button class="btn btn-success" style="width:100%;">Añadir al Carrito</button>
                </div>
                <div style="font-weight:bold; text-align:center; font-size:25px;">
                    <?php echo $row[3]; ?>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </body>
</html>
