<?php $image = "images/Pozadina03.jpeg"; require_once('header.php') ?>
		<main>
		<div class="center_wrapper hrana">
			<?php
				$spec = new SimpleXMLElement(file_get_contents('specijaliteti.xml'));
				foreach ($spec->Jelo as $jelo)
				{
					$naziv = $jelo->Naziv;
					$kalorije = $jelo->Kalorije;
					$sastojci = $jelo->Sastojci;
					$opis = $jelo->Opis;
					$slika = $jelo->Slika;

					echo <<<_END
						<section>
								<p><img src="$slika">
								Naziv: $naziv<br/>
								Kalorije(u 100g): $kalorije<br/>
								Sastojci: $sastojci<br/><br/> 
								$opis</p>
						</section>
_END;
				}
			?>
		</div>
	</main>
<?php require_once('footer.php') ?>