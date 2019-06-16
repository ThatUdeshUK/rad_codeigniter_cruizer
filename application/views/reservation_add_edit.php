<div class="container mt-5">
  <?php echo anchor('', 'Back', 'class="btn btn-light"'); ?>
	<h1 class="mt-3"><?php if (isset($id)) echo "Edit"; else "Add"; ?> Reservation</h1>
  <div class="row">
    <div class="col col-sm-12 col-md-6">
    <?php if(isset($id)) {
        echo form_open('reservation/edit_reservation');
        $data = array(
          'id'  => $id
        );
        echo form_hidden($data);
      } else {
        echo form_open('reservation/add_reservation');
      }?>
      <div class="form-group">
        <label for="car_no">Vehicle Number</label>
        <input type="text" class="form-control" name="car_no" id="car_no" 
          placeholder="Enter vehicle number" value="<?php if (isset($car_no)) echo $car_no; ?>" required>
      </div>
      <div class="form-group">
        <label for="car_model">Vehicle Model</label>
        <input type="text" class="form-control" name="car_model" id="car_model" 
          placeholder="Enter vehicle model" value="<?php if (isset($car_model)) echo $car_model; ?>" required>
      </div>
      <div class="form-group">
        <label for="car_vendor">Vehicle Vendor</label>
        <input type="text" class="form-control" name="car_vendor" id="car_vendor" 
          placeholder="Enter vehicle vendor" value="<?php if (isset($car_vendor)) echo $car_vendor; ?>" required>
      </div>
      <div class="form-group">
        <label for="service">Service</label>
        <input type="text" class="form-control" name="service" id="service" 
          placeholder="Enter required service" value="<?php if (isset($service)) echo $service; ?>" required>
      </div>
      <div class="form-group">
        <label for="reserve">Reserve On</label>
        <input type="date" class="form-control" name="reserve" id="reserve" 
          placeholder="Enter date to reserve"  value="<?php if (isset($reserved)) echo $reserved; ?>" required>
      </div>
      <button type="submit" class="btn btn-primary float-right">
        <?php if (isset($id)) echo "Edit"; else "Add"; ?> Reservation
      </button>
    <?php echo form_close(); ?>
    </div>
  </div>
</div>