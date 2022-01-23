<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
    <!-- Trigger the modal with a button -->
    

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
            <p>
              <h1 class="mt-5" id="register-success" style="text-align: center;">Register</h1>
              <form class="mx-auto" id="register-form">
                <div class="mb-3 mt-5 mx-auto">
                  <label for="username" class="form-label">Username</label>
                  <input type="username" class="form-control" name="username" id="username"
                    aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="mb-3">
                  <label for="cpassword" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" name="cpassword" id="cpassword">
                </div>
                <button type="button" class="btn btn-primary mt-3" id="reg-btn">Submit</button>
              </form>
            </p>
          </div>
        </div>

      </div>
    </div>

  </div>

</body>

</html>