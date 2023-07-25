<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Student Info</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Student List Form</h3>
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Student Name</th>
                                        <th scope="col">Student Class</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM std";
                                    $result = $conn->query($query);
                                    $htmlTable = "";
                                    if ($result) {
                                        $htmlTable .= "<tr>";

                                        while ($row = $result->fetch_assoc()) {
                                            $update_link = 'form.php?' . '&id=' . $row['student_id'] . '&name=' . $row['student_name']
                                                . '&class=' . $row['student_class'];
                                            $delete_link = 'operation.php?' . '&id=' . $row['student_id'];
                                            $htmlTable .= "<td>" . $row['student_id'] . "</td>";
                                            $htmlTable .= "<td>" . $row['student_name'] . "</td>";
                                            $htmlTable .= "<td>" . $row['student_class'] . "</td>";
                                            $htmlTable .= '<td>' . '<a href="' . $update_link . '" class="btn btn-info m-1" type="submit"><i class="fa fa-edit"></i></a>
                                    <a href="' . $delete_link . '" class="btn btn-danger m-1" type="submit"><i class="fa fa-trash"></i></a>' . '</td>';
                                            $htmlTable .= "</tr>";
                                        }
                                        echo $htmlTable;
                                    } else {
                                        echo $conn->error;
                                    }
                                    ?>
                                </tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>