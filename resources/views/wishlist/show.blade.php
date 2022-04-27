<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-lg-12 mx-3">

            <div class="pull-left">
                <h2>wishlist </h2>
            </div>

            <table class="table " >
                <tr>
                    <th>S.no</th>
                    <td>{{$wishlist->id}}</td>
                </tr>
                <tr>
                    <th>user id</th>
                    <td>{{ Auth::user()->id }}</td>
                    
                </tr>
                
                <tr>
                    <th>wishlist name</th>
                    <td>{{$wishlist->wishlist_name}}</td>
                </tr>

                

            </table>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('wishlist.index') }}" enctype="multipart/form-data">
                    Back</a>
            </div>
            
        </div>
    </div>
</body>
</html>