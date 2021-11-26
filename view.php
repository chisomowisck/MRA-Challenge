<?php
include('httpCurl.php');

$tpin = $_GET['tpin'];
$businessCert = $_GET['breg'];
$tradingName = $_GET['tname'];
$businessReg = $_GET['bdate'];
$mobileNumber = $_GET['mnumber'];
$email = $_GET['email'];
$physicalAddress = $_GET['plocation'];


include('partials/header.php')

?>

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h6></h6>
                    <a  class="btn bg-gradient-info mb-0" href="index.php"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                      <div class="col-md-8 d-flex align-items-center">
                        <h6 class="mb-0">Tax Payer Information</h6>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-3">
                    <hr class="horizontal gray-light my-4">
                    <table class='table table-striped'>
                      <tr>
                        <td>TPIN</td>
                        <td><?php echo $tpin ?></td>
                      </tr>
                      <tr>
                        <td>Business Certificate Number</td>
                        <td><?php echo $businessCert ?></td>
                      </tr>
                      <tr>
                        <td>Trading Name</td>
                        <td><?php echo $tradingName ?></td>
                      </tr>
                      <tr>
                        <td>Business Registration Date</td>
                        <td><?php echo $businessReg ?></td>
                      </tr>
                      <tr>
                        <td>Mobile Number</td>
                        <td><?php echo $mobileNumber ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><?php echo $email ?></td>
                      </tr>
                      <tr>
                        <td>Physical Location</td>
                        <td><?php echo $physicalAddress ?></td>
                      </tr>
                    </table>
                  </div>
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