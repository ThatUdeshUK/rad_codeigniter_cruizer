<div class="container mt-5">
  <div >
    <h1 style="display: inline-block;">Reservations</h1>
    <?php echo anchor('reservation/add', 'Add', 'class="btn btn-primary float-right mt-2"'); ?>
  <div>
  <table class="table mt-3">
    <tr>
      <th>Id</th>
      <th>Vehicle Number</th>
      <th>Vehicle Model</th>
      <th>Vehicle Vendor</th>
      <th>Service</th>
      <th>Reserved</th>
      <th>Created</th>
      <th>Actions</th>
    </tr>
    <?php foreach ($reservations as $reservation) { ?>
    <tr>
      <td><?php echo $reservation->id; ?></td>
      <td><?php echo $reservation->car_no; ?></td>
      <td><?php echo $reservation->car_model; ?></td>
      <td><?php echo $reservation->car_vendor; ?></td>
      <td><?php echo $reservation->service; ?></td>
      <td><?php echo $reservation->reserved; ?></td>
      <td><?php echo date_format(date_create($reservation->created),"Y-m-d"); ?></td>
      <td>
        <?php echo anchor("reservation/edit/$reservation->id", "Edit", 'class="btn btn-secondary btn-sm"'); ?>
        <?php echo anchor("reservation/delete_reservation/$reservation->id", "Delete", 'class="btn btn-danger btn-sm"'); ?>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>