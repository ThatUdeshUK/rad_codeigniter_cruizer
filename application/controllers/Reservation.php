<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

  private $DEFAULT_MODEL = "Reservation_model";

	public function index()
	{
    $this->load->model($this->DEFAULT_MODEL);
    $data['reservations'] = $this->Reservation_model->getAll();
		$this->load->view('header_view', $data);
		$this->load->view('reservation_view', $data);
		$this->load->view('footer_view', $data);
	}

  public function add()
  {
    $this->load->helper('form');
		$this->load->view('header_view');
    $this->load->view('reservation_add_edit');
		$this->load->view('footer_view');
  }

  public function add_reservation()
  {
    $car_no = $this->input->post('car_no');
    $car_model = $this->input->post('car_model');
    $car_vendor = $this->input->post('car_vendor');
    $service = $this->input->post('service');
    $reserve = $this->input->post('reserve');
    if (isset($car_no, $car_model, $car_vendor, $service, $reserve)) {
      $this->load->model($this->DEFAULT_MODEL);
      $this->Reservation_model->insert($car_no, $car_model, $car_vendor, $service, $reserve);
      redirect(base_url());
    } else {
      redirect(base_url());
    }
  }

  public function edit($id)
  {
    $this->load->model($this->DEFAULT_MODEL);
    $reservation = $this->Reservation_model->get($id);

    $data['id'] = $id;
    $data['car_no'] = $reservation->car_no;
    $data['car_model'] = $reservation->car_model;
    $data['car_vendor'] = $reservation->car_vendor;
    $data['service'] = $reservation->service;
    $data['reserved'] = $reservation->reserved;

    $this->load->helper('form');
		$this->load->view('header_view');
    $this->load->view('reservation_add_edit', $data);
		$this->load->view('footer_view');
  }

  public function edit_reservation()
  {
    $id = $this->input->post('id');
    $car_no = $this->input->post('car_no');
    $car_model = $this->input->post('car_model');
    $car_vendor = $this->input->post('car_vendor');
    $service = $this->input->post('service');
    $reserve = $this->input->post('reserve');
    if (isset($id, $car_no, $car_model, $car_vendor, $service, $reserve)) {
      $this->load->model($this->DEFAULT_MODEL);
      $this->Reservation_model->update($id, $car_no, $car_model, $car_vendor, $service, $reserve);
      redirect(base_url());
    } else {
      redirect(base_url());
    }
  }

  public function delete_reservation($id)
  {
    $this->load->model($this->DEFAULT_MODEL);
    if (isset($id)) {
      $this->Reservation_model->delete($id);
      redirect(base_url());
    } else {
      redirect(base_url());
    }
  }
}
