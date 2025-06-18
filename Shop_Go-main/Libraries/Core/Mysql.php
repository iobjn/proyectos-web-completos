<?php

class Mysql extends Conexion
{
  private $conexion;
  private $strquery;
  private $arrValues;

  function __construct()
  {
      $this->conexion =  new Conexion();
      $this->conexion =  $this->conexion->conect();
  }
//mnetodos
  //insertar registro
  public function insert( string $query ,array $arrayValues)
  {
      $this->strquery = $query;
      $insert = $this->conexion->prepare($this->strquery);
      $resInsert = $insert->execute($this->arrValues);
      if($resInsert)
      {
          $lastInset = $this->conexion->lastInsertId();
      }else{
          $lastInset = 0;
      }
      return $lastInset;
  }



  //buscar un registro
    //
  public function select(string $query)
    {
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

// busca regresa todos los registros
  public function select_all(string $query)
  {
      $this->strquery = $query;
      $result = $this->conexion->prepare($this->strquery);
      $result->execute();
      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      return $data;

  }

//actualiza registros
  public function update(string $query, array $arrValues)
  {
      $this->strquery = $query;
      $this->arrValues = $arrValues;
      $update = $this->conexion-prepare($this->strquery);
      $resExecute = $update->execute($this->arrValues);
      return $resExecute;
  }

// elimina registros
  public function delete(string $query)
  {
      $this->strquery = $query;
      $result = $this->conexion->prepare($this->strquery);
      $result->execute();
      return $result;
  }
}
?>