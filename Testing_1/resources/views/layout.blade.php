<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
  </head>
  <style>
    .main{
      height:100vh;

    }
    .box{
      box-shadow:rgba(100,100,111,0.2) 0px 7px 29px 0px;
      border-radius:20px;
      width:50%
    }
  </style>
  <body class="bg-dark text-white">
    <div class="container-fluid d-flex justify-content-between mb-5 p-0">
      <h3>New User</h3>
    
        <form action=""method="post">
          <div class="row">
            <div class="col-md-9">
                <div class="form-group">
                  <div class="row">
                    <label for="" class="col-md-3 h5">User</label>
                    <div class="col-md-9">
                      <input type="text"name="" id=""class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <div class="row">
                    <label for="" class="col-md-3 h5">Password</label>
                  </div>
                </div>
            </div>
            <div class="form-group mt-3">
              <div class="row">
                <label for="" class="col-md-3 h5">Confirm Password</label>
                <div class="col-md-9">
                  <input type="text" name="" id="" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="row mt-4">
              <div class="col-6 col-md-12 text-center">
                <button class="btn btn-success">OK</button>
              </div>
              <div class="col-6 col-md-12 text-center">
                <button class="btn btn-danger mt-md-4">Close</button>
              </div>
            </div>
          </div>
        </form>
    </div>
  </body>
</html>