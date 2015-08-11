<?php
include ("Conf.php");
class Conexion
{
    protected $idConexion;
    function __construct()
    {
        $this->idConexion = mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASS);
        
        if($this->idConexion)
        {
            if(MXDBG) print("<p>Conexi&oacute;n exitosa a MySQL.</p>");
            if(mysql_select_db(MYSQL_NAME,$this->idConexion))
            {
                 la base de datos: ".MYSQL_NAME."</p>");	
                return $this->idConexion;	
            }
            else
            {
                exit("<p>ERROR en MySQL al seleccionar la BD</p>
                        <p>Error No:  ".mysql_errno()."</p>
                        <p>ERROR:  ".mysql_error()."</p>
                        <p>Archivo. ".__FILE__."</p>
                        <p>Linea: ".__LINE__."</p>
                        <p>Clase: ".__CLASS__."</p>
                        <p>Funcion: ".__FUNCTION__."</p>
                        <p>Metodo: ".__METHOD__."</p>
                        <p>Script PHP: ".$_SERVER['PHP_SELF']."</p>");
            }
        }
        else
        {
            exit("<p>ERROR en MySQL al conectar con el host especificado</p>
                    <p>Error No:  ".mysql_errno()."</p>
                    <p>ERROR:  ".mysql_error()."</p>
                    <p>Archivo. ".__FILE__."</p>
                    <p>Linea: ".__LINE__."</p>
                    <p>Clase: ".__CLASS__."</p>
                    <p>Funcion: ".__FUNCTION__."</p>
                    <p>Metodo: ".__METHOD__."</p>
                    <p>Script PHP: ".$_SERVER['PHP_SELF']."</p>");
        }
    }

    function __destruct()
    {
        if($this->idConexion)
        {	
            mysql_close($this->idConexion);
            if(MXDBG) print("<p>Conexion a MySQL cerrada.</p>");
            return true;
        }
    }
}
?>
