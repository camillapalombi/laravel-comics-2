<!-- HEADER -->

<header>

    <div class="container header-container">
      <div class="container-header-left">
          <img class="logo-dc-logo" src="/img/dc-logo.png" alt="DC Logo">
      </div>
      <div class="container-header-right">
          <ul>
              <li><a href="#!"> CHARACTERS </a></li>
              <li class="{{ Route::current()->getName() == 'comics' || Route::current()->getName() == 'comic' ? 'activeLi' : '' }}"><a href="{{ route('comics') }}" class="{{ Route::current()->getName() == 'comics' || Route::current()->getName() == 'comic' ? 'active' : '' }}"> COMICS </a></li>
              <li><a href="#!"> MOVIES </a></li>
              <li><a href="#!"> TV </a></li>
              <li><a href="#!"> GAMES </a></li>
              <li><a href="#!"> COLLECTIBLES </a></li>
              <li><a href="#!"> VIDEOS </a></li>
              <li><a href="#!"> FANS </a></li>
              <li><a href="#!"> NEWS </a></li>
              <li><a href="#!"> SHOP </a></li>
          </ul>
      </div>
    </div>

</header>