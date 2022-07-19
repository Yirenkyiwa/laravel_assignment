<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<form  class="form-control w-50" method="POST" action="{{ url('store-form') }}">+
            @csrf
            <h1 class="form-group">User Details</h1>
            <hr>
            <div class="form-row flex justify-content-center">
            <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tele" class="form-control" id="phone" placeholder="Phone" name="phone" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    <!-- <a href="#" style="margin-left: 10%">Reset Password</a> -->
                </div>

                <!-- <div class="form-group">
                    <p>Don't Have an account yet!: <br><a href="register.html">Register</a></p>
                </div> -->
            </div>
            
      </form>
</body>
</html>