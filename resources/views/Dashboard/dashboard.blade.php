<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <title>Dashboard</title>

    <style>

@media(min-width: 768px){
.news-input {
    width: 50%;
}}

    </style>
    
</head>
<body>
 
    {{-- nabar --}}

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container"><a href="#" class="navbar-brand">Hi</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"> <span class="navbar-toggler-icon"></span></navbar-toggler-icon> </button>
         <div class="collapse navbar-collapse" id="navmenu">  
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="#" class="nav-link">Lesons</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Leaders</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Enemies</a></li>
            </ul>
        </div>
        </div>
    </nav>

    {{-- show case --}}

    <section class="bg-dark text-light p-5 p-lg-2 pt-lg-5 text-cente text-sm-start">
        <div class="container">
            <div class="d-md-flex align-items-center justify-content-between">
            <div>
              <h1>Welcome the <span class="text-warning"> New Hero</span></h1>
              <p class="lead my-5">Saitama One of the Strongest Heroes Ever've Been Seen In Any Animes after Goku ; If You Work as Hard as Them You Might Become a Hero Like Them</p>
              <button class="btn btn-primary btn-lg">Start The Trainings</button>
            </div>
            <img class="img-fluid w-50 h-100 d-none d-md-block" src="{{url('/img/saitama.jpg')}}" alt="" class="">
        </div></div>
    </section>

    {{-- news letter --}}

    <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">Sign Up If You're Not an Student Yet</h3>
                <div class="input-group news-input">
                    <input type="text" class="form-control" placeholder="Enter E-mail">
                 <button class="btn btn-dark btn-lg" type="button">Start</button>
            </div></div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>