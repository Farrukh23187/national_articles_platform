<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>DevExtreme Demo</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>window.jQuery || document.write(decodeURIComponent('%3Cscript src="js/jquery.min.js"%3E%3C/script%3E'))</script>
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/19.2.6/css/dx.common.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/19.2.6/css/dx.light.css" />
    <script src="https://cdn3.devexpress.com/jslib/19.2.6/js/dx.all.js"></script>
    <script src="{{asset('selection/data.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('selection/style.css')}}" />
    <script src="{{asset('selection/script.js')}}"></script>
</head>
<body class="dx-viewport">
<div class="demo-container">
    <div id="grid">
        <div id="grid-container"></div>
        <div class="options">
            <div class="caption">Options</div>
            <div class="option">
                <span>Select All Mode</span>
                <div id="select-all-mode"></div>
            </div>
            <div class="option checkboxes-mode">
                <span>Show Checkboxes Mode</span>
                <div id="show-checkboxes-mode"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>