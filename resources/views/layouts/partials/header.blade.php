<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('assets/img/logo.png') }}" />
    <title>Insurence</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.min.css') }}" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" integrity="sha512-X/RSQYxFb/tvuz6aNRTfKXDnQzmnzoawgEQ4X8nZNftzs8KFFH23p/BA6D2k0QCM4R0sY1DEy9MIY9b3fwi+bg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!-- Main style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" media="all" />
</head>
<body>
    <div class="container full-content">
        <header>
            <div class="row">
                <div class="left-nav col-md-5">
                    <ul class="nav">
                        {{-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Insureance</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/employee-claim">Employee's Claims</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home-claim">Home Claims</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/off-shop-claim">Office / Shop Claims</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li> --}}
                    </ul>
                </div>
                <div class="col-md-2 logo">
                    <a href="/employee-claim">
                        <img src="{{ asset('assets/img/logo2.png') }}" alt="" />
                    </a>
                </div>
                {{-- <div class="col-md-5 right-nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                </div> --}}
            </div>
            
        </header>