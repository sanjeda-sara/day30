<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href=" " class="navbar-brand">Logo</a>
        <button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mx-auto">
                <li class="navbar-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="navbar-item"><a href="{{route('full-name')}}" class="nav-link">Full Name</a></li>
                <li class="navbar-item"><a href="{{route('calculator')}}" class="nav-link">Calculator</a></li>
                <li class="navbar-item"><a href="{{route('student')}}" class="nav-link">Student</a></li>
            </ul>
        </div>
    </div>
</nav>
