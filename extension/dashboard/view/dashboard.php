<?php

namespace extension\dashboard\view;

$img = "https://images.pexels.com/photos/281260/pexels-photo-281260.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1";
?>



  <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="height: 600px;">
    <div class="carousel-inner h-100">
      <div class="carousel-item active h-100"><img class="w-100 d-block position-absolute h-100 fit-cover"
          src="<?php echo $img;?>" alt="Slide Image" style="z-index: -1;">
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

