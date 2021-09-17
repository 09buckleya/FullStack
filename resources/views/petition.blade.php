@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="">{{ __('Petition') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Rise Of Kingdoms</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="only screen and (min-width: 680px)" />
</head>

<body>
    <div class="container">
        <div class="headerContainer">
            <header>
                <div>
                    <img src="images/rise_of_kingdoms.svg"
                        alt="The image meant to be here is Rise of Kingdoms with a shield and crossed swords behind."
                        id="rokBanner" />
                </div>
                <div class="loginContainer">
                    <?php
              if(isset($_SESSION['login'])) {
            ?>
                    <ul id="logoutList">
                        <li><a href="process/logout.php">Logout</a></li>
                        <li><a href="editProfile.php">Profile</a></li>
                    </ul>
                    <?php
              } else {
            ?>
                    <ul>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="signUp.php">Sign Up</a></li>
                    </ul>
                    <?php
              }
            ?>
                </div>
            </header>
        </div>
        <main>
            <div>
                <h1>Content Creators</h1>
            </div>
            <div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="contentCreators">
                <div>
                    <h2>Chisgule</h2>
                    <div><img src="images/Chisgule.jpg" alt="Chisgule" /></div>
                </div>
                <div>
                    <h2>Dragothien</h2>
                    <div><img src="images/Dragothien.jpg" alt="Dragothien" /></div>
                </div>
                <div>
                    <h2>Gekko</h2>
                    <div><img src="images/Gekko.jpg" alt="Gekko" /></div>
                </div>
                <div>
                    <h2>Legend Rhony</h2>
                    <div><img src="images/Rhony.jpg" alt="Legend Rhony" /></div>
                </div>
            </div>
        </main>
        <footer>
            <div>
                <p>&copy;2020 ROK Lilith</p>
            </div>
        </footer>
    </div>
    <script src="js/main.js"></script>
</body>

</html>
@endsection