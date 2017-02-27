<!DOCTYPE html>
<html> 
	<head>
		<meta charset="utf-8" />
		<title>dropdown</title>
		<style>
		#menu 
		{
			display:flex;
			background-color: red;
			border-left: 1px solid black;
		}

		#menu, #menu ul
		{
			list-style-type: none;			
		}
		
		#menu >li
		{
			padding: 0 10px;
			border-right: 1px solid black;
		}
		#menu ul
		{
			height:0;
			overflow:hidden;
		}
		</style>
	</head>

	<body>
		
			<ul id="menu">
				<li>
					menu0
					<ul>
						<li>a</li>
						<li>b</li>
						<li>c</li>
						<li>d</li>
						<li>e</li>
					</ul>
				</li>
				<li>menu1</li>
				<li>menu2</li>
				<li>menu3</li>
				<li>menu4</li>
			</ul>

		


	 	<script type="text/javascript" src="javascript/dropdown.js"></script>
	</body>

</html>