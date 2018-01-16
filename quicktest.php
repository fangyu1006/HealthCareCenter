
<html lang="en" class="js">
<head>
	<meta charset="UTF-8">
	<title>Self-test</title>
	<meta name="viewport" content="initial-scale=1.0, width=device-width"/>



    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        input[type="radio"]{
          margin: 10px 50px 10px 100px;
        }
        label{
            font-family: "Times New Roman", Times, serif;;
            font-weight: lighter;
            font-size: 1.2em;
        }
    </style>
    <script src="js/getsession.js"></script>
	
	<!-- Style Sheet -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/hover-min.css" />
	<link rel="stylesheet" href="css/bootstrap-select.min.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" type="text/css" href="css/loader.css">
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>


	
</head>
<body>
	<!-- Loader -->
	
	<!-- TopBar -->

	<!-- Main-navigation -->
	<section id="main-navigation">
		<div id="navigation">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="row">
						<!--  Brand and toggle get grouped for better mobile display -->
						<div class="col-md-3 col-sm-12 col-xs-12">
							<div class="navbar-header">
								
								<a class="navbar-brand logo col-xs-10" href="index.php">
									<img src="images/logo.png" alt="logo" class="img-responsive">
								</a>
								
								<div class="col-xs-2 text-center">
									<button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#fixed-collapse-navbar">
									<span class="src-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									</button>
								</div>
							</div>
						</div>
						
						<!--  Collect the nav links, forms, and other content for toggling --> 
						<div class="col-md-9 col-sm-12 col-xs-12 pull-right">
							<div class="collapse navbar-collapse nav-collapse" id="fixed-collapse-navbar">
								<ul class="nav navbar-nav cl-effect-1">
									<li><a href="index.php" data-hover="Home">Home</a> </li>
									<li><a href="about.html" data-hover="About">About</a> </li>
									<li><a href="chatBot.html" data-hover="Chatbot">Chatbot</a> </li>
									<li class="active"><a href="quicktest.php" data-hover="Self-test">Self-test</a> </li>
								</ul>
								
								<div class="user-acces pull-right">
									<a href="index.php"><?php echo $_COOKIE['uname'];?></a>
									<span>&#47;</span>
									<a href="welcome.html">Logout</a>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</nav>
		</div>
	</section>

		<!-- Page-Bar -->	
	<section id="pageBar">
		<div class="container">
			<div class="row">
				<h1 class="page-title pull-left">Self-Test</h1>
			</div>
		</div>
	</section>

	<div id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                                
                            <?php
                                //define variables and set to empty values
                                
                                $hypertensive = $HYPNinFamily = $Diabetic = $DBTSinFamily = $heartAttack = $smoking = $dizziness = $dryTongue = $numbness = $height = $weight = $waist = "";
                                $finished = $finished1 = $finished2 = $finished3 = $finished4 = $finished5 = $finished6 = $finished7 = $finished8 = $finished9 = $finished10 = $finished11 = false;

                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                
                                    if (!empty($_POST["hypertensive"])) {
                                        $hypertensive = $_POST["hypertensive"];
                                    }
                                    if (!empty($_POST["HYPNinFamily"])) {
                                        $HYPNinFamily = $_POST["HYPNinFamily"];
                                    }
                                    if (!empty($_POST["Diabetic"])) {
                                        $Diabetic = $_POST["Diabetic"];
                                    }
                                    if (!empty($_POST["DBTSinFamily"])) {
                                        $DBTSinFamily = $_POST["DBTSinFamily"];
                                    }
                                    if (!empty($_POST["heartAttack"])) {
                                        $heartAttack = $_POST["heartAttack"];
                                    }
                                    if (!empty($_POST["smoking"])) {
                                        $smoking = $_POST["smoking"];
                                    }
                                    if (!empty($_POST["dizziness"])) {
                                        $dizziness = $_POST["dizziness"];
                                    }
                                    if (!empty($_POST["dryTongue"])) {
                                        $dryTongue = $_POST["dryTongue"];
                                    }
                                    if (!empty($_POST["numbness"])) {
                                        $numbness = $_POST["numbness"];
                                    }
                                    if (!empty($_POST["height"])) {
                                        $height = test_form($_POST["height"]);
                                    }
                                    if (!empty($_POST["weight"])) {
                                        $weight = test_form($_POST["weight"]);
                                    }
                                    if (!empty($_POST["waist"])) {
                                        $waist = test_form($_POST["waist"]);
                                    }

                                }
                                function test_form($data) {
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);
                                    return $data;
                                }
                            ?>
                                                
                                                
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                                <label> 1. Are you Hypertensive? </label></br>
                                <input type="radio" name="hypertensive" value="1"
                                        <?php if (isset($_POST["hypertensive"]) && $_POST["hypertensive"] == "1") echo "checked";?>> Yes
                                <input type="radio" name="hypertensive" value="0"
                                        <?php if (isset($_POST["hypertensive"]) && $_POST["hypertensive"] == "0") echo "checked";?>> No 
                                <?php 
                                    if(isset($_POST["hypertensive"])) {
                                        $finished = true;
                                    }
                                ?>
                                <br><br>

                                <label> 2. Hypertensive in Family? </label></br>
                                <input type="radio" name="HYPNinFamily" 
                                        <?php if (isset($_POST["HYPNinFamily"]) && $_POST["HYPNinFamily"] == "1") echo "checked"; ?>
                                value= "1"> Yes
                                        <input type="radio" name="HYPNinFamily"
                                        <?php if (isset($_POST["HYPNinFamily"]) && $_POST["HYPNinFamily"] == "0") echo "checked"; ?>
                                value= "0"> No
                                <?php 
                                    if(isset($_POST["HYPNinFamily"])) {
                                        $finished1 = true;
                                    }
                                ?>
                                <br><br>

                                <label> 3. Are you Diabetic ? </label></br>
                                <input type="radio" name="Diabetic"
                                        <?php if (isset($_POST["Diabetic"]) && $_POST["Diabetic"] == "1") echo "checked" ?>
                                value= "1"> Yes
                                <input type="radio" name="Diabetic"
                                        <?php if (isset($_POST["Diabetic"]) && $_POST["Diabetic"] == "0") echo "checked" ?>
                                value= "0"> No
                                <?php 
                                    if(isset($_POST["Diabetic"])) 
                                        $finished2 = true;
                                ?>
                                <br><br>

                                <label> 4. Diabetic in Family? </label></br>
                                <input type="radio" name="DBTSinFamily"
                                        <?php if (isset($_POST["DBTSinFamily"]) && $_POST["DBTSinFamily"] == "1") echo "checked"; ?>
                                value= "1"> Yes
                                <input type="radio" name="DBTSinFamily"
                                        <?php if (isset($_POST["DBTSinFamily"]) && $_POST["DBTSinFamily"] == "0") echo "checked"; ?>
                                value= "0"> No
                                <?php 
                                    if(isset($_POST["DBTSinFamily"])) 
                                        $finished3 = true;
                                ?>
                                <br><br>

                                <label> 5. Have you ever experienced a Heart Attack? </label></br>
                                <input type="radio" name="heartAttack"
                                        <?php if (isset($_POST["heartAttack"]) && $_POST["heartAttack"] == "1") echo "checked" ?>
                                value= "1"> Yes
                                <input type="radio" name="heartAttack"
                                        <?php if (isset($_POST["heartAttack"]) && $_POST["heartAttack"] == "0") echo "checked" ?>
                                value= "0"> No
                                <?php 
                                    if(isset($_POST["heartAttack"])) 
                                        $finished4 = true;
                                ?>
                                <br><br>

                                <label> 6. Are you a Smoker? </label></br>
                                <input type="radio" name="smoking"
                                        <?php if (isset($_POST["smoking"]) && $_POST["smoking"] == "1") echo "checked" ?>
                                value= "1"> Yes
                                <input type="radio" name="smoking"
                                        <?php if (isset($_POST["smoking"]) && $_POST["smoking"] == "0") echo "checked" ?>
                                value= "0"> No
                                <?php 
                                    if(isset($_POST["smoking"])) 
                                        $finished5 = true;
                                ?>
                                <br><br>

                                <label> 7. Have you ever feel Dizziness? </label></br>
                                <input type="radio" name="dizziness"
                                        <?php if (isset($_POST["dizziness"]) && $_POST["dizziness"] == "1") echo "checked" ?>
                                value= "1"> Yes
                                <input type="radio" name="dizziness"
                                        <?php if (isset($_POST["dizziness"]) && $_POST["dizziness"] == "0") echo "checked" ?>
                                value= "0"> No
                                <?php 
                                    if(isset($_POST["dizziness"])) 
                                        $finished6 = true;
                                ?>
                                <br><br>

                                <label> 8. Do you have Dry tongue? </label></br>
                                <input type="radio" name="dryTongue"
                                        <?php if (isset($_POST["dryTongue"]) && $_POST["dryTongue"] == "1") echo "checked" ?>
                                value= "1"> Yes
                                <input type="radio" name="dryTongue"
                                        <?php if (isset($_POST["dryTongue"]) && $_POST["dryTongue"] == "0") echo "checked" ?>
                                value= "0"> No
                                <?php 
                                    if(isset($_POST["dryTongue"])) 
                                        $finished7 = true;
                                ?>
                                <br><br>

                                <label> 9. Have you ever feel Numbness in your body? </label></br>
                                <input type="radio" name="numbness"
                                        <?php if (isset($_POST["numbness"]) && $_POST["numbness"] == "1") echo "checked" ?>
                                value= "1"> Yes
                                        <input type="radio" name="numbness"
                                        <?php if (isset($_POST["numbness"]) && $_POST["numbness"] == "0") echo "checked" ?>
                                value= "0"> No
                                <?php 
                                    if(isset($_POST["numbness"])) 
                                        $finished8 = true;
                                ?>
                                <br><br>

                                <label style="width: 150px"> 10. Height: </label>
                                <input type="text" name="height" value="<?php echo $height;?>"> cm
                                <!-- <span class="error">* <?php echo $err; ?></span> -->
                                <?php 
                                    if(isset($_POST["height"])) 
                                        $finished9 = true;
                                ?>
                                <br><br>
                                <label style="width: 150px"> 11. Weight: </label>
                                <input type="text" name="weight" value="<?php echo $weight;?>">
                                <select name="wgtunit">
                                    <option value="kg">kg</option>
                                    <option value="lbs">lbs</option>
                                </select>
                                <!-- <span class="error">* <?php echo $err; ?></span> -->
                                <?php 
                                    if(isset($_POST["weight"]) && isset($_POST["wgtunit"])){
                                        if($_POST["wgtunit"]=="lbs"){
                                            $weight *= 0.45;
                                        }
                                        echo "weight in kg: $weight";
                                        $finished10 = true;
                                    }
                                ?>
                                <br><br>
                                <label style="width: 150px"> 12. Waist: </label>
                                <input type="text" name="waist" value="<?php echo $waist;?>">
                                <select name="wstunit">
                                    <option value="cm">cm</option>
                                    <option value="inch">inch</option>
                                </select>
                                <!-- <span class="error">* <?php echo $err; ?></span> -->
                                <?php 
                                    if(isset($_POST["waist"]) && isset($_POST["wstunit"])){
                                        if($_POST["wstunit"]=="inch"){
                                            $waist *= 2.54;
                                        }
                                        echo "waist in cm: $waist";
                                        $finished11 = true;
                                    } 
                                ?>
                                <br><br>
                            
                                <button type="submit" class="btn btn-gray"> Submit </button>

                            
                            </form>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Result</h1>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php
                                if ($finished && $finished1 && $finished2 && $finished3 && $finished4 && $finished5 && $finished6 && $finished7 && $finished8 && $finished9 && $finished10 && $finished11){
                                    if(is_numeric($height) && is_numeric($weight) && is_numeric($waist)){
                                        $height /= 156.4506;
                                        $weight /= 60.3399;
                                        $waist /= 87.4219;

                                        $result1 = 0.0;
                                        $result1 += 0.5862 * intval($hypertensive);
                                        $result1 += -0.0227 * intval($HYPNinFamily);
                                        $result1 += 0.3443 * intval($Diabetic);
                                        $result1 += -0.0607 * intval($DBTSinFamily);
                                        $result1 += -0.017 * intval($heartAttack);
                                        $result1 += 0.2008 * intval($smoking);
                                        $result1 += -0.1306 * intval($dizziness);
                                        $result1 += 0.0317 * intval($dryTongue);
                                        $result1 += -0.081 * intval($numbness);
                                        $result1 += -1.1563 * intval($height);
                                        $result1 += 0.3765 * intval($weight);
                                        $result1 += 0.2562 * intval($waist);
                                        
                                        if ($result1 >= 0.0){
                                            echo "<h3></br>High risk of hypertension!</br></h3>";
                                        }
                                        else{
                                            echo "<h3></br>Low risk of hypertension!</br></h3>";
                                        }

                                        $result2 = 0.0;
                                        $result2 += 0.4335 * intval($hypertensive);
                                        $result2 += -0.1179 * intval($HYPNinFamily);
                                        $result2 += 1.0558 * intval($Diabetic);
                                        $result2 += 0.5428 * intval($DBTSinFamily);
                                        $result2 += 0.2123 * intval($heartAttack);
                                        $result2 += 0.0322 * intval($smoking);
                                        $result2 += 0.2951 * intval($dizziness);
                                        $result2 += 0.2945 * intval($dryTongue);
                                        $result2 += 0.3785 * intval($numbness);
                                        $result2 += -1.5721 * intval($height);
                                        $result2 += 0.1668 * intval($weight);
                                        $result2 += 0.2354 * intval($waist);

                                        if ($result2 >= 0.0){
                                            echo "<h3></br>High risk of hyperglycaemia!</br></h3>";
                                        }
                                        else{
                                            echo "<h3></br>Low risk of hyperglycaemia!</br></h3>";
                                        }
                                    }
                                    else{
                                        echo "<h3> Invalid input!</h3>";
                                    }
                                }
                                else{
                                    echo "<h3>See result once you finished all questions!</h3>";
                                }
                                
                            ?>
                            </div>
                    </div>
                </div>
        </div>
    </div>
</div>



</body>

</html>