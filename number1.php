
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<style>
* {
    font: bold large pink;
}

.btn {
    width: 80%;
    margin-left: 10%;
}

.container {
    margin-left: 27%;
    margin-right: 30%;
    padding: 5%;
    border: 2px outset black;
    width: 50%;
    border-radius: 10% 10% 10% 10%;
    box-shadow: 10px 10px #FFE4B5;
}
#input {
    background-color: #FFE4B5;
    color: black;
    border: 2px solid gray;
    border-radius: 4px;
    width: 80%;
    margin-left: 10%;
}

label {
    margin-left: 10%;
}
</style>
<body>

    <div class="container mt-5 bg-light">
        <form method="post">
            <div class="mb-3">
                <label class="form-label ">
                    <h5>First date: </h5>
                </label>
                <input type="date" name="first" id="input" class="form-control" placeholder=" DATE  only">
                <label class="form-label ">
                    <h5>Second date: </h5>
                </label>
                <input type="date" name="second" id="input" class="form-control" placeholder=" DATE  only"><br>
                <input type="submit" name='submit' class="btn btn-secondary"><br>
            </div>
            <center>
        </form>
        <br>
</body>
<?php
if(isset($_POST['submit'])){
$first = $_POST['first'];
$second = $_POST['second'];

 $fdate = new DateTime( $first);
 $sdate = new DateTime($second);
 
$interval = $fdate->diff($sdate);
echo "Difference : <i style='color: orange; font: bold impact; '>" . $interval->y ."</i>". " years, <i style='color: orange; font: bold impact; '>". $interval->m."</i>"." months, <i style='color: orange; font: bold impact; '> ".$interval->d."</i> days ";

     }
?>
</center>
</div>

</html>