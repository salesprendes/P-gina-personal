<?php
	namespace classes;
	use PDO;

	class habilidades
	{
		private $id, $nombre, $porcentaje;

	    public function __construct($nombre = null, $porcentaje = null)
	    {
	        $this->id = null;
	        $this->nombre = $nombre;
	        $this->porcentaje = $porcentaje;
	    }

	    public function agregar_Nueva_Habilidad()
	    {
	        $query = database::prepare('INSERT INTO estudios (nombre_titulo, calificacion_estudios, nombre_centro_estudios, poblacion_centro_estudios, provincia_centro_estudios, fecha_comienzo_estudios, fecha_fin_estudios) VALUES(:nombre_titulo, :calificacion_estudios, :nombre_centro_estudios, :poblacion_centro_estudios, :provincia_centro_estudios, :fecha_comienzo_estudios, :fecha_fin_estudios)');
	        $query->bindParam(':nombre_titulo', $this->nombre_titulo);
	        $query->bindParam(':calificacion_estudios', $this->calificacion_estudios);
	        $query->bindParam(':nombre_centro_estudios', $this->nombre_centro_estudios);
	        $query->bindParam(':poblacion_centro_estudios', $this->poblacion_centro_estudios);
	        $query->bindParam(':provincia_centro_estudios', $this->provincia_centro_estudios);
	        $query->bindParam(':fecha_comienzo_estudios', $this->fecha_comienzo_estudios);
	        $query->bindParam(':fecha_fin_estudios', $this->fecha_fin_estudios);
	        $query->execute();
    	}

    	public function get_Obtener_Todas_Habilidades()
    	{
	        $declaracion = database::prepare('SELECT * FROM habilidades ORDER BY id ASC;');
	        $declaracion -> execute();
	        return $declaracion -> fetchAll(PDO::FETCH_ASSOC);
    	}
	}
?>