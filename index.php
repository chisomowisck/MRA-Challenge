<?php
include('httpCurl.php');
// session_start();
if(!$_SESSION["email"]){
   header('Location: login.php');
}


$data = httpRequestGet('/Taxpayers/getAll');
$dd = json_decode($data);
include ('partials/header.php')

?>

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h6>Tax Payers List</h6>
                    <a  class="btn bg-gradient-dark mb-0" href="create.php"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Card</a>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TPIN</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Trading Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Location</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach($dd as $d){
                    ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php   echo $d->TPIN; ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php   echo $d->TradingName; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php   echo $d->Email; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php   echo $d->PhysicalLocation; ?></span>
                      </td>
                      <td class="align-middle">
                        <a class="btn btn-link text-dark px-3 mb-0" href="view.php?tpin=<?php echo $d->TPIN ?>&breg=<?php echo $d->BusinessCertificateNumber ?>
                        &tname=<?php echo $d->TradingName ?> &bdate= <?php echo $d->BusinessRegistrationDate ?> &mnumber= <?php echo $d->MobileNumber ?>
                        &email=<?php echo $d->Email ?> &plocation=<?php echo $d->PhysicalLocation ?>"><i class="fas fa-eye text-dark me-2" aria-hidden="true"></i>View</a>
                        <a class="btn btn-link text-info px-3 mb-0" href="edit.php?tpin=<?php echo $d->TPIN ?>&breg=<?php echo $d->BusinessCertificateNumber ?>
                        &tname=<?php echo $d->TradingName ?> &bdate= <?php echo $d->BusinessRegistrationDate ?> &mnumber= <?php echo $d->MobileNumber ?>
                        &email=<?php echo $d->Email ?> &plocation=<?php echo $d->PhysicalLocation ?>"><i class="fas fa-pencil-alt text-info me-2" aria-hidden="true"></i>Edit</a>
                        <a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-link text-danger text-gradient px-3 mb-0" href="delete_action.php?id=<?php echo $d->TPIN ?>"><i class="far fa-trash-alt me-2"></i>Delete</a>
                      </td>
                    </tr>
                  <?php
                          }
                  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>