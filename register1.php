<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');


?>


<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="code.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control" placeholder="Enter Username">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="pass" class="form-control" placeholder="Enter Password">
        </div>
        <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" name="cpass1" class="form-control" placeholder="Confirm Password">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="registerbtn" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 fort-weight-bold text-primary">Admin Profile
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addadminprofile">
  Add Admin Profile
</button>
      </h6>
</div>
<div class="card-body">

<?php
if(isset($_SESSION['success']) && $_SESSION['success'] !='')
{
  echo '<h1>'.$_SESSION['success'].'<h1>';
  unset($_SESSION['success']);
}
?>

  <div class="table-responsive">

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Firstname</th>
          <th>Firstname</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
</div>

</div> 

<?php 
include('includes/scripts.php');

?>

