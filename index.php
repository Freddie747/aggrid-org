<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


    <script src="dist/ag-grid.js"></script>

    <script src="html5Grid.js"></script>


    <script>

        // example creating a grid using raw Javascript
        //var eGridDiv = document.querySelector('#bestHtml5Grid'); // get a reference to the grid div
        //new agGrid.Grid(eGridDiv, gridOptions); //create a new grid
    </script>

    <style>
        button:disabled { color: #a0a0a0; }
    </style>

</head>
<body>

<div style="width: 800px;">
    <div style="padding: 4px">
        <div style="float: right;">
            <input type="text" id="quickFilterInput" placeholder="Type text to filter..."/>
            <button type="checkbox" id="btDestroyGrid">Destroy Grid</button>
            <button type="checkbox" id="btBringGridBack">Create Grid</button>
        </div>
        <div style="padding: 4px;">
            <b>Employees Skills and Contact Details</b> <span id="rowCount"/>
        </div>
        <div style="clear: both;"/>
    </div>

    <?php
    echo '<div style="width: 100%; height: 400px;" id="bestHtml5Grid" class="ag-fresh ag-basic"></div>';
    //for ($i=1; $i<=20; $i++) {
        //echo '<div style="width: 100%; height: 400px;" id="bestHtml5Grid'.$i.'" class="ag-fresh ag-basic"></div>';
        //echo '<div style="width: 100%; height: 400px;" id="bestHtml5Grid2" class="ag-fresh ag-basic"></div>';
    //}
    ?>

</div>


</body>
</html>