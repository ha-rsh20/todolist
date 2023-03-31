<html>
    <head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <style>
            body{
                background-color: rgb(146,139,146);
            }
            .page{
                position: relative;
                width:770px;
                height:375px;
                top:20%;
                margin:auto;
                box-shadow:0px 0px 45px 0px rgb(80, 72, 72);
                background: url('screen.png') no-repeat center center;
                background-size: 100% 100%;
				border-radius: 5px;
            }
			.login{
				position: absolute;
                width:1000px;
                height:50px;
                top:5px;
				right:20px;
                margin:auto;
				text-align:right;
			}
            .title{
                position: relative;

            }
			.list{
				position:relative;
				width:730px;
				height:200px;
				top: 20px;
				left:20px;
				border: 1px solid rgb(158, 136, 136);
				border-radius: 5px;
			}
			.done{
				position: relative;
				top:-80px;
				left:100px;
				width:50px;
			}
			.btna {
				position: relative;
				cursor: pointer;
				border: 1px transparent;
				background-color: transparent;
				width: 150px;
				color: black;
				font-size: 1.2em;
				border-bottom: 2px solid #1161ed;
			}
			.btnn {
				position: relative;
				cursor: pointer;
				border: 1px transparent;
				background-color: transparent;
				width: 150px;
				color: black;
				font-size: 1.2em;
			}
			.center{
				margin: auto;
				width: 50%;
			}
        </style>
    </head>
    <body>
		<form class="login">
			<button formaction="logout.php" class="btn btn-info">Logout</button>
		</form>
	
        <div class="page">
			<form class="form-horizontal" action="retrive.php">
				<fieldset>
					<!-- Form Name -->
					<legend><center><b>To Do List - All Tasks</center></b></legend>
					<!-- Text input-->

					<div class="col-md-3">
						<input id="username" name="retriveid" type="text" placeholder="task number for retrive" class="form-control input-md">
					</div>

					<!-- Button -->
                    <div class="form-group">
						<div class="col-md-3">
							<button id="submit" name="submit" class="btn btn-info">Add</button>
						</div>
					</div>
					
					<div class="center">
						<button class="btnn" formaction="todoremLogout.php">Remaining Tasks</button>

						<button class="btna" formaction="todoall.php">All Tasks</button>
					</div>
					
					<div class="list">
						
						<?php 
							include 'getalllist.php';
						?>
						
					</div>
				</fieldset>
			</form>
        </div>
    </body>
</html>