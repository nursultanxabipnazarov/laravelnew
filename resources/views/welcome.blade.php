<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
 <div class="container">

    <form action="/category-create" method="Post">
    @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text"  name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"> textarea</label>
            <textarea class="form-control" name = "text" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
           <input type="submit" name = "ok">
        </div>
    </form>
    
    <h1>
    <?php 
    ECHO "<pre>";
        var_dump($data);
    ECHO "</pre>";
        
        ?>
    </h1>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>