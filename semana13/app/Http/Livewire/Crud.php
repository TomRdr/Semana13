<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\alumnos;

class Crud extends Component
{
    public $alumno, $codijo, $nombre, $direccion, $telefono, $email, $id_alumno;
    public $isOpen = 0;

    public function openModal(){
        $this->isOpen = true;
    }
    public function closeModal(){
        $this->isOpen = false;
    }

    public function render()
    {
        $this->alumno = alumnos::all();
        return view('livewire.crud');
    }
    public function create(){
        $this->openModal();
    }
    public function store(){
        //validar los campos
        $this->validate([
            'codijo'=>'required',
            'nombre'=>'required',
            'direccion'=>'required',
            'telefono'=>'required',
            'email'=>'required'
        ]);

        
        //guardar o actualizar
        alumnos::updateOrCreate(['id'=>$this->id_alumno],[
            'codijo'=>$this-> codijo,
            'nombre'=>$this-> nombre,
            'direccion'=>$this-> direccion,
            'telefono'=>$this-> telefono,
            'email'=>$this-> email
        ]);

        session()->flash('message', $this->id_alumno ? 'Se ha actualizado' : 'Se ha guardado exitosamente!');

        $this->closeModal();

    }
    public function edit($id){
        $alumno = alumnos::findOrFail($id);
        $this->id_alumno= $id;
        $this->codijo= $alumno->codijo;
        $this->nombre= $alumno->nombre;
        $this->direccion= $alumno->direccion;
        $this->telefono= $alumno->telefono;
        $this->email= $alumno->email;


        $this->openModal();
    }
    public function delete($id){
        alumnos::find($id)->delete();
        session()->flash('message', 'Registro eliminado');
    }

}
