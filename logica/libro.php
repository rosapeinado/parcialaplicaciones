<?php
require "persistencia/libroDAO.php";

class Libro{
    private $idlibro;
    private $titulo;
    private $descripcion;
    private $fecha;
    private $conexion;
    
    
    /**
     * @return string
     */
    public function getIdLibro()
    {
        return $this->idLibro;
    }

    /**
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }
    
    * @return string
    */
   public function getDescripcion()
   {
       return $this->descripcion;
   }

   * @return string
   */
  public function getFecha()
  {
      return $this->fecha;
  }


    function libro ($pIdLibro="", $ptitulo="", $pdescripcion="", $pfecha="") {
        $this -> idLibro = $pILibro;
        $this -> titulo = $ptitulo;
        $this -> descripcion = $pdescripcion;
        $this -> fecha = $pfecha;
        $this -> conexion = new Conexion();  
        $this -> libroDAO = new libroDAO($pIdlibro,  $ptitulo, $pdescripcion, $pfecha);      
    }
    
    function consultar(){
        $this -> conexion -> abrir();        
        $this -> conexion -> ejecutar($this -> libroDAO -> consultar());
        $this -> conexion -> cerrar();        
        $resultado = $this -> conexion -> extraer();
        $this -> titulo = $resultado[0];
        $this -> descripcion = $resultado[1];
        $this -> fecha = $resultado[2];
        
    }

    function crear(){
        $this -> conexion -> abrir();        
        $this -> conexion -> ejecutar($this -> libroDAO -> crear());
        $this -> conexion -> cerrar();
    }
    
    function consultarTodos(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> libroDAO -> consultarTodos());
        $this -> conexion -> cerrar();
        $libros = array();
        while(($resultado = $this -> conexion -> extraer()) != null){
            array_push($libros, new Libro($resultado[0], $resultado[1], $resultado[2]));
        }
        return $libros;
    }
    
    function editar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> libroDAO -> editar());
        $this -> conexion -> cerrar();
    }

    function consultarPorPagina($cantidad, $pagina){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> libroDAO -> consultarPorPagina($cantidad, $pagina));
        $this -> conexion -> cerrar();
        $libros = array();
        while(($resultado = $this -> conexion -> extraer()) != null){
            array_push($libros, new Libro($resultado[0], $resultado[1], $resultado[2]));
        }
        return $libros;
    }
    
    function consultarTotalRegistros(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> libroDAO -> consultarTotalRegistros());
        $this -> conexion -> cerrar();        
        $resultado = $this -> conexion -> extraer();        
        return $resultado[0];
    }
    
    
}


?>