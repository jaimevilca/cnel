<?php
  $family_type = $this->data['family_type'];
  $education_level = $this->data['education_level'];
  $job = $this->data['job'];

  $family = $this->data['family'];
?>
<h5 class="center-align">Datos familiares</h5>

  <div class="col l12 m12 s12">
    <h6 class="center-align red white-text">Agregar familiar</h6>
    <h6 class="red-text center-align">Obligatorio <b>*</b></span></h6>
  </div>

<form>
<div class="row">
    <div class="col l12 m12 s12">

      <div class="row"></div>
        <div class="input-field col offset-l1 l2 m4 offset-s4 s8">
          <label class="lll">Tipo familiar <span class="red-text">*</span></label>
          <select name="DFTIFA" id="DFTIFA" class="actS browser-default" required>
            <option value="">Seleccione</option>
            <?php
              for ($i=0; $i < count($family_type); $i++) { 
                //$x = ($family_type[$i][0] == $disability_candidate["ADI_FK_TIFA"]) ? 'selected' : '' ; 
                echo '<option value="'.$family_type[$i][0].'">'.$family_type[$i][1].'</option>';
              }
            ?>
          </select>
        </div>

        <div class="input-field col l3 m4 s6">
          <input name="DFAPEL" id="DFAPEL" type="text" maxlength="45" class="actI validate" required>
          <label for="DFAPEL" class="actL">Apellidos <span class="red-text">*</span></label>
        </div>

        <div class="input-field col l3 m4 s6">
          <input name="DFNOMB" id="DFNOMB" type="text" maxlength="45" class="actI validate" required>
          <label for="DFNOMB" class="actL">Nombres <span class="red-text">*</span></label>
        </div>

        <div class="input-field col l2 m4 s6">
          <input name="DFCEDU" id="DFCEDU" type="text" maxlength="15" class="actI validate" required>
          <label for="DFCEDU" class="actL">C.I/Pasaporte <span class="red-text">*</span></label>
        </div>

        <div class="input-field col offset-l1 l2 m4 s6">
          <input name="DFFNAC" id="DFFNAC" type="text" maxlength="10" class="actI validate" placeholder="aaaa-mm-dd" required pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" title="Formato fecha: aaaa-mm-dd Ej. 2000-01-30">
          <label class="active" for="DFFNAC">Fecha nacimiento <span class="red-text">*</span></label>
        </div>


        <div class="input-field col offset-l1 l2 m4 offset-s4 s8">
          <label class="lll">Nivel de Instrucción <span class="red-text">*</span></label>
          <select name="DFINST" id="DFINST" class="actS browser-default" required>
            <option value="">Seleccione</option>
            <?php
              for ($i=0; $i < count($education_level); $i++) { 
                echo '<option value="'.$education_level[$i][0].'">'.$education_level[$i][1].'</option>';
              }
            ?>
          </select>
        </div>

     

        <div class="input-field col l2 offset-m2 m4 offset-s4 s8">
          <label class="lll">Oficio <span class="red-text">*</span></label>
          <select name="DFOFIC" id="DFOFIC" class="actS browser-default" required>
            <option value="">Seleccione</option>
            <?php
              for ($i=0; $i < count($job); $i++) { 
                //$x = ($job[$i][0] == $disability_candidate["ADI_FK_TIFA"]) ? 'selected' : '' ; 
                echo '<option value="'.$job[$i][0].'">'.$job[$i][1].'</option>';
              }
            ?>
          </select>
        </div>

        <div class="col offset-l1 l3 m4 offset-s4 s8">
            <h6>Contácto de emergencia <span class="red-text">*</span><br>
              <input name="DFFEME" type="radio" class="actR" id="DFFEME1" value="S"/>
              <label for="DFFEME1">Si</label>
              <input name="DFFEME" type="radio" class="actR" id="DFFEME2" value="N"/>
              <label for="DFFEME2">No</label>
            </h6>
        </div>


      <div class="col l12 m12 s12">
         <div class="input-field col offset-l1 l5 m4 s12" style="padding-left: 0px;">
          <input name="DFDIRE" id="DFDIRE" type="text" class="actI validate" maxlength="100" required>
          <label for="DFDIRE" class="actL" style="left: 0px;">Dirección <span class="red-text">*</span></label>
        </div>

        <div class="input-field col l2 m4 s6">
          <input name="DFTEL1" id="DFTEL1" type="text" class="actI validate" maxlength="15" required pattern= "[0-9]*"  title= "Solo acepta números">
          <label for="DFTEL1" class="actL">Teléfono 1 <span class="red-text">*</span></label>
        </div>

        <div class="input-field col l2 m4 s6">
          <input name="DFTEL2" id="DFTEL2" type="text" class="actI validate" maxlength="15" pattern= "[0-9]*"  title= "Solo acepta números">
          <label for="DFTEL2" class="actL">Teléfono 2</label>
        </div>
    
      </div>

       
      <input type="submit" id="subFORM" style="display:none;">
      <input type="hidden" value="datos-familiares" name="ID">
      </form>
      </div>


      


    <div class="col l12 m12 s12">
        <p class="center-align contentBtn"><a class="btn-floating waves-effect waves-light red send2"><i class="material-icons medium">save</i></a></p>
    </div>

      
    <div class="col l12 m12 s12">
      <h6 class="center-align red white-text">Familiares ingresados</h6>
    </div>


      <div class="col l12 m12 s12 ">
        <table class="centered">
          <thead>
            <tr>
              <th>Apellidos</th>
              <th>Nombres</th>
              <th>C.I/Pasaporte</th>
              <th>F. de nacimiento</th>
              <th>Instrucción</th>
              <th>C. de emergencia</th>
              <th>Acción</th>
            </tr>
          </thead>

          <tbody class="tableContent">
            <?php 
              if ($family) {
                $row = null;
                for ($i=0; $i < count($family); $i++) { 
                  //$education_levelToString= $education_level[($family[$i][1])-1][1];
                  //$idClient = "_:".rand().":".rand(0,$countI).":spatium".rand().":".$Idiomas[$i][1].":id:".rand();
                  //$token= hash('sha256', $idClient);

                  //$row.='<tr data-token="'.$token.'" data-id="'.$idClient.'"> <td data-label="IDIOMAS">'.$idiomaS.'</td>'.
                  $row.='<tr data-id="'.$family[$i][0].'">'.
                  '<td>'.$family[$i][2].'</td>'.
                  '<td>'.$family[$i][3].'</td>'.
                  '<td>'.$family[$i][1].'</td>'.
                  '<td>'.$family[$i][5].'</td>'.
                  '<td>'.$education_level[$family[$i][10]-1][1].'</td>'.
                  '<td>'.$family[$i][6].'</td>'.
                  '<td><a href="javascript:" class="delete"><i class="material-icons">delete</i></a><a href="javascript:" class="edit"><i class="material-icons">edit</i></a></td>'.
                  '</tr>';
                }


                echo $row;
              }
            ?>
          </tbody>
        </table>
  </div>
</div>




