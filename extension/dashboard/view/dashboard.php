<?php

namespace extension\dashboard\view;

?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>TIMO</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
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
  <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="height: 600px;">
    <div class="carousel-inner h-100">
      <div class="carousel-item active h-100"><img class="w-100 d-block position-absolute h-100 fit-cover"
          src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image" style="z-index: -1;">
        <div class="container d-flex flex-column justify-content-center h-100">
          <div class="row">
            <div class="col-md-6 col-xl-4 offset-md-2">
              <div style="max-width: 350px;">
                <h1 class="text-uppercase fw-bold">Tevreden Impact <br>met <br>overzicht</h1>
                <p class="my-3">Organisatie, structuur en functionaliteit in een overzicht</p><a
                  class="btn btn-primary btn-lg me-2" role="button" href="#">Projecten</a><a
                  class="btn btn-outline-primary btn-lg" role="button" href="#">Socials</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <div class="container py-4 py-xl-5">
    <div class="row mb-5">
      <div class="col-md-8 col-xl-6 text-center mx-auto">
        <h2>Het ontstaan van het project</h2>
        <p class="w-lg-50">Gedurende mijn MBO-opleiding heb ik ervaring opgedaan met verschillende
          projectmanagementtools, elk op afzonderlijke platforms met eigen betalingssystemen. Met de ontwikkeling van
          T.I.M.O. heb ik deze diverse websites geconsolideerd tot één geïntegreerd intranet, dat selectief toegankelijk
          is voor een beperkte groep gebruikers.</p>
      </div>
    </div>
    <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">
            <div
              class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
                class="bi bi-check-square">
                <path
                  d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z">
                </path>
                <path
                  d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z">
                </path>
              </svg></div>
            <h4 class="card-title">Impact</h4>
            <p class="card-text">Stel je voor: een todo-lijst met prioriteiten, datums, tijdregistratie en
              beschrijvingen. Daarnaast houd je apart een git bij en ook nog je urenstaat. Wat als al deze informatie
              bij elkaar verzameld wordt, zodat je reflectie zo minimaal mogelijk is? Je kunt je zo focussen op wat echt
              belangrijk is: je doelen en het werk afkrijgen!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body p-4">
            <div
              class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em"
                fill="currentColor"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                <path
                  d="M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm97 289c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L79 303c-9.4 9.4-9.4 24.6 0 33.9l48 48c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-31-31 31-31zM257 255c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l31 31-31 31c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l48-48c9.4-9.4 9.4-24.6 0-33.9l-48-48z">
                </path>
              </svg></div>
            <h4 class="card-title">Overzicht</h4>
            <p class="card-text">Met alles geïntegreerd, wordt multitasken overbodig. Je focust op één taak tegelijk,
              wetend dat het systeem de rest bijhoudt. Het resultaat? Minder stress, meer overzicht en efficiëntere
              projectuitvoering.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body p-4">
            <div
              class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                fill="currentColor"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                <path
                  d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4c26.5 9.6 56.2 15.1 87.8 15.1c124.7 0 208-80.5 208-160s-83.3-160-208-160S48 160.5 48 240c0 32 12.4 62.8 35.7 89.2c8.6 9.7 12.8 22.5 11.8 35.5c-1.4 18.1-5.7 34.7-11.3 49.4c17-7.9 31.1-16.7 39.4-22.7zM21.2 431.9c1.8-2.7 3.5-5.4 5.1-8.1c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208s-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6c-15.1 6.6-32.3 12.6-50.1 16.1c-.8 .2-1.6 .3-2.4 .5c-4.4 .8-8.7 1.5-13.2 1.9c-.2 0-.5 .1-.7 .1c-5.1 .5-10.2 .8-15.3 .8c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c4.1-4.2 7.8-8.7 11.3-13.5c1.7-2.3 3.3-4.6 4.8-6.9c.1-.2 .2-.3 .3-.5z">
                </path>
              </svg></div>
            <h4 class="card-title">Conclusie</h4>
            <p class="card-text">Het ontstaan van dit project is voortgekomen uit een geconstateerd gebrek aan
              automatisering binnen mijn opleidingstrajecten. De huidige situatie vereist het handmatig bijhouden van
              documentatie op diverse locaties, wat het risico op gegevensverlies vergroot. Door dit project te
              initiëren, streef ik ernaar Tevreden Impact Met Overzicht (T.I.M.O.) te realiseren, waarbij efficiëntie en
              betrouwbaarheid centraal staan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="text-center py-4">
    <div class="container">
      <div class="row row-cols-1 row-cols-lg-3">
        <div class="col">
          <p class="text-muted my-2">Portofolio website Timo Bergthaler</p>
        </div>
        <div class="col">
          <ul class="list-inline my-2">
            <li class="list-inline-item me-4">
              <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                  height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-linkedin">
                  <path
                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401m-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4">
                  </path>
                </svg></div>
            </li>
            <li class="list-inline-item me-4">
              <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                  height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-github">
                  <path
                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8">
                  </path>
                </svg></div>
            </li>
            <li class="list-inline-item">
              <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                  height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope-at">
                  <path
                    d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z">
                  </path>
                  <path
                    d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z">
                  </path>
                </svg></div>
            </li>
          </ul>
        </div>
        <div class="col">
          <ul class="list-inline my-2">
            <li class="list-inline-item"><a class="link-secondary" href="#">Privacy Policy</a></li>
            <li class="list-inline-item"><a class="link-secondary" href="#">Terms of Use</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>