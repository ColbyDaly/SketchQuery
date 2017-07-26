<!DOCTYPE html>
<html>
<head>
	<title>SketchQuery | Create</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.rawgit.com/konvajs/konva/1.6.2/konva.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">

	<style type="text/css">
		body {
			background-image: url('img/backdrop.jpg');
			background-size: cover;
			background-repeat: no-repeat;
		}

		* {
			color: #fff;
			font-family: 'Raleway', sans-serif;
		}

		h1 {
			font-family: 'Open Sans', sans-serif;
			font-size: 4.5em;
			margin-top: 100px;
		}

		h1, h2, p {
			text-align: center;
		}

		.sidebar {
			padding-left: 10%;
			position: absolute;
			left: 0;
			width: 100%;
			top: 0;
			height: 100%;
			background-color: rgba(0, 0, 0, .75);
			
		}

		.float-text {
			margin-top: 200px;
			padding: 50px;
		}

		button {
			margin-top: 100px;
			height: 45px;
			width: 115px;
			border: 1px solid #fff;
			background-color: rgba(0, 0, 0, .3);
			border-radius: 15px;
			cursor: pointer;
			text-transform: uppercase;
			font-size: 1.1em;
			margin-left: 45%;
		}

		button:hover {
			background-color: rgba(255, 255, 255, .8);
			color: #000;
		}

		nav {
			text-align: center;
			word-spacing: 60px;
			letter-spacing: 10px;
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 50px;
			left: 0;
		}

		a {
			text-decoration: none;
		}

		nav a {
			text-decoration: none;
			text-transform: capitalize;
			font-size: 1.1em;
		}

		#container {
        	height: 80%;
        	width: 80%;
        	background-color: #fff;
        	
        }

        .section, #toolbar {

        }

        #toolbar {
        	margin-top: 30px;
        	height: 30px;
        	background-color: #eee;
        	width: 80%;
        	/*display: inline-block;*/
        	display: flex;align-items: center;
        }

        .icon {
        	margin-left: 15px;
        	cursor: pointer;
        	height: 20px;
        	width: 20px;
        }

        .mod {
			display: flex;align-items: center;justify-content: center;
			position: absolute;
			left: 0;
			width: 100%;
			top: 0;
			height: 100%;
			background-color: rgba(0, 0, 0, .55);
        }

        #des {
        	display: none;
        	height: 20%;
        	width: 20%;
        	background-color: #fff;
        	border: 1px solid black;
        	z-index: 99999 !important;
        }
	</style>

</head>
<body>
<div class="mod">
<div id="des">
	<button id="click">Click</button>
</div>
</div>
<div class="sidebar">
		<div id="toolbar">
			<img class="icon" id="add-item-tx" src="img/tx.png">
			<img class="icon" id="add-item-sq" src="img/sq.png">
			<img class="icon" id="add-item-c" src="img/c.png">
			<img class="icon" id="rm-item" src="img/tr.png">
		</div>
		<div class="section" id="container"></div>
</div>
<nav>
	<a href="index.php">home</a>
	<a href="about.php">about</a>
	<a href="contact.php">contact</a>
	<a href="create.php">tutorials</a>
	<a href="https://bitbucket.org/KeysJ/site_sketchquery">code</a>
</nav>
</body>
<script>
    var width = $('#container').width();
    var height = $('#container').height();
    
    var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height
    });

    var layer = new Konva.Layer();
    
    stage.add(layer);
</script>
<script type="text/javascript">
	var item_count = 0;
    
    $('#add-item-sq').click(function() {    	
        var item = new Konva.Rect({
            name: 'item' + item_count,
	        x: Math.random() * ((stage.getWidth() - 100) - 10) + 10,
	        y: Math.random() * ((stage.getHeight() - 100) - 10) + 10,
            id: item_count,
	        width: Math.random() * ((stage.getWidth() - 100) - 10) + 10,
	        height: Math.random() * ((stage.getHeight() - 100) - 10) + 10,
	        fill: '#'+(Math.random()*0xFFFFFF<<0).toString(16),
	        stroke: 'black',
	        strokeWidth: 1,
	        draggable: true
    	});

        addItem(item);
   		
	});

    $('#add-item-tx').click(function() {        
        var item = new Konva.Text({
            name: 'item' + item_count,
            x: Math.random() * ((stage.getWidth() - 100) - 10) + 10,
            y: Math.random() * ((stage.getHeight() - 100) - 10) + 10,
            text: 'Testing',
            fontSize: Math.random() * (30 - 10) + 10,
            fontFamily: 'Calibri',
            fill: '#'+(Math.random()*0xFFFFFF<<0).toString(16),
            id: item_count,
            draggable: true
        });

        addItem(item);
        
    });

    function updateThis() {
        var height = $('#updateHeight').val();
        var width = $('#updateWidth').val();
        var itemId = $('#destroyNumber').val();

        var item = stage.find('#' + itemId)[0];
        item.attrs.height = height;
        item.attrs.width = width;
        layer.add(item);
        stage.add(layer);
    }

    function die() {
        var kill = $('#destroyNumber').val();
        var item = stage.find('#' + kill)[0];
        item.destroy();
        $('#' + kill).remove();
    }

    $('#add-item-c').click(function() {        
        var item = new Konva.Circle({
            name: 'item' + item_count,
            x: Math.random() * ((stage.getWidth() - 100) - 10) + 10,
            y: Math.random() * ((stage.getHeight() - 100) - 10) + 10,
            id: item_count,
            width: Math.random() * ((stage.getWidth() - 100) - 10) + 10,
            height: Math.random() * ((stage.getHeight() - 100) - 10) + 10,
            fill: '#'+(Math.random()*0xFFFFFF<<0).toString(16),
            stroke: 'black',
            strokeWidth: 1,
            draggable: true
        });

        addItem(item);
        
    });

    function addItem(item) {
        layer.add(item);
        stage.add(layer);
        console.log(stage);

        item_count++;

        for (var i = 0; i < item.length; i++) {
    	console.log(item[i]);
    }


    $('.icon').click(function () {
    	// $('#des').show();
    	// $('.sidebar').hide();
    });

    $('#click').click(function () {
    	// $('#des').hide();
    	// $('.sidebar').show();
    });
}
    </script>
</html>