<div id="contenu">
         
      <form method="POST"  action="index.php?uc=gererFrais&action=validerMajAbsences">
      <div class="corpsForm">
          
          <fieldset>
            <legend>Absences
            </legend>
			<?php
				foreach ($lesAbsences as $uneAbsence)
				{
					$codeAbsence = $uneAbsence['codeAbsence'];
					$libelle = $uneAbsence['libelle'];
					$nbJours = $uneAbsence['nbJours'];
			?>
					<p>
						<label for="codeAbsence"><?php echo $libelle ?></label>
						<input type="text" id="codeAbsence" name="lesAbsences[<?php echo $codeAbsence?>]" size="10" maxlength="5" value="<?php echo $nbJours?>" >
					</p>
			
			<?php
				}
			?>
			
			
			
			
           
          </fieldset>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>
  
