<html>
<body>
<?php
if (isset($_GET))
{
	echo "<p>GET -tyyppisesti saapunutta tietoa:<p>";
	foreach ($_GET as $elementName => $elementValue)
	{	
		if (is_array($elementValue)) 
		{
			// monivalinta select
			foreach ( $elementValue as $index => $elValue)
			{
				echo "<br />Kentässä nimeltä <b>".$elementName;
				echo "[".$index."]</b> on arvona <b>".$elValue."</b>";
			}
		}
		else
		{
			echo "<br />Kentässä nimeltä <b>".$elementName;
			echo "</b> on arvona <b>".$elementValue."</b>";
		}
	}
}
if (isset($_POST))
{
	echo "<p>POST -tyyppisesti saapunutta tietoa:<p>";
	foreach ($_POST as $elementName => $elementValue)
	{	
		if (is_array($elementValue)) 
		{
			// monivalinta select
			foreach ( $elementValue as $index => $elValue)
			{
				echo "<br />Kentässä nimeltä <b>".$elementName;
				echo "[".$index."]</b> on arvona <b>".$elValue."</b>";
			}
		}
		else
		{
			echo "<br />Kentässä nimeltä <b>".$elementName;
			echo "</b> on arvona <b>".$elementValue."</b>";
		}
	}
}
?>
</body>
</html>