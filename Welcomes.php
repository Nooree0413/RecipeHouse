<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WELCOME</title>
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <style type="text/css">
            
            * {
                margin: 0;
                padding: 0;
            }
            body {
                background-color:#fff;
            }
            .fly-in-text {
                list-style: none;
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translateX(-50%) translateY(-50%);
            }
            .fly-in-text li {
                display: inline-block;
                margin-right: 50px;
                font-family: Open Sans, Arial;
                font-weight: 300;
                font-size: 4em;
                color: #00cca3;
                opacity: 1;
                transition: all 2.5s ease;
            }
            .fly-in-text li:last-child {
                margin-right: 0;
            }
            .fly-in-text.hidden li {
                opacity: 0;
            }
            .fly-in-text.hidden li:nth-child(1) { transform: translateX(-200px) translateY(-200px); }
            .fly-in-text.hidden li:nth-child(2) { transform: translateX(20px) translateY(100px); }
            .fly-in-text.hidden li:nth-child(3) { transform: translateX(-150px) translateY(-80px); }
            .fly-in-text.hidden li:nth-child(4) { transform: translateX(10px) translateY(-200px); }
            .fly-in-text.hidden li:nth-child(5) { transform: translateX(-300px) translateY(200px); }
            .fly-in-text.hidden li:nth-child(6) { transform: translateX(20px) translateY(-20px); }
            .fly-in-text.hidden li:nth-child(7) { transform: translateX(30px) translateY(200px); }
            
            a{
            	color: #00cca3;
            }

    .topleft {
    position: absolute;
    top: 8px;
    left: 16px;
    font-size: 18px;
}
        </style>
    </head>
    <body>

        <ul class="fly-in-text hidden">
            <li>W</li>
            <li>E</li>
            <li>L</li>
            <li>C</li>
            <li>O</li>
            <li>M</li>
            <li>E</li>
            
        </ul>
        
        <div class="topleft">
        	<div id="userlogin" class="form1 active">
        		<a id='loginbtn' style="text-decoration: none;" href='home.php'>Home</a>
    		</div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
            
            $(function() {
                
                setTimeout(function() {
                    $('.fly-in-text').removeClass('hidden');
                }, 500);
                
            })();
            
        </script>

    </body>
</html