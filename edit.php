<?php
include('httpCurl.php');

$tpin = safe_data($_GET['tpin']);
$breg = safe_data($_GET['breg']);
$tname = safe_data($_GET['tname']);
$bdate = safe_data($_GET['bdate']);
$mnumber = safe_data($_GET['mnumber']);
$email = safe_data($_GET['email']);
$plocation = safe_data($_GET['plocation']);

$data = array(
    "TPIN"=>$tpin,
    "BusinessCertificateNumber"=>$breg,
    "TradingName"=>$tname,
    "BusinessRegistrationDate"=>$bdate,
    "MobileNumber"=>$mnumber,
    "Email"=>$email,
    "PhysicalLocation" =>$plocation
);

function safe_data($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



include('partials/header.php')

?>

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h6>Creating Tax Payer</h6>
                    <a  class="btn bg-gradient-info mb-0" href="index.php"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="row">
                    <div class="col-xl-10 col-lg-10 col-md-6 d-flex flex-column mx-auto">
                      <div class="card card-plain mt-3">
                        <form role="form" method="POST" action="update_action.php">
                            <div class="row">
                                <div class="col-md-6"><label>TPIN</label>
                                    <div class="mb-3">
                                      <input type="text" class="form-control" name="TPIN" value="<?php  echo $tpin ?>" placeholder="TPIN">
                                    </div>
                                </div>
                                <div class="col-md-6"><label>Business Certificate Number</label>
                                    <div class="mb-3">
                                      <input type="text" name="BusinessCertificateNumber" value="<?php  echo $breg ?>" class="form-control" placeholder="Business Certificate Number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><label>Trading Name</label>
                                    <div class="mb-3">
                                      <input type="text" name="TradingName" value="<?php  echo $tname ?>" class="form-control" placeholder="Trading Name">
                                    </div>
                                </div>
                                <div class="col-md-6"><label>Business Registration Date</label>
                                    <div class="mb-3">
                                      <input type="date" name="BusinessRegistrationDate" value="<?php  echo $bdate ?>" class="form-control" placeholder="Business Registration Date">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><label>Mobile Number</label>
                                    <div class="mb-3">
                                      <input type="text" name="MobileNumber" value="<?php  echo $mnumber ?>" class="form-control" placeholder="Mobile Number">
                                    </div>
                                </div>
                                <div class="col-md-6"><label>Email</label>
                                    <div class="mb-3">
                                      <input type="email" name="Email" value="<?php  echo $email ?>" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <label>Physical Location</label>
                            <div class="mb-3">
                              <input type="text" name="PhysicalLocation" value="<?php  echo $plocation ?>" class="form-control" placeholder="Physical Location">
                            </div>
                            <div class="text-center">
                              <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-4">Submit</button>
                            </div>
                          </form>
                      </div>
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