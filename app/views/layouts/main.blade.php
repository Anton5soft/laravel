<html>
<head>

</head>
<body>
<div class="navigation">
    @section('navigation')
    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerd Alert</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('nerds') }}">View All Nerds</a></li>
                <li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>
            </ul>
        </nav>
    @show
</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>