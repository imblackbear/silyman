<?php
    include ("../conexion_db.php");

    if (isset($_POST['enviar-co'])){
        if (strlen($_POST['tipo-servicio']) >= 1 && strlen($_POST['tipo-servicio']) >= 1 && strlen($_POST['tipo-servicio']) >= 1) {
            $tipo_servico = trim($_POST['tipo-servicio']);
            $m_servicio = trim($_POST['m-servicio']);
            $d_servicio = trim($_POST['d-servicio']);
            $fecha_consulta = date("d/m/y");

            //$consulta = "INSERT INTO cotiza(tipos_servicio, area_servicio, detalle_servicio) VALUES ('$tipo_servico','$m_servicio','$d_servicio')";
            $consulta = "INSERT INTO cotizacion(Tipo_insecto, Metros, Comentarios, fecha_consulta) VALUES ('$tipo_servico','$m_servicio','$d_servicio','$fecha_consulta')";

            $resultado = mysqli_query($conexion, $consulta);

            if($resultado){
                echo '<script language="javascript">
                swal({
                    text: "Se ha enviado la cotización correctamente",
                    icon: "success"
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

