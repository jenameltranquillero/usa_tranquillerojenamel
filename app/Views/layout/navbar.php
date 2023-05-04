<nav class="navbar navbar-light fixed-top bg-light shadow-sm">
      <div class="container-lg">
         <a class="navbar-brand text-danger fw-bold fs-3" href="#"><?= $title ?></a>
         <div class="dropdown">
            <button class="btn btn-secondary btn-danger px-3" type="button" id="dropdownMuneButton" data-bs-toggle="dropdown" aria-expanded="false">
               <i class="fas fa-bars"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
               <li><a class="dropdown-item" href="#home">Home</a></li>
               <li><a class="dropdown-item" href="#about">About</a></li>
               <li><a class="dropdown-item" href="#services">Services</a></li>
               <li><a class="dropdown-item" href="#portfolio">Portfolio</a></li>
               <li><a class="dropdown-item" href="#contact">Contact</a></li>
            </ul>
         </div>
      </div>
   </nav>

<div class="bg-custom py-1">
    <div class="container-fluid">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/contact">Inbox</a>
            </li>
        </ul>
    </div>
</div>