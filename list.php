<?php
include 'conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body{
            background:black;
        }
    </style>
</head>
<body> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 mt-4">
            <table class="table  text-primary table-active table-dark table-hover">
            <thead >
                <tr>
                <th >id</th>
                <th >name</th>
                <th >class</th>
                <th >Action</th>
                </tr>
            </thead>
            <tbody >
                <?php

                $query="SELECT * FROM student";
                $result=$conn->query($query);
                $htmltable="";
                if($result){
                    $htmltable .="<tr>";

                    while ($row = $result->fetch_assoc()){
                        $htmltable .="<td>" . $row['id'] . "</td>";
                        $htmltable .="<td>" . $row['name'] . "</td>";
                        $htmltable .="<td>" . $row['class'] . "</td>";


                        $update_link="form.php?"."id=".$row['id']."&name=".$row['name'] ."&class=" .$row['class'];
                        $delete_link="operation.php? "."id=".$row['id']."&name=".$row['name'] ."&class=" .$row['class'];
                        $htmltable .="<td>".'<a href="'.$update_link.'" class="btn btn-warning p-1 m-1">update</a><a href="'.$delete_link.'" class="btn btn-danger p-1 m-1">Delete</a> '."</td";
                        $htmltable .="<td>".'<br>' ."</td>";
                        $htmltable .="</tr>";
                    }
                    echo $htmltable;
                } else{
                    echo $conn->error;
                }
                ?>
                
            </tbody>
            </table>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>