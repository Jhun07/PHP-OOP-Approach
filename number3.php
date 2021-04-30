
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 3</title>
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
                    <h5>Enter Email: </h5>
                </label>
                <input type="text" name="email" id="input" class="form-control" placeholder="Email only"><br>
                <input type="submit" name='submit' class="btn btn-secondary">
            </div>
            <center>

                <br>
        </form>
        <br>
</body>
<?php

     class EmailVerification
{
    public $check;

    public function perform(){
    if(isset($_POST['submit'])){
        $first = $_POST['email'];
  
       }
    }

    public function __construct()
    {
        $this->check = isset($_POST['email']) ? $_POST['email'] : null;
    }

    public function validating()
    {

        if (filter_var($this->check, FILTER_VALIDATE_EMAIL)) {
            echo ("The <i style='color: orange; font: bold impact; '>$this->check</i> is a valid email address.");
        }else if($this->check==null){
            echo " ";
        } 
        else {
            echo ("The <i style='color: orange; font: bold impact; '>$this->check</i> is not a valid email address.");
        }
    }
}

$run = new EmailVerification();
$run->perform();
$run->validating();


?>
</center>
</div>

</html>
