<?php 
class Query
{
	private $idConexion;
	private $idQuery;
	private $arregloObj = array();
	private $arregloArr = array();
	private $sql;
	
	function __construct()
	{
		include_once("conexion.php");
		$this->idConexion = new Conexion();
		#echo "conecto exitosamente";
		if(MXDBG) print ("<p>Objeto instanciado en &quot;Query&quot;.</p>");
		return true;		
	}
	
	function __destruct()
	{
		if(MXDBG) print ("<p>Objeto instanciado en &quot;Query&quot;. Destruido</p>");
		return;
	}
	
	function insert($tabla= NULL, $campos = NULL, $values =NULL){
		
		if(!empty($tabla) && !empty($campos) && !empty($values))
		{
			unset($this->sql, $this->idQuery);
			$this->sql = "INSERT INTO $tabla ($campos) VALUES ($values)";
			#echo"<code>$this->sql</code>";
			$this->idQuery= @mysql_query($this->sql) 
				or die("Error en select: ".mysql_errno(). " ".mysql_error(). " ".__FILE__. " " .__LINE__." ".__CLASS__. " ".__FUNCTION__. " ".__METHOD__. " ".$_SERVER['SCRIPT_FILENAME']. " ". $this->sql);
			return true;
		}
		else
		{
			exit("<p>Error. la sentencia INSERT no es v&aacutelida</p>");
		}
	}
	
function delete($tabla=NULL, $where = NULL){
		if(!empty($tabla) && !empty($where)){
			unset($this->sql);
			$this->sql = "DELETE FROM $tabla where $where";
			#echo "<code>$this->sql</code>";
			$this->idQuery= @mysql_query($this->sql) 
				or die(self::muestraError(mysql_errno()));
			return true;
		}
		else
		{
			exit("<p>Error. la sentencia DELETE no es v&aacutelida</p>");
		}
	}
	
	function update($tabla=NULL, $sets=NULL, $where){
	
	//update admin set email='patoyubalin@gmail.com' where nombre='Luis'
		if(!empty($tabla) && !empty($sets) && !empty($where)){
			unset($this->sql);
			$this->sql = "UPDATE $tabla set $sets where $where";
			#echo "<code>$this->sql</code>";
			$this->idQuery= mysql_query($this->sql) 
				or die(self::muestraError(mysql_errno()));
			return true;
		}
		else
		{
			exit("<p>Error. Al intentarActualizar v&aacutelida</p>");
		}
	}
	
	function select($campos = NULL, $tablas = NULL, $where = NULL, $adicionales = NULL, $tipo = "obj")
	{
		if(!empty($campos) || !empty($tablas))
		{
			unset($this->sql,$this->idQuery,$this->arregloObj,$this->arregloArr);
			$this->sql = "SELECT ".$campos." FROM ".$tablas." WHERE ".$where." ".$adicionales;
            #echo "<code>Query : <code>$this->sql</code>";
            $this->idQuery = mysql_query($this->sql)
            	or die("Error en select: ".mysql_errno(). " ".mysql_error(). " ".__FILE__. " " .__LINE__." ".__CLASS__. " ".__FUNCTION__. " ".__METHOD__. " ".$_SERVER['SCRIPT_FILENAME']. " ". $this->sql);
			
            	#echo "<p>Query Exitoso: </p><code>$this->sql</code>";
            
            if ($this->numRegistros()>0)
			{
				if(strcmp($tipo,"obj")==0)
				{
					$this->arregloObj = array();
					while($row = mysql_fetch_object($this->idQuery))
					{
						$this->arregloObj[] = $row;
					}
                    @mysql_free_result($this->idQuery);
					return $this->arregloObj;
				}
				else if(strcmp($tipo,"arr")==0)
				{
					$this->arregloArr = array();
					$this->arregloArr = mysql_fetch_array($this->idQuery,MYSQL_NUM);
                    @mysql_free_result($this->idQuery);
					return $this->arregloArr;
				}
			}
			else
			{
				return NULL;
			}
		}
		else
		{
			exit("<p>ERROR: No has especificado un query \"SELECT\" v&oacute;lido.</p>");
		}
	}
	
	function numRegistros()
	{
		return ($this->idQuery)?mysql_num_rows($this->idQuery):0;
	}
        
    function sql($sql){
            //echo "<code>$this->sql</code>";
            $this->idQuery= mysql_query($sql) 
                   or die("Error en sql: ".mysql_errno(). " ".mysql_error(). " ".__FILE__. " " .__LINE__." ".__CLASS__. " ".__FUNCTION__. " ".__METHOD__. " ".$_SERVER['SCRIPT_FILENAME']. " ". $this->sql);
		
            if ($this->numRegistros()>0)
            {
               $this->arregloArr = array();
               $this->arregloArr = mysql_fetch_array($this->idQuery,MYSQL_NUM);
               @mysql_free_result($this->idQuery);
                return $this->arregloArr; 
            }
                
            return true;
        }
        
        //REgresa el valor actual de Auto_increment de alguna tabla
        function nextId($tabla){
            $this->idQuery=  mysql_query("SELECT AUTO_INCREMENT next FROM information_schema.tables WHERE table_name = '$tabla' AND table_schema = 'applab'")
                    or die("Error en sql: ".mysql_errno(). " ".mysql_error(). " ".__FILE__. " " .__LINE__." ".__CLASS__. " ".__FUNCTION__. " ".__METHOD__. " ".$_SERVER['SCRIPT_FILENAME']. " ". $this->sql);
		
        
            if ($this->numRegistros()>0)
            {
               $row = mysql_fetch_object($this->idQuery);
               return $row->next;                
               @mysql_free_result($this->idQuery);              
            }
            else
                return null;
        }	
	
	function muestraError($no){
		
		switch($no)
		{
			case 1062: echo "<p>Error. Datos duplicados</p>";
                        
		}
	}
	
	
}
?>