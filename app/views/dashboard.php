<link rel="stylesheet" href="./assets/css/main.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link type="text/css" rel="stylesheet" href="./assets/css/jsgrid.min.css" />
<link type="text/css" rel="stylesheet" href="./assets/css/jsgrid-theme.min.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
<script>
    const employees = <?php echo json_encode($data);?>;
</script>
<script defer type="module" src="./assets/js/js-grid/js-grid.js"></script>

<?php
require CORE . 'session.php';

echo '<div id="grid" class="grid"></div>';