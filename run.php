<?php
/*
The Code Here Belows to STEPHENCARR.NET 2017
reuse by anyone is explicitly prohibited.
copyright 2017 stephencarr.net

https://www.stephencarr.net/demo/highlighter/run.php
*/
?>
<!-- carr stephen 2017 copyright.  all rights reserved.-->
<!-- created by stephen carr-->
<!DOCTYPE html>
<html>
<head lang="en"><!-- created by stephen carr-->
    <meta charset="UTF-8">
    <title>stephencarr.net</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,400|Special+Elite' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="includes/reset.css" />
    <!-- carr stephen 2017 copyright.  all rights reserved.-->
    <link rel="stylesheet" type="text/css" href="includes/styles.css" />
    <link rel="stylesheet" type="text/css" href="includes/github.css" />
    <link rel="stylesheet" type="text/css" href="includes/ColorPicker.css" /><!-- created by stephen carr-->
<!-- carr stephen 2017 copyright.  all rights reserved.-->
    <script type="text/javascript" src="includes/rainbow-custom.min.js"></script>
<!-- created by stephen carr-->
    <script type="text/javascript" src="includes/ColorPicker.js"></script>
    <script type="text/javascript" src="js/th.js"></script><!-- carr stephen 2017 copyright.  all rights reserved.-->
    <style>
		.logo{
			width: 250px;
			height: auto;
		}

		#remove {
    background-color: #009ddc;
    border: medium none;
    border-radius: 10px;
    color: #fff;
    font-weight: bold;
    padding: 3px 15px;
}
				#carrContent div{
					margin-bottom: 5px;
					padding: 3px;
		}
				#carrContent div:hover{
					cursor: pointer;
					opacity: .7;
		}
		#carrContent{
			width: 100%;
			white-space: normal;
		}
		#remove:hover{
			cursor: pointer;
			opacity: .7;
		}
		.color-picker div:hover{
			opacity: .7;
			
		}
	</style>
</head>
<body>
    <div class="view">
        <div class="top"></div>

        <div class="side">
            <h2><img class="logo" src="includes/logo.png"/></h2>
            <ul>
                <li>
                    Select any text in the sandbox to highlight it. 
              </li>
                <li>Change highlighting color: <div class="color-picker"></div></li>
                <li>Remove highlights: <button id="remove">Remove</button></li>
            </ul>
        </div>

<div class="code shadow">
<pre>

<div id="carrContent">
<!-- created by stephen carr-->
</div>

