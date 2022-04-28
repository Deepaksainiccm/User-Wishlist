
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laravel 8 CRUD Tutorial From Scratch</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
    
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('wishlist.create') }}"> Create wishlist</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>S.No</th>
                <th>user id</th>
                <th>wishlist Name</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($wishlists as $wishlist)
                <tr>
                    <td>{{ $wishlist->id }}</td>
                    <td>{{ Auth::user()->id }}</td>
                    <td>{{ $wishlist->wishlist_name }}</td>
                    
                    <td>
                        <form action="{{ route('wishlist.destroy', $wishlist->id) }}" method="Post">
                            <a class="btn btn-primary " href="{{ route('wishlist.edit', $wishlist->id) }}">Edit</a>
                            <a class="btn btn-primary" href="{{ route('wishlist.show', $wishlist->id) }}">Show</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger show-alert-delete-box " id="delete-confirm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {!! $wishlists->links() !!}

        
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script type="text/javascript">
            $('.show-alert-delete-box').click(function(event){
                var form =  $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                    title: "Are you sure you want to delete this record?",
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    type: "warning",
                    buttons: ["Cancel","Yes!"],
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
            });
        </script>