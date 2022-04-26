<html>
    <head>
        <title>Jukebox - @yield('title')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" 
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('../css/style.css') }}">
    </head>
    <body>
        
        @section('navbar')
            <nav class="nav justify-content-center bg-info"> 
                <a class="nav-link text-white" href="/">Home</a> 
                <a class="nav-link text-white" href="/queue">Queue</a> 
                <a class="nav-link text-white" href="/playlist">Playlists</a> 
                @guest
                    <a class="nav-link text-white" href="/login">Login</a>
                    <a class="nav-link text-white" href="/register">Register</a>  
                @endguest
                @auth
                    <a class="nav-link text-white" href="{{ route('logout') }}">Logout</a>
                @endauth
            </nav>
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('footer')
            {{-- <footer class="bg-secondary text-white text-center">Jukebox - Kenny Nathalia</footer> --}}
        @show

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </body>
</html>