<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <a class="navbar-brand" href="#">Recherche Matricule</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Ajouter <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form action="{{ route('students.search') }}" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" name="q" placeholder="Matricule à chercher" aria-label="Search" value="{{ request()->q ?? '' }}">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>