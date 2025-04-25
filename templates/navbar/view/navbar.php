<?php

namespace templates\navbar\view;

?>

<nav class="navbar navbar-expand-md bg-body py-3" style="background: var(--bs-info);">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="index.html"><span
          class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"><svg
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
            fill="currentColor"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
            <path
              d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z">
            </path>
          </svg></span><span>T.I.M.O.</span></a><button data-bs-toggle="collapse" class="navbar-toggler"
        data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navcol-2">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"></li>
          <li class="nav-item"></li>
          <li class="nav-item"></li>
          <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false"
              data-bs-toggle="dropdown" href="#">About me</a>
            <div class="dropdown-menu"><a class="dropdown-item" href="#">Social media</a><a class="dropdown-item"
                href="#">C.V.</a><a class="dropdown-item" href="blogpost.html">Blog</a><a class="dropdown-item"
                href="#">Over mij</a></div>
          </li>
          <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false"
              data-bs-toggle="dropdown" href="#">Projects&nbsp;</a>
            <div class="dropdown-menu"><a class="dropdown-item" href="projecttemplate.html">Projecten</a><a
                class="dropdown-item" href="#">Todolist</a><a class="dropdown-item" href="#">BPV registratie</a><a
                class="dropdown-item" href="#">Reflectie generator</a><a class="dropdown-item" href="#">Terminal</a><a
                class="dropdown-item" href="#">Analytics</a><a class="dropdown-item" href="#">Kanban board</a><a
                class="dropdown-item" href="#">Minecraft mods</a><a class="dropdown-item" href="#">Embedded</a></div>
          </li>
        </ul><a class="btn btn-primary ms-md-2" role="button" href="#">Login</a>
      </div>
    </div>
  </nav>