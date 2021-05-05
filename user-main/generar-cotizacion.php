<?php
    include ("../conexion_db.php");

    if (isset($_POST['enviar-co'])){
        if (strlen($_POST['tipo-servicio']) >= 1 && strlen($_POST['tipo-servicio']) >= 1 && strlen($_POST['tipo-servicio']) >= 1) {
            $tipo_servico = trim($_POST['tipo-servicio']);
            $m_servicio = trim($_POST['m-servicio']);
            $d_servicio = trim($_POST['d-servicio']);
            $idcli = $_REQUEST['idcliente'];
            mysqli_Select_db($conexion,$db_name) or die ("No se encuentra la base de datos");
 
 mysqli_set_charset($conexion,"utf8");
 
 $consulta_cliente="SELECT * FROM `cotizacion` ;";

                        $result_consulta=  mysqli_query($conexion, $consulta_cliente);
                        $cotizacion=0;
                        while($lista=  mysqli_fetch_array($result_consulta, MYSQLI_ASSOC)){
                         if (empty($lista['idCotizacion'])){
                        
                         $cotizacion=0;
                         }
                         else{
                             
                              $cotizacion=$lista['idCotizacion'];
                         }
                        }
                         $cotizacion= $cotizacion+1;
            $fecha_consulta = date("Y-m-d");

            //$consulta = "INSERT INTO cotiza(tipos_servicio, area_servicio, detalle_servicio) VALUES ('$tipo_servico','$m_servicio','$d_servicio')";
            $consulta = "INSERT INTO `cotizacion`(`idCotizacion`, `Tipo_insecto`, `Metros`, `Comentarios`, `fecha_consulta`, `cliente_idCliente`) VALUES ($cotizacion,'$tipo_servico','$m_servicio','$d_servicio','$fecha_consulta','$idcli')";

            $resultado = mysqli_query($conexion, $consulta);

            if($resultado){
                echo '<script language="javascript">
                swal({
                    title: "La cotización se ha creado correctamente ",
                    text: "Prodrá visualizarla en el apartado de SOLICITUDES cuando se haya generado una respuesta",
                    icon: "success",
                    closeOnClickOutside: false,
                    closeOnEsc: false,
                    button: "Aceptar"
                })
                .then((complete) => {
                    if (complete) {
                        window.location.replace("cotizaciones-generadas.php");
                    }
                });
                </script>';
            }else{
                echo '<script language="javascript">
                swal({
                    text: "Oops... ha ocurrido un error",
                    icon: "error"
                });
                </script>';
            }
        }else{
            echo '<script language="javascript">
                swal({
                    text: "Completa los campos",
                    icon: "warning"
                });
                </script>';
        }
    }

