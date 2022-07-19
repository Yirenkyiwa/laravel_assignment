<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View all Users</title>
</head>
<body>
    <h1>Show all Users</h1>

    <table style="height: 100px;" border=1>  
        <tr style="background-color:gold">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Edit</th>
        </tr>

        @foreach ($users as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['phone']}}</td>
            <td><button>Edit</button></td>
        </tr>
        @endforeach
        
    </table>
</body>
</html>

