<?php
class Reservation_model extends CI_MODEL {
  private $TABLE_NAME = 'reservation';
  
  function __construct() {
    $this->load->database();
  }

  public function getAll()
  {
    $query = $this->db->get($this->TABLE_NAME);
    return $query->result();
  }

  public function get($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get($this->TABLE_NAME);
    if ($query->num_rows() > 0) {
      return $query->result()[0];
    }
  }

  public function insert($car_no, $car_model, $car_vendor, $service, $reserve)
  {
    $data = array(
      'car_no' => $car_no,
      'car_model' => $car_model,
      'car_vendor' => $car_vendor,
      'service' => $service,
      'reserved' => $reserve,
    );
    $this->db->insert($this->TABLE_NAME, $data);
  }

  public function update($id, $car_no, $car_model, $car_vendor, $service, $reserve)
  {
    $data = array(
      'car_no' => $car_no,
      'car_model' => $car_model,
      'car_vendor' => $car_vendor,
      'service' => $service,
      'reserved' => $reserve,
    );
    $this->db->where('id', $id);
    $this->db->update($this->TABLE_NAME, $data);
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete($this->TABLE_NAME);
  }
}

?>