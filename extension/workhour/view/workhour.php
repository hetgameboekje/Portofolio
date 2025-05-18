<div class="container mt-5">
  <h2>Urenstaat week (ma-zo)</h2>
  <form id="urenstaatForm">
    <div class="mb-3 row">
      <label for="anyDate" class="col-sm-1 col-form-label">Week:</label>
      <div class="col-sm-2">
        <input type="date" class="form-control" id="anyDate" name="anyDate" required>
      </div>
    </div>
    <table class="table table-bordered align-middle">
      <thead class="table-light">
        <tr>
          <th>Dag</th>
          <th>Datum</th>
          <th colspan="3">Reis</th>
          <th>Begintijd</th>
          <th>Eindtijd</th>
          <th>Pauze (minuten)</th>
          <th>Opmerking</th>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th>Vertrek</th>
          <th>Aankomst</th>
          <th>Retour</th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody id="weekRows"></tbody>
    </table>
    <button type="submit" class="btn btn-primary">Verstuur</button>
  </form>
  
  <!-- Template voor een weekrij -->
  <template id="weekRowTemplate">
    <tr>
      <td class="day-name"></td>
      <td><input type="date" class="form-control week-date" readonly></td>
      <td>
        <select class="form-select" data-mdb-select-init>
          <option value="">--</option>
          <option value="thuis">Thuis</option>
          <option value="kantoor">Kantoor</option>
          <option value="klant">Klant</option>
        </select>
      </td>
      <td>
        <select class="form-select" data-mdb-select-init>
          <option value="">--</option>
          <option value="thuis">Thuis</option>
          <option value="kantoor">Kantoor</option>
          <option value="klant">Klant</option>
        </select>
      </td>
      <td class="text-center">
        <div class="form-check d-flex justify-content-center align-items-center">
          <input class="form-check-input retour-checkbox" type="checkbox">
        </div>
      </td>
      <td>
        <div class="form-outline timepicker" data-mdb-timepicker-init data-mdb-format24="true">
          <input type="text" class="form-control start-time" autocomplete="off" data-mdb-toggle="timepicker"/>
        </div>
      </td>
      <td>
        <div class="form-outline timepicker" data-mdb-timepicker-init data-mdb-format24="true">
          <input type="text" class="form-control end-time" autocomplete="off" data-mdb-toggle="timepicker"/>
        </div>
      </td>
      <td>
        <input type="number" class="form-control break-field" min="0">
      </td>
      <td>
        <input type="text" class="form-control remark-field">
      </td>
    </tr>
  </template>
</div>

<!-- Bootstrap 5 + MDB JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.4.0/mdb.min.js"></script>
<script>
const dagen = [
  { nl: "Maandag", id: "monday" },
  { nl: "Dinsdag", id: "tuesday" },
  { nl: "Woensdag", id: "wednesday" },
  { nl: "Donderdag", id: "thursday" },
  { nl: "Vrijdag", id: "friday" },
  { nl: "Zaterdag", id: "saturday" },
  { nl: "Zondag", id: "sunday" }
];

document.addEventListener("DOMContentLoaded", function() {
  const tbody = document.getElementById("weekRows");
  const template = document.getElementById("weekRowTemplate");

  dagen.forEach((dag, index) => {
    const clone = template.content.cloneNode(true);

    // Dagnaam
    clone.querySelector(".day-name").textContent = dag.nl;

    // IDs en namen voor inputs
    clone.querySelector(".week-date").id = dag.id;
    clone.querySelector(".week-date").name = `date_${dag.id}`;
    clone.querySelectorAll("select")[0].name = `from_${dag.id}`;
    clone.querySelectorAll("select")[1].name = `to_${dag.id}`;
    clone.querySelector(".start-time").name = `start_${dag.id}`;
    clone.querySelector(".end-time").name = `end_${dag.id}`;
    clone.querySelector(".break-field").name = `break_${dag.id}`;
    clone.querySelector(".retour-checkbox").name = `retour_${dag.id}`;
    clone.querySelector(".remark-field").name = `remark_${dag.id}`;

    tbody.appendChild(clone);
  });
});

// Script om datums van week te berekenen
document.getElementById("anyDate").addEventListener("change", function () {
  const selectedDate = new Date(this.value);
  if (isNaN(selectedDate)) return;

  const dayOfWeek = selectedDate.getDay(); // 0 = zondag
  const diffToMonday = (dayOfWeek + 6) % 7;
  const monday = new Date(selectedDate);
  monday.setDate(selectedDate.getDate() - diffToMonday);

  dagen.forEach((dag, index) => {
    const current = new Date(monday);
    current.setDate(monday.getDate() + index);
    const isoDate = current.toISOString().split("T")[0];
    const dateField = document.getElementById(dag.id);
    if (dateField) {
      dateField.value = isoDate;
    }
  });
});

// Formulier onderscheppen en aangepaste mailto genereren
document.getElementById('urenstaatForm').addEventListener('submit', function(event) {
  event.preventDefault();

  const form = event.target;
  const week = form.anyDate.value;

  // Verzamel alle data
  let urenRegels = [];
  let reisRegels = [];
  let opmerkingen = [];

  dagen.forEach(dag => {
    const date = form[`date_${dag.id}`].value;
    const from = form[`from_${dag.id}`].value;
    const to = form[`to_${dag.id}`].value;
    const retour = form[`retour_${dag.id}`].checked ? "Ja" : "Nee";
    const start = form[`start_${dag.id}`].value.trim();
    const end = form[`end_${dag.id}`].value.trim();
    const pauze = form[`break_${dag.id}`].value;
    const opmerking = form[`remark_${dag.id}`].value.trim();

    // Alleen toevoegen als zowel start als end is ingevuld
    if (start && end) {
      urenRegels.push(
        `${dag.nl} (${date}): ${start} - ${end} (pauze: ${pauze} min)`
      );
      reisRegels.push(
        `${dag.nl} (${date}): ${from} -> ${to}, Retour: ${retour}`
      );
      if (opmerking) {
        opmerkingen.push(`${dag.nl} (${date}): ${opmerking}`);
      }
    }
  });

  let body = `Urenstaat voor week: ${week}\n\n`;

  // Uren
  if (urenRegels.length > 0) {
    body += "Uren:\n";
    urenRegels.forEach(r => { body += r + "\n"; });
    body += "\n";
  }

  // Reizen
  if (reisRegels.length > 0) {
    body += "Reizen:\n";
    reisRegels.forEach(r => { body += r + "\n"; });
    body += "\n";
  }

  // Opmerkingen
  if (opmerkingen.length > 0) {
    body += "Opmerkingen:\n";
    opmerkingen.forEach(r => { body += r + "\n"; });
    body += "\n";
  }

  // Encodeer body voor mailto
  body = encodeURIComponent(body);

  // Vul hier het gewenste e-mailadres en onderwerp in
  const email = "jouw@emailadres.nl";
  const subject = encodeURIComponent(`Urenstaat week ${week}`);

  // Genereer mailto-link
  const mailtoLink = `mailto:${email}?subject=${subject}&body=${body}`;

  // Open de mailto-link
  window.location.href = mailtoLink;
});
</script>