<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta username="viewport" content="width=device-width, initial-scale=1">
    <title>Task Management login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!-- Bootstrap Link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Jquery & Ajax-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- CSS File -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body id="confirm">
    <div class="row justify-content-center mt-5 ">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class=" card-title">Login</h1>
                </div>
                <div class="card-body">
                    <div class="alert alert-success " id="success" role="alert">
                    </div>
                    <Form id="loginForm">
                        <div class="mb-3">
                          <label for="username" class="form-label">username</label>
                          <input type="text" name="username" class="form-control" id="username" placeholder="username" required>
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                          <div class="d-grid">
                          <button type="submit" class="btn btn-primary">Login</button><br>
                          <button onclick="history.back()" class="btn btn-secondary w-50">Go Back</button>
                        </div>
                        </div>
                      </Form>
                </div>
            </div>
        </div>
    </div> 
    <script>
       $(document).ready(function () {
        $('#loginForm').submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'actions/login.php',
                data: $(this).serialize(),
                success: function (response) {
                  $('#success').html(response);
                },
                error: function(response){
                  $('#failure').html(response);
                }
            });
        });
    });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>