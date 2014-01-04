<div class='content'>
    <h3>Public Speaking, Conference Presenting & Teaching</h3>
	<dl>
	<?
	$presoData = parse_ini_file(dirname(__FILE__) . "/presos.ini", TRUE);
//    var_dump($presoData);die;
	foreach($presoData as $index=>$data) {
        if (isset($data['title'])) {
		    echo "<dt><em><u>{$data['title']}</u></em></dt>";
        }
        echo "<dd>";
		echo $data['loc'] . "<br/>";
		if (isset($data['loc2'])) {
			echo $data['loc2'] . "<br/>";
		}
		echo $data['date'] . "</dd><br/>";	
	}
	?>
	</dl>
</div>
<div class='image-sidebar'>
<table>
  <tr>
	<td width="60"></td>
	<td><img src='images/presentSantaBarbara.jpeg'></td>
	<td width="60"></td>
  </tr>
</table>
</div>
<div class="quote-text">
"The creation of something new is not accomplished by the intellect but by the play instinct acting from inner necessity.
"<br>
- Carl Jung
</div>
<div class='content-footer'></div>