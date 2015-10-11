<?php
    /*Celsius Check*/
    if (isset($_POST['celsius'])) {
        $c = $_POST['celsius'];
        $f = ($c * 9/5) + 32;        
    }
    /*Fahrenheit Check*/
    if (isset($_POST['fahren'])) {
        $fah = $_POST['fahren'];
        $cen = ($fah - 32) / 1.8;        
    }
     /*Centimete Check*/
    if (isset($_POST['centimeter'])) {
        $cens = $_POST['centimeter']; 
        $centimeters = $cens / 2.54;        
    }
    /*Inch Check*/
    if (isset($_POST['inch'])) {
        $ins = $_POST['inch']; 
        $inchs = $ins * 2.54;        
    }
    /*Pound Check*/
    if (isset($_POST['pound'])) {
        $pou = $_POST['pound']; 
        $pounds = $pou * 0.45359237;       
    }
    /*Kilogram Check*/
    if (isset($_POST['kilogram'])) {
        $kil = $_POST['kilogram']; 
        $kilograms = $kil / 0.45359237;        
    }

?>
<!DOCTYPE html>
<html>

<head>
    <title>Test</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>
    <!--Style CSS-->
    <style>
        body {
            font-family: 'Sintony', sans-serif;
        }            
        span {
            font-weight: bold;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="jumbotron text-center">
                    <h1>PHP ASSIGNMENT ONE</h1>
                </div>
                <form class="form-horizontal" method="post" action="fbac.php">
                    <!--Celsius to Fahrenheit-->
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-offset-2 control-label"> Celsius to Fahrenheit :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="celsius" placeholder="Celsius">
                        </div>
                        <input class="btn btn-primary" type="submit" value="Fahrenheit" />
                        <br/>
                        <div class="col-sm-4 col-sm-offset-4 text-center">
                            <?php if(!empty($c)) {?>
                                <span> <?php echo "<pre>$c Celsius is " .$f ." Fahrenheit</pre>";?> </span>
                            <?php } ?>
                        </div>
                    </div>
                    <!--Fahrenheit to Celsius-->
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-offset-2 control-label"> Fahrenheit to Celsius :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="fahren" placeholder="Fahrenheit">
                        </div>
                        <input class="btn btn-primary" type="submit" value="Celsius" />
                        <div class="col-sm-4 col-sm-offset-4 text-center">
                            <?php if(!empty($fah)) {?>
                                <span> <?php echo "<pre>$fah Fahrenheit is " .$cen ." Celsius</pre>";?> </span>
                            <?php } ?>
                        </div>
                    </div>
                    <!--Centimeter to Inch-->
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-offset-2 control-label"> Centimeter to Inch :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="centimeter" placeholder="Centimeter">
                        </div>
                        <input class="btn btn-primary" type="submit" value="Inch" />
                        <div class="col-sm-4 col-sm-offset-4 text-center">
                           <?php if(!empty($cens)) {?>
                            <span> <?php echo "<pre>$cens Centimeter is " .$centimeters ." Inch</pre>";?> </span>
                            <?php } ?>
                        </div>
                    </div>
                    <!--Inch to Centimeter-->
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-offset-2 control-label"> Inch to Centimeter :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="inch" placeholder="Inch">
                        </div>
                        <input class="btn btn-primary" type="submit" value="Centimeter" />
                        <div class="col-sm-4 col-sm-offset-4 text-center">
                           <?php if(!empty($ins)) {?>
                            <span> <?php echo "<pre>$ins Inch is " .$inchs ." Centimeter</pre>";?> </span>
                            <?php } ?>
                        </div>
                    </div>
                    <!--Pounds to Kilograms-->
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-offset-2 control-label"> Pounds to Kilograms :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="pound" placeholder="Pounds">
                        </div>
                        <input class="btn btn-primary" type="submit" value="Kilogram" />
                        <div class="col-sm-4  col-sm-offset-4 text-center">
                           <?php if(!empty($pou)) {?>
                            <span> <?php  echo "<pre>$pou Pounds is " .$pounds ." Kilograms</pre>";?> </span>
                            <?php } ?>
                        </div>
                    </div>
                    <!--Kilograms to Pounds -->
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-offset-2 control-label"> Kilograms to Pounds :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="kilogram" placeholder="Kilogram">
                        </div>
                        <input class="btn btn-primary" type="submit" value="Pound" />
                        <div class="col-sm-4 col-sm-offset-4 text-center">
                           <?php if(!empty($kil)) {?>
                            <span> <?php echo "<pre>$kil Kilograms is " .$kilograms ." Pounds</pre>";?> </span>
                            <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>