<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registeration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $name=$_GET['name'];
        $class=$_GET['class'];
    }
    else{
        $id="";
        $name="";
        $class="";
    }

    ?>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Student Registeration Form</h3>
                        <form action="operation.php" method="POST">

                            <div class="form-group">
                                <label for="stdId">Student Id</label>
                                <input type="text" class="form-control" id="stdId" name="student_id" placeholder="" value="<?php
                                echo $id
                                ?>">
                            </div>
                            <div class="form-group">
                                <label for="stdName">Student Name</label>
                                <input type="text" class="form-control" id="stdName" name="student_name" placeholder=""value="<?php
                                echo $name
                                ?>">
                            </div>
                            <div class="form-group">
                                <label for="phone" class="label-control">Student Class</label>
                                <input type="text" class="form-control" id="stdClass" name="student_class" placeholder="" value="<?php
                                echo $class
                                ?>">
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                                <button class="btn btn-primary me-md-2" type="submit" id="btn_insert" name="insert">Save Info</button>
                                <button class="btn btn-warning" type="submit" id="btn_update" name="update">Edit Info</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>












        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" 
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>