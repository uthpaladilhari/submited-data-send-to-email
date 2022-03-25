<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>YTA</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Place Appointments</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container pt-5">
          <form class="row g-3 needs-validation" name="mailinfo" method="post" action="sendmail.php"  novalidate>
              <div class="col-md-3">
                  <label for="validationCustom01" class="form-label">Title</label>
                  <select class="form-select" id="validationCustom01" required>
                    <option selected disabled value="">Select</option>
                    <option>Mr</option>
                    <option>Mrs</option>
                    <option>Miss</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid title.
                  </div>
              </div>
              <div class="col-md-9">
                <label for="validationCustom02" class="form-label">Patient name</label>
                <input type="text" class="form-control" id="validationCustom02" name="patientname" placeholder="Name" required>
                <div class="invalid-feedback">
                  Patient name is required
                </div>
              </div>
              <div class="col-md-2">
                  <label for="validationCustom03" class="form-label">Mobile Number</label>
                  <select class="form-select" id="validationCustom03" required> 
                    <option>+94</option>
                    <option>+98</option>
                    <option>+99</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid title.
                  </div>
              </div>
              <div class="col-md-10">
                <label for="validationCustom04" class="form-label">Mobile Number</label>
                <input type="tel" class="form-control" id="validationCustom04" name="mobilenumber" placeholder="Ex:0715611267" required>
                <div class="invalid-feedback">
                  Phone number is required
                </div>
              </div>
              <div class="col-md-12">
                <label for="validationCustomUsername" class="form-label">Email</label>
                <div class="input-group has-validation">
                  <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                  <input type="email" class="form-control" id="validationEmail" name="email" placeholder="Email">
                  <div class="invalid-feedback">
                      Please provide a valid email.
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <label for="validationCustom05" class="form-label">Area</label>
                <input type="text" class="form-control" id="validationCustom05" name="area" placeholder="City">
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              <div class="col-md-12">
                <label for="validationCustom06" class="form-label">NIC</label>
                <input type="text" class="form-control" id="validationCustom06" name="nic" placeholder="NIC" required>
                <div class="invalid-feedback">
                  NIC is required
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
              </div>
            </form>
      </div>
</body>


<script>
(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

</html>
