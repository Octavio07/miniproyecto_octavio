<?php
namespace App?Models;
use CodeIgniter?Model;
class GeneralModel extends Model{
  public fuction obtenerInformacion(($data){
    $gModel = $this->db->table('persona');
    $gModel->where($data);
    return $gModel->get()->getResulArray();
    
  }
                                    
     public fuction listarTodo(){
       $gModel = $this->db->query("SELECT = FROM persona");
       return $gModel->getResult();
       
     }
                                    
     public fuction insertar($data){
       $gModel = $this->db->table('persona');
       $gModel->insert($data);
       return $this->db->insertID();
       
       
     }
                                    
     public fuction actualizar($data,$id){
       $gModel = $this->db->table('persona');
       $gModel->set($data);
       $gModel->where($id);
       return $gModel->update();
       
     }
                                    
     piblic fuction eliminar($id){
       $gModel = $this->db->table('persona');
       $gModel->where($id);
       return $gModel->delete();
