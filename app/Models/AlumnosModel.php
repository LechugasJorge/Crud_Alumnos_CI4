<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumnosModel extends Model
{

    protected $table = "alumnos";
    protected $allowedFields = ['id', 'nombre', 'apellido', 'telefono'];
    public function getAlumnos()
    {
        return $this->findAll();
    }
    public function add($dato)
    {
        return $this->save($dato);
    }
    public function getAlumno($id)
    {
        return $this->where('id', $id)->first($id);
    }
    public function updateDatos($id, $datos)
    {
        return $this->update($id, $datos);
    }
}