</pre>
</div>

        <div class="card shadow">
            <div id="stamp">stephencarr.net</div>
            <div id="sandbox" class="content">
                <h1>Lorem ipsum</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus malesuada sagittis. Morbi
                    purus odio, blandit ac urna sed, <b>interdum pharetra</b> leo. Cras congue id est sit amet mattis.
                    Sed in metus et orci eleifend commodo. Phasellus at odio imperdiet, efficitur augue in, pulvinar
                    sapien. Pellentesque leo nulla, porta non lectus eu, ullamcorper semper est. Nunc <i>convallis</i>
                    risus vel mauris accumsan, in rutrum odio sodales. Vestibulum <b>ante ipsum</b> primis in faucibus
                    orci luctus et ultrices posuere cubilia Curae; Sed at tempus mauris. Fusce blandit felis sit amet
                    magna lacinia blandit.
                </p>
                <img class="shadow" src="includes/img.jpg" />
                <p>
                    Maecenas faucibus hendrerit lectus, in auctor felis tristique at. Pellentesque a felis ut nibh
                    malesuada auctor. Ut <b>egestas elit</b> ac ultrices ullamcorper. Pellentesque enim est, varius
                    ultrices velit eget, consectetur aliquam tortor. Aliquam sit amet nibh id tellus sollicitudin
                    faucibus. Nunc euismod augue tempus, ornare justo interdum, consectetur lacus. Pellentesque a
                    molestie tellus, eget convallis lectus.
                </p>
                <!-- created by stephen carr-->
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae nunc sed risus blandit convallis
                    id id risus. Morbi tortor metus, imperdiet sed ipsum quis, condimentum mattis tellus. Fusce orci nisi,
                    ultricies vel hendrerit id, egestas id turpis. Proin cursus diam tortor, sed ullamcorper eros commodo
                    vitae. Aenean et maximus sapien. Nam felis velit, ullamcorper eu turpis ut, hendrerit accumsan augue.
                    Nulla et purus sem. Ut at hendrerit purus. <b>Phasellus mollis commodo</b> ante eu mollis. In nec
                    dui vel mauris lacinia vulputate id nec turpis. Aliquam vestibulum, elit sit amet fringilla
                    malesuada, quam nunc eleifend nunc, id iaculis est neque pretium libero.
                </p>

                <table>
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John</td><td>Lucius</td>
                            <td>j.lu@mail.com</td>
                        </tr>
                        <tr>
                            <td>Nikolai</td><td>Bodrov</td>
                            <td>niko.b@mail.com</td>
                        </tr>
                        <tr>
                            <td>Steve</td><td>Suzy</td>
                            <td>s.suzy@mail.com</td>
                        </tr>
                        <tr>
                            <td>Alex</td><td>Stirling</td>
                            <td>alexs@mail.com</td>
                        </tr>
                    </tbody>
                </table>

                <p>
                    Donec sollicitudin commodo risus in consequat. Curabitur ultricies sagittis mi, a dapibus nunc mollis
                    sed. Sed ut pretium leo, quis vehicula diam. Proin nisi metus, elementum ut mi porttitor, cursus
                    egestas sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus mattis ipsum
                    ut enim efficitur mollis. Vivamus id mollis lectus.
                </p>

               

              <p>
                    In est tortor, tincidunt vitae elit at, ultricies tincidunt magna. Aenean suscipit ante sapien,
                    quis sagittis felis efficitur feugiat. In arcu elit, hendrerit vel varius eget, elementum vitae
                    lectus. Phasellus ut purus commodo ante iaculis molestie. Integer turpis felis, pellentesque eu
                    dignissim vel, sodales vel metus. Aliquam tempus lorem odio. Sed purus arcu, auctor eget sodales
                    ac, venenatis ac velit. Praesent a quam at purus varius accumsan sit amet quis magna. Praesent
                    efficitur velit quis mi posuere, ut egestas elit egestas. Etiam vulputate lacus in posuere
                    suscipit. Fusce molestie sem ipsum. Phasellus consectetur, purus quis auctor laoreet, elit
                    nisi aliquet metus, et placerat nunc tellus ac massa. Praesent cursus ornare nulla eu ultrices.
                </p>
            </div><!-- created by stephen carr-->
        </div>
    </div>
    <div id="footer">
        Copyright &copy; 2017. STEPHENCARR.NET All Rights Reserved.
    </div><!-- created by stephen carr-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
        (function () {
            var removeBtn = document.getElementById('remove');
            var sandbox = document.getElementById('sandbox');
            var colors = new ColorPicker(document.querySelector('.color-picker'));
            var hltr = new TextHighlighter(sandbox, {
                onBeforeHighlight: function (range) {
                    return window.confirm('Selected text: ' + range + '\nReally highlight?');
					
                },
                onAfterHighlight: function (range, highlights) {
                    window.alert('Created ' + highlights.length + ' highlight(s): ' + highlights.map(function (h) {
                        return '"' + h.innerText + '"';
                    }).join(', '));
					
					var theColor = $(".color-picker .selected").css("background-color");
					$("#carrContent").append("<div style='background-color:"+theColor+"'>"+highlights.map(function (h) {return '"' + h.innerText + '"';}).join(', ')+"</div>");
                },
                onRemoveHighlight: function (hl) {
					$("#carrContent div").remove();
                    return true;//return window.confirm('Do you really want to remove: "' + hl.innerText + '"');
                }
            });

            colors.onColorChange(function (color) {
                hltr.setColor(color);
            });

            removeBtn.addEventListener('click', function () {
                hltr.removeHighlights();
            });
        })();
	
	
$( "body" ).on( "click", "#carrContent div", function() {$(this).fadeOut();});
	
	
    </script><!-- created by stephen carr-->
</body><!-- created by stephen carr-->
</html><!-- carr stephen 2017 copyright.  all rights reserved.-->
<!-- created by stephen carr-->