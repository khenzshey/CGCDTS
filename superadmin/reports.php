<?php
require_once '../includes/sidebar_header.php';

?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="ofc-card d-flex justify-content-start flex p-3 gap-3">
    <label>From : </label>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <input id="datepicker" width="260" />
        <script>
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap5'
            });
        </script>
</div>
</form>
</div>
</main>
<?php require_once '../includes/sidebar_footer.php' ?>