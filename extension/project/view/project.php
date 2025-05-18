<?php
// $data['table'] bevat het table-object of HTML
if (isset($data['table'])) {
    // Als je table-object een render() of __toString() heeft:
    echo $data['table'];
} else {
    echo '<p>Geen projecten gevonden.</p>';
}
?>
