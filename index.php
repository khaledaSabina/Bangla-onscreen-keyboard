<html>
    <head>
        <title>Keyboard</title>
        <meta charset="UTF-8" /> 
		<link rel="stylesheet" type="text/css" href="onScreenKeyboard.css" />        
        <script type="text/javascript" src="jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="jquery.onScreenKeyboard.min.js"></script>
	</head>
<body> 
		<div class="col-md-8">
			<input type="text" class="form-control field_search" name="search" placeholder="Search">
		</div>
</body> 
<script>
    $('.field_search').onScreenKeyboard({
        rewireReturn: 'submit',
        rewireTab: true
    });

</script>
</html>
