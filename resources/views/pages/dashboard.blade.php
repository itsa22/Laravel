<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md4 col-md-offset-4" style="margin-top:20px;">
            <h4>Welcome to your Dashboard!</h4><hr>
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td><a href="logout">Logout</a></td>
                            </tr>
                        </tbody>
                    </table>
        </div>
    </div>
</div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
    </script>
</html>