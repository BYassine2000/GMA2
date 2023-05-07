<table border=15>
	<tr>
		<td>Id Professeur</td>
		<td>Nom</td>
		<td>Prenom</td>
		<td>Adresse</td>
		<td>Diplome</td>
	</tr>
	<?php
		foreach ($lesProfs as $unProf)
		{
			echo "<tr>
					<td>".$unProf['idProf']."</td>
					<td>".$unProf['nom']."</td>
					<td>".$unProf['prenom']."</td>
					<td>".$unProf['Adresse']."</td>
					<td>".$unProf['diplome']."</td>
				  </tr>";
		}
	?>
</table>