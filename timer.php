
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="timer.css">
    <title>Pay Later</title>
</head>

<body>
    <div id="countdown-container center">
        <center>
              <div id="countdown">
            <h1>You have</h1>
            <span id="days">00d</span> <span>:</span> <span id="hours">00h</span> <span>:</span> <span id="minutes">00m</span> <span>:</span> <span id="seconds">00s</span>
            <h1>to pay</h1>
        </div>
        <form action="profile.php" method="post">
                <button type="submit" class="btn btn-warning">Return to shopping</button>
            </form>
        </center>
      
    </div>
    <script src="timer.js" async></script>
</body>

</html>