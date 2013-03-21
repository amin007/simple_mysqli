<?php if (! isset($_GET['page'])){ ?>
<!-- Cari Borang -->
<html>
<head>
<title>=</title>
<script type="text/javascript" src="jquery.js"></script>

</head>
<body>
<script type="text/javascript"> 
function addFormField() {
	var id = document.getElementById("id").value;
	$("#divTxt").append("<p id='row" + id + "'><label for='txt" + id + 
	"'>Field " + id + "&nbsp;&nbsp;<input type='text' size='20' name='txt[]' id='txt" + id + 
	"'>&nbsp;&nbsp<a href='#' onClick='removeFormField(\"#row" + id + "\"); return false;'>Remove</a><p>");
	
	
	$('#row' + id).highlightFade({
		speed:1000
	});
	
	id = (id - 1) + 2;
	document.getElementById("id").value = id;
}
 
function removeFormField(id) {
	$(id).remove();
}
</script> 

<div id="content">
<form method="POST" action="batch_sk.php?jadual=<?=$_GET[jadual]?>&item=<?=$_GET[item]?>&page=1">
<table>
<tr>
<td>
<input type="submit" name="cari" value="cari sk">
<input type="reset" name="kosong" value="kosong">
</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><label class="papan"><input type="radio" name="ikut" value="">ASC</label>
	<label class="papan"><input type="radio" name="ikut" value="DESC">DESC</label></td>
</tr>
</table>

<div id="choiceTemplate"><input id="answercount" name="answercount" type="hidden" value="1" />
<div id="current1">Answer Choice 1 :
<input id="answer1" name="answer[]" size="20" type="text" /></div>
</div>
<div id="addremovelink" style="clear: both;"><a id="removechoice" href="javascript:;">Remove</a>
<a id="addchoice" href="javascript:;">Add Choice</a></div>
</form></div>

</body>
</html>
<!-- Cari Borang -->
<? } else { 
echo '<pre>',print_r($_POST).'</pre>';
?>
<?php } // <!-- Jumpa Borang ?>