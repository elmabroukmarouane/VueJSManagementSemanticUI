<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>. - : - API Gestion STG Fleet - : - .</title>
    <link rel="stylesheet" type="text/css" href="dist/semantic.css">
    <!--- Site CSS -->
    <link rel="stylesheet" type="text/css" href="dist/components/reset.css">
    <link rel="stylesheet" type="text/css" href="dist/components/site.css">
    <link rel="stylesheet" type="text/css" href="dist/components/grid.css">

    <!--- Component CSS -->
    <link rel="stylesheet" type="text/css" href="dist/components/menu.css">
    <link rel="stylesheet" type="text/css" href="dist/components/input.css">
    <link rel="stylesheet" type="text/css" href="dist/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="dist/components/icon.css">
    <link rel="stylesheet" type="text/css" href="dist/components/button.css">
    <link rel="stylesheet" type="text/css" href="dist/components/transition.css">
    <link rel="stylesheet" type="text/css" href="dist/components/checkbox.css">
    <link rel="stylesheet" type="text/css" href="dist/components/sidebar.css">
    <!--- Example Libs -->
    <link rel="stylesheet" type="text/css" href="dist/components/popup.css">
    <!-- Data table CSS -->
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.semanticui.min.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<div id="app">
    <app></app>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="dist/components/popup.js"></script>

<!--- Component JS -->
<script type="text/javascript" src="dist/components/transition.js"></script>
<script type="text/javascript" src="dist/components/dropdown.js"></script>
<script type="text/javascript" src="dist/components/popper.min.js"></script>
<script type="text/javascript" src="dist/components/checkbox.min.js"></script>
<script type="text/javascript" src="dist/components/form.min.js"></script>
<script type="text/javascript" src="dist/components/sidebar.min.js"></script>
<script type="text/javascript" src="dist/components/tab.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.semanticui.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="dist/semantic.min.js"></script>
</body>
</html>
