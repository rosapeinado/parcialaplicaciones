<?php
class AutorDAO{
    private $idLibro;
    private $titulo;
    private $descripcion;
    private $fecha;
    
    function AutorDAO ($idLibro, $titulo, $descripcion,$fecha ) {
        $this -> idlibro = $pId;
        $this -> titulo = $ptitulo;
        $this -> descripcion = $pdescripcion;
        $this -> fecha = $pfecha;
    }
    
    function consultar () {
        return "select titulo, descripcion,fecha
                from libro
                where id = '" . $this -> idlibro . "'";
    }
    
    function crear () {
        return "insert into libro (titulo, descripcion,fecha)
                values ('" . $this -> titulo . "', '" . $this -> descripcion . "', '" . $this -> fecha . "')";                
    }
    
    function consultarTodos () {
        return "select id, titulo, descripcion
                from libro";
    }
    
    function consultarPorPagina ($cantidad, $pagina) {
        return "select id, titulo, descripcion, fecha
                from libro
                limit " . strval(($pagina - 1) * $cantidad) . ", " . $cantidad;
    }
    
    function consultarTotalRegistros () {
        return "select count(id)
                from libro";
    }
    
}

?>