<?php $image = "images/Pozadina02.jpeg"; require_once('header.php'); 

	$menu = new SimpleXMLElement(file_get_contents('menu.xml'));
?>
	<main>
		<div class="center_wrapper">
			<table class="menu">
				<tr>
					<th>Predjelo</th>
					<th>Cijena</th>
				</tr>
				<?php generate_row($menu, "Predjelo") ?>
				<tr>
					<th>Glavno jelo</th>
				</tr>
				<?php generate_row($menu, "Glavno jelo") ?>
				<tr>
					<th>Prilog</th>
				</tr>
				<?php generate_row($menu, "Prilog") ?>
				<tr>
					<th>Desert</th>
				</tr>
				<?php generate_row($menu, "Desert") ?>
			</table>
		</div>
	</main>
<?php require_once('footer.php');

	function generate_row($menu, $vrsta)
	{
		foreach ($menu->Jelo as $jelo) 
		{
			if (((string)$jelo['vrsta']) == $vrsta)
			{
				$naziv = $jelo->Naziv;
				$cijena = $jelo->Cijena;

				echo <<<_END
					<tr>
						<td>$naziv</td>
						<td>$cijena kn</td>
					</tr>
_END;
			}
		}
	}
 ?>

	
