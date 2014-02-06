<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Web technology labs</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="wrapper2">
		<div id="header">
			<div id="logo">
				<h1>PHP labs</h1>
			</div>
            <div id="menu">
                <ul>
                    <li><a href="#">lab1</a></li>
                    <li><a href="#">lab2</a></li>
                    <li><a href="#">lab3</a></li>
                    <li><a href="#">lab4</a></li>
                    <li><a href="#">lab5</a></li>
                </ul>
            </div>
		</div>
		<!-- end #header -->
		<div id="page">
			<div id="content">
				<div class="post">
					<h2 class="title"><?php echo "Welcom to web server"; ?></h2>
					<div class="entry">
						<p>Перейдіть по посиланню для перегляду роботи</p>
                        <?php
                            require "lab1.php";
                        ?>
					</div>
				</div>

			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
	<div id="footer">
		<p>(c) 2014 Design by Iryna Omel'chuk</p>
	</div>
</div>
<!-- end #wrapper -->
</body>
</html>
