<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<style>
        body{
            background:black;
        }
    </style>
</head>
<body>
<?php
// if(isset($_GET['id'])){
//     $id=$_GET['id'];
//     $name=$_GET['name'];
//     $class=['class'];

// } else{
//     $id="";
//     $name="";
//     $class="";
// }
?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-4 bg-dark text-light">
                    <div class="card-body">
                        <form action="operation.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Student id </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="student_id"value="<?php echo $id ?>" >
                            </div>
                            <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Student name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="student_name" value="<?php echo $name ?>">
                            </div>
                            <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Student Class</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="student_class" value="<?php echo $class ?>">
                            </div>
                            <button type="submit" name="insert" class="btn btn-success ">save info</button>
                            <button type="submit" name="update" class="btn btn-info ">update info</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>