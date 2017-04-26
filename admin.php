<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
 <!-- Navbar -->
    <?php include("./navbar.php");?>

    <!-- Form -->
    <div class="container">
        <form class="form-horizontal" id="form_members" role="form" action="new_pokemon.php" method="POST">
        <legend>Pokemon Info</legend>
        <div class="form-group">
            <label for="name" class="col-sm-2">Name</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="name" id="name" placeholder="Bulbasaur">
            </div>
            <label for="id" class="col-sm-2">ID</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="id" id="id" placeholder="001">
            </div>
        </div>
        <div class="form-group">
            <label for="type1" class="col-sm-2">Type 1</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="type1" id="type1" placeholder="Fire">
            </div>
            <label for="type2" class="col-sm-2">Type 2</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="type2" id="type2" placeholder="Grass (or leave blank if not applicable)">
            </div>
        </div>
        <div class="form-group">
            <label for="url" class="col-sm-2">Image URL</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="url" id="url" placeholder="image URL">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-10">
                <button type="submit" class="btn btn-warning" name="submit" id="submit">Submit</button>
                
            </div>
        </div>
        </form>
    </div>
</body>

</html>