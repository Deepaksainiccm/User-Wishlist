<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <title>Document</title>

</head>

<body>
    <div class="container">
        <div class="col-lg-12 mx-3">

            <div class="pull-left">
                <h2>wishlist </h2>
            </div>

            <table class="table" id="wishlist_table_show">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>user id</th>
                        <th>wishlist name</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $wishlist->id }}</td>
                        <td>{{ Auth::user()->id }}</td>
                        <td>{{ $wishlist->wishlist_name }}</td>
                    </tr>


                </tbody>



            </table>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('wishlist.index') }}" enctype="multipart/form-data">
                    Back</a>
            </div>

        </div>
    </div>
</body>

<script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#wishlist_table_show').DataTable();
    });
</script>

</html>
