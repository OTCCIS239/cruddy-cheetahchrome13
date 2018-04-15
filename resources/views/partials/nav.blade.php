<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
    <a class="navbar-brand" href="#">On The Bench</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"><span class="navbar-toggler-icon"></span></button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
             <li class="nav-item @if(Route::is('home')) active @endif"> 
                <a href="{{ route('home') }}" class="nav-link">Home</a>
            </li>
            
            <li class="nav-item @if(Route::is('gems.*')) active @endif">
                <a href="{{ route('gems.index') }}" class="nav-link">Gems</a>
            </li>

            <li class="nav-item @if(Route::is('metals.*')) active @endif">
                <a href="{{ route('metals.index') }}" class="nav-link">Metals</a>
            </li>

            <li class="nav-item @if(Route::is('tools.*')) active @endif">
                <a href="{{ route('tools.index') }}" class="nav-link">Tools</a>
            </li>

            <li class="nav-item @if(Route::is('supplies.*')) active @endif">
                <a href="{{ route('supplies.index') }}" class="nav-link">Supplies</a>
            </li>

            <li class="nav-item @if(Route::is('jewelry.*')) active @endif">
                <a href="{{ route('jewelry.index') }}" class="nav-link">Jewelry</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>