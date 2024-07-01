

<?php 

include('dbcon.php');

$id = $_GET['id'];


$sql = "SELECT * FROM hh_tbl WHERE id= $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
  
    $datafname = $row['fname'];
    $datalname = $row['lname'];
    $datacourse = $row['course'];
    $datadays = $row['days'];

  }
} else {
  echo "0 results";
}
$conn->close();




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>

body {
    font-family: 'Lato', sans-serif;
}

h1 {
    margin-bottom: 40px;
}

label {
    color: #333;
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 80%;
    margin-left: 3px;
    }
.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px;

}

.card{
	margin-left: 10px;
	margin-right: 10px;
}


</style>
<body>
    
<div class="container">
        <div class=" text-center mt-5 ">

            <h1 >Update Student Data</h1>
                
            
        </div>

    
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
       
            <div class = "container">
                             <form id="contact-form" role="form" method="POST">

            

            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Firstname *</label>
                            <input id="form_name" type="text" name="fname" class="form-control" placeholder="Please enter your firstname *" required="required" value ="<?php echo $datafname; ?>" >
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Lastname *</label>
                            <input id="form_lastname" type="text" name="lname" class="form-control" placeholder="Please enter your lastname *" required="required" value ="<?php echo $datalname; ?>" >
                                                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Course *</label>
                            <select id="form_need" name="course" class="form-control" required="required" >
                                <option value="<?php echo $datacourse; ?>" selected><?php echo $datacourse; ?></option>
                                <option value="MS Office">MS Office</option>
                                <option value="ADIT">ADIT</option>
                                <option value="Web Engineering">Web Engineering</option>
                                <option value="Software Engineering">Software Engineering</option>
                            </select>
                            
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Days *</label>
                            <select id="form_need" name="days" class="form-control" required="required" >
                                <option value="<?php echo $datadays; ?>" selected><?php echo $datadays; ?></option>
                                <option >MWF</option>
                                <option >TTS</option>
                            </select>
                            
                        </div>
                    </div>
                </div>
                

                    <div class="col-md-12">
                        
                        <input type="submit" class="btn btn-primary btn-send  pt-2 btn-block
                            " value="Update Data" name="update" >
                    
                </div>
          
                </div>


        </div>
         </form>
        </div>
            </div>


    </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
</div>



</body>
</html>


<?php


include('dbcon.php');



if(isset($_POST['update']))
{


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$course = $_POST['course'];
$days = $_POST['days'];




$update = "UPDATE hh_tbl SET fname = '$fname' , lname = '$lname' , course = '$course' , days = '$days' WHERE id = $id";

if($conn->query($update) === TRUE)
{


echo '<script> alert("Student Updated Successfully");

        window.location ="index.php";
</script> ';

}

else
{

    echo '<script> alert("Error"); </script> ';


}
}


$conn->close();


?>
