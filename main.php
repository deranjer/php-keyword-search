<html>
	<head>
		<script type="text/javascript">
 function showHide() {
   var div = document.getElementById("hidden_div");
   if (div.style.display == 'none') {
     div.style.display = '';
   }
   else {
     div.style.display = 'none';
   }
 }
 function showHide2() {
   var div = document.getElementById("hidden_div2");
   if (div.style.display == 'none') {
     div.style.display = '';
   }
   else {
     div.style.display = 'none';
   }
 }
</script>
		<title>Live Search!</title>
		<link href="main.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	<div>
	<div class ="rightbanner">
	</div>
		<div class ="search">
		Keyword Search:
		<form id="searchform" method="post" onsubmit="return false;">
			 <input type="textbox" id="searchbox" onkeyup="sendRequest()" name="searchq" autocomplete="off" />
		</form>
		
		<div id="show_results" class="show_results"></div>
		<script type="text/javascript" src="prototype.js"></script>
		<script>
			function sendRequest() {
				new Ajax.Updater('show_results', 'search.php', { method: 'post', parameters: $('searchform').serialize() });
			}
		</script>
		<div class="addbutton">
		<button type="button" onclick="showHide(); return true;">Add Link</button>
                <button type="button" onclick="parent.location='editlink.php'">Edit Links</button>
                </div>
		<div id="hidden_div" class="hidden_div" style="display:none;position:static;">
		<form action="newlink.php" method="post" onsubmit="">
	Name: <input type="text" name="link_name" /><br />
	Link:&nbsp;&nbsp; <input type="text" name="link_text" /><br />
	Tag 1: <input type="text" name="link_tag_1" /><br />
	Tag 2: <input type="text" name="link_tag_2" /><br />
	Tag 3: <input type="text" name="link_tag_3" /><br />
	<input type="submit" />
	</form>
	</div>
	</div>
	</body> </html>
	
