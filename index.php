<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <a class="navbar-brand" href="#">Form</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/employForm">Register</a>
            </li>
        </ul>

    </div>
    </div>
</nav>

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form name="my-form" action="pdf.php" method="post">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Student Name</label>
                                    <div class="col-md-6">
                                        <input  autocomplete="off" type="text"  id="full_name" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Class</label>
                                    <div class="col-md-6">
                                        <input autocomplete="off" type="text" id="user_name" class="form-control" name="class">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Depositor</label>
                                    <div class="col-md-6">
                                        <input autocomplete="off" type="text" id="email_address" class="form-control" name="depositor">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Date</label>
                                    <div class="col-md-6">
                                        <input autocomplete="off" type="date" id="phone_number" class="form-control"name="date">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Select Month Fees</label>
                                    <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="jan" value="jan" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            January
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="feb" value="feb" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            February
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="mar" value="mar" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            March
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="apr" value="apr" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            April
                                        </label>
                                        </div><div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="may" value="may" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            May
                                        </label>
                                        </div>
                                        
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Select School You Want To Buy</label>
                                    <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="idcard" value="idcard" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            ID Card
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="book" value="book" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Books
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="uniform" value="uniform" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Uniform
                                        </label>
                                        </div>
                                        
                                    </div>
                                </div>

                                

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" name="submit/**/" class="btn btn-primary">
                                        Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>