<?PHP

class Manga{
    private $id;
    private $nombre;
    private $genero;
    private $demografia;
    private $tomo;
    private $publicacion;
    private $autor;
    private $ilustracion;
    private $descripcion;
    private $editorial;
    private $portada;
    private $precio;

    /**
     * Función que devuelve un array con el catálogo completo
     */

    public static function catalogo(): array{
        $catalogo = [];

        $Json = file_get_contents('datos/productos.json');
        $JsonData = json_decode($Json);

        foreach ($JsonData as $valor) {
            $manga = new self();

            $manga->id = $valor->id;
            $manga->nombre = $valor->nombre;
            $manga->genero = $valor->genero;
            $manga->demografia = $valor->demografia;
            $manga->tomo = $valor->tomo;
            $manga->publicacion = $valor->publicacion;
            $manga->autor = $valor->autor;
            $manga->ilustracion = $valor->ilustracion;
            $manga->descripcion = $valor->descripcion;
            $manga->editorial = $valor->editorial;
            $manga->portada = $valor->portada;
            $manga->precio = $valor->precio;

            $catalogo[] = $manga;
        }

        return $catalogo;
    }

    public static function catalogo_genero(string $genero): array{
        $res = [];
        $catalogo = self::catalogo();

        foreach ($catalogo as $g){
            if($g->genero === $genero){
                $res[] = $g;
            }
        }
        return $res;
    }

    public static function catalogo_demografia(string $demografia): array {
        $res = [];
        $catalogo = self::catalogo();

        foreach ($catalogo as $d) {
            if($d->demografia === $demografia){
                $res[] = $d;
            }
        }
        return $res;
    }

    public function manga_id (int $idManga): ?Manga{
        $catalogo = $this -> catalogo();

        foreach($catalogo as $m){
            if($m->id === $idManga){
                return $m;
            }
        }
        return null;
    }

    public function formato_precio():string {
        return number_format($this->precio, 2, ",", ".");
    }

    public function descripcion_corta(int $cant = 10): string{
        $texto = $this -> descripcion;

        $texto_reducido = explode(" ", $texto);
        if(count($texto_reducido) <= $cant){
            $res = $texto;
        }else{
            array_splice($texto_reducido, $cant);
            $res = implode(" ",$texto_reducido) . "...";
        }

        return $res;
    }



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Get the value of demografia
     */ 
    public function getDemografia()
    {
        return $this->demografia;
    }

    /**
     * Get the value of tomo
     */ 
    public function getTomo()
    {
        return $this->tomo;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Get the value of ilustracion
     */ 
    public function getIlustracion()
    {
        return $this->ilustracion;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Get the value of editorial
     */ 
    public function getEditorial()
    {
        return $this->editorial;
    }

    /**
     * Get the value of portada
     */ 
    public function getPortada()
    {
        return $this->portada;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Get the value of publicacion
     */ 
    public function getPublicacion()
    {
        return $this->publicacion;
    }
}