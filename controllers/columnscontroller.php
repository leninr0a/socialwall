<?php
    if(isset($_POST["columns"])){
        $columns = $_POST["columns"];
        echo "<style>
                    .pictures .container-fluid{
                    -webkit-column-count: $columns;
                    -moz-column-count: $columns;
                    column-count: $columns;
                    }
            </style>";
    }else{
        echo "<style>
                    .pictures .container-fluid{
                    -webkit-column-count: 5;
                    -moz-column-count: 5;
                    column-count: 5;
                    }
            </style>";
    } 
?>