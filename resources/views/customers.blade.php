<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel Crud Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3 style="color: pink;">Customer Manage</h3>
        <form action=" route('customers.store')" method="POST">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Customer Name</label>
                <input type="text" class="form-control" name="name" placeholder="Customer Name">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Customer Address</label>
                <input type="text" class="form-control" name="address" placeholder="Customer Address">
            </div>

        </form>
    </div>
</body>

</html>