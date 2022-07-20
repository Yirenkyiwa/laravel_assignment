<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <form  style="margin:50px auto" class="form-control w-50" method="POST" action="/edit">
        @csrf
        <h1 class="form-group">Update User Details</h1>
        <hr>
        <div class="form-row flex justify-content-center">
            <div class="form-group">
                {{-- <label for="id">Name</label> --}}
                <input type="hidden" class="form-control" id="id" placeholder="id" name="id" value="{{$data['id']}}" required>
            </div>
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{$data['name']}}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{$data['email']}}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tele" class="form-control mb-2" id="phone" placeholder="Phone" name="phone" value="{{$data['phone']}}" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
            </div>

        </div>
        
  </form>
</body>
</html>