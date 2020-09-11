<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>test</title>
</head>

<body>
    <div class="container"></div>
    <form action="/test" method="POST" enctype="multipart/form-data" class="border border-light p-5">
    @csrf
        <p class="h4 mb-4 text-center">Upload File</p>

        <div class="text-center"">
            <input type="file" class=" mb-4 form-control-file" name="file">
        </div>

        <button class="btn btn-info btn-block my-4" type="submit">Create</button>
    </form>
    <br>
    <br>
    <br>

    <form action="/test/email" method="POST" enctype="multipart/form-data" class="border border-light p-5">
    @csrf
        <p class="h4 mb-4 text-center">Upload File</p>

        <div class="text-center"">
            <input type="text" class=" mb-4 form-control-file" name="filename">
        </div>

        <button class="btn btn-info btn-block my-4" type="submit">Send</button>
    </form>
    </div>
</body>
</html>
