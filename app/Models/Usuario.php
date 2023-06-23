<?php namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model {
    public function obtenerusuario($data){
        $usuario = $this->db->table('t_usuario');
        $usuario->where($data);
        return $usuario->get()->getResultArray();
    }
}