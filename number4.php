
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 4 </title>
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
                    <h5>Enter Name: </h5>
                </label>
                <input type="text" name="name" id="input" class="form-control" placeholder="name here" required><br>
                <label class="form-label ">
                    <h5>Enter Address: </h5>
                </label>
                <input type="text" name="address" id="input" class="form-control" placeholder="address here" required><br>
                <label class="form-label ">
                    <h5>Enter Mobile Number: </h5>
                </label>
                <input type="number" name="mobile" id="input" class="form-control" placeholder="mobile number here" required><br>
                <label class="form-label ">
                    <h5>Enter Age: </h5>
                </label>
                <input type="number" name="age" id="input" class="form-control" placeholder="age here" required><br>
                <input type="submit" name='submit' class="btn btn-secondary">
            </div>
            <center>

                <br>
        </form>
        <br>
</body>
<?php
class validatingLoginForm
{
    public function __construct()
    {   
        $this->name = isset($_POST['name']) ? $_POST['name'] : null;
        $this->address = isset($_POST['address']) ? $_POST['address'] : null;
        $this->mobile = isset($_POST['mobile']) ? $_POST['mobile'] : null;
        $this->age = isset($_POST['age']) ? $_POST['age'] : null;
    }
    
    public function perform()
    {
        if($this->name == "" || $this->address == "" || $this->mobile == "" || $this->age == ""){
            echo ' <script>  alert("Please don\'t leave any space/s empty.")</script>';  
        }
        if($this->name==null){
            echo "";
        }  else if (!preg_match('/^[a-zA-z]*$/', $this->name)) {
            echo "The typed name is invalid.";
            echo "<br>";
        } else {
            echo $this->name;
            echo "<br>";
        }

        if($this->address==null){
        echo "";
         }
        else if(!preg_match('/^[a-z ,#-\'\/]{3,50}$/i', $this->address)){
                echo "The typed address is not valid";
                echo "<br>";
            }
        else{
            echo $this->address;
            echo "<br>";
        }
        
        $length = strlen($this->mobile);
        if($this->mobile==null){
           echo "";
         } 
        else if ($length < 11 || $length > 11    ) {
            echo "The valid mobile number should be at 11 digits";
            echo "<br>";
        } else {
            echo $this->mobile;
            echo "<br>";
        }
        
        if($this->age==null){
            echo " ";
        } 
        else if ($this->age >= 18) {
            echo $this->age;
            echo "<br>";
        }else {
            echo "The valid age should be equal or more than 18 years old.";
            echo "<br>";
        }

        
        
    }
}

$run = new validatingLoginForm();
$run->perform();
?>
</center>
</div>

</html>






