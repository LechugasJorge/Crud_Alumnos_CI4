<?php

namespace App\Controllers;

use App\Models\AlumnosModel;

class Inicio extends BaseController
{
    public function index()
    {

        $model = new AlumnosModel();
        $datos = $model->getAlumnos();

        echo view('/layout/header');
        echo view('/alumnos/listados', compact('datos'));
        echo view('/layout/footer');
    }

    public function add()
    {
        echo view('/layout/header');
        echo view('/alumnos/add');
        echo view('/layout/footer');
    }
    public function store()
    {
        $validacion = $this->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
        ]);
        if ($_POST && $validacion) {
            // Imprime los datos de POST
            //print_r($_POST);
            //exit;

            $datos = [
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'telefono' => $_POST['telefono'],
            ];

            $model = new AlumnosModel();
            $model->add($datos);

            session()->setFlashdata('mensaje', 'registro guardado exitosamente');

            return redirect()->to(base_url('inicio'));
        } else {
            echo 'no paso la validación';

            $error = $this->validator->listErrors();

            session()->setFlashdata('mensaje', $error);
            return redirect()->to(base_url('inicio/add'));
        }
    }
    public function edit($id)
    {
        $model = new AlumnosModel();
        $dato = $model->getAlumno($id);

        echo view('/layout/header');
        echo view('/alumnos/edit', compact('dato'));
        echo view('/layout/footer');
    }
    public function update()
    {
        $validacion = $this->validate([

            'id' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
        ]);
        if ($validacion) {
            // Imprime los datos de POST
            //print_r($_POST);
            //exit;

            $datos = [
                'id' => $_POST['id'],
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'telefono' => $_POST['telefono'],
            ];

            $id = $_POST['id'];

            $model = new AlumnosModel();
            $model->updateDatos($id, $datos);

            session()->setFlashdata('mensaje', 'registro Editado exitosamente');

            return redirect()->to(base_url('inicio'));
        } else {

            $id = $_POST['id'];
            echo 'no paso la validación';

            $error = $this->validator->listErrors();

            session()->setFlashdata('mensaje', $error);
            return redirect()->to(base_url('inicio/edit' . $id));
        }
    }
    public function delete($id)
    {
        $model = new AlumnosModel();
        $model->delete($id);
        session()->setFlashdata('mensaje', 'Registro Eliminado');
        return redirect()->to(base_url('inicio'));
    }
}
