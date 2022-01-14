<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- CSS --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
    integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="{{ URL::asset('css/furnishsetable.css') }}" rel="stylesheet">

     <!-- Font Awesome JS -->
     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <title>Furnishsetable</title>
</head>

<body>
<div>
    <div class="wrapper">

        <nav id="sidebar">

             <div class="sidebar-header">
                 <img src="{{asset('images/FURNISHSETABLE.png')}}" alt="Furnishsetable" style="width:200px; padding: 10px">
             </div>
             <ul class="lisst-unstyled components">
                <li>
                    <a href="/home">Home</a>
                </li>

                <li>
                    <a href="/aboutUs">About Us</a>
                </li>
<<<<<<< Updated upstream

                 <li>
                     <a href="#categorySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Categories</a>
                   <ul class="collapse list-unstyled" id="categorySubmenu">
                        <li><a href="#">Bed Room</a></li>
                        <li><a href="#">Living Room</a></li>
                        <li><a href="#">Garden</a></li>
=======
>>>>>>> Stashed changes

                @auth

                @if(auth()->user()->id)
                    <li>
                        <a href="#">Cart</a>
                    </li>

                @endif

                @endauth

                <li>
                    <a href="#productSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Products</a>
                    <ul class="collapse list-unstyled" id="productSubmenu">
                        <li><a href="#">Living Room</a></li>
                        <li><a href="#">Bedroom</a></li>
                        <li><a href="#">Kitchen</a></li>
                        <li><a href="#">Bathroom</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact Us</a></li>

             </ul>
        </nav>

       <div id="content" style="display:flex; flex-direction:column">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="row">
                        <button type="button" id="sidebarCollapse" class="btn  btn-warning">
                            <i class="fas fa-align-left"></i>
                        </button>

                    </div>
                </div>
<<<<<<< Updated upstream
                <div>
                    <div class="input-group rounded">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                          <i class="fas fa-search"></i>
                        </span>
                      </div>
                </div>
                    <div class="col">
                        <a href="/login">Login</a>
                    </div>
                    <div class="col">
                            <a href="/register">Register</a>
=======

                @auth

                @if (auth()->user()->id)

                <div class="col">
                    <a href="/logout">Logout</a>
                </div>

                @endif

                @if (auth()->user() == null)
                    <div class="col">
                        <a href="/login">Login</a>
                    </div>
                    <div class="/register">
                        <a href="/register">Register</a>
>>>>>>> Stashed changes
                    </div>

                @endif

                @endauth

                <div class="col">
                    <a href="/login">Login</a>
                </div>
                <div class="/register">
                    <a href="/register">Register</a>
                </div>



            </nav>
            <div style="display:flex; justify-content:center; margin-top:50px">
                <br>
                @yield('content')
                <br>
            </div>
        </div>

</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>

    $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });

    </script>

</body>

</html>
