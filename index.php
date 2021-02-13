<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empleados";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actividad 3 - Diego Parente</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<style>
body {
  padding: 40px;
  display: column;
  justify-content: center;
  font-family: 'Roboto', sans-serif;
}


input {
  margin: 5px 20px;
  padding: 5px 7px;
  height: 18px;
  background-color: #fafafa;
  color: black;
  border-radius: 20px;
  outline: none;
  font-size: 11px;
  max-width: 70px;
  text-align: center;
  -webkit-transition: .25s all;
  transition: .25s all;
  border: 1px solid transparent;
}
button {
  border: none;
  border-radius: 100px;
  outline:none;
  background-color: purple;
  cursor: pointer;
  color: white;
  font-weight:700;
  padding: 10px 20px;
  margin: auto 0px;
}
.data-boxes {
  position: relative;
  display: flex;
  flex-wrap: nowrap;
  justify-content: space-between;
  align-content: center;
  align-items: center;
  padding: 10px 20px;
}
.data-boxes .data-box {
  display: column;
  justify-content: center;
  align-content: center;
  align-items: center;
  position: relative;
  flex-wrap: wrap;
  font-size: 2.5rem;
  border-right: 1px solid black;
  margin: 0px 10px;
}
.headerText {
  font-size: 2.7rem;
  color: black;
  display: flex;
  justify-content: center;
  font-weight: 700;
}
label {
  font-size: 13px;
}
#result {
  margin-top: 20px;
  color: green;
  font-weight: 900;
}
#errors {
  color: red;
  font-weight: 900;
}
.centered-button {
  display: flex;
  flex-wrap: nowrap;
  justify-content: center;
  align-content: center;
  position: relative;
  margin: 20px auto 0px;
}
.inline-class {
  display: inline-block !important;
}
select.string {
  width: 115px;
}
select.cedula {
  width: 40px;
}

.hasError {
  background-color: #F6D6DE;

}
.noError {
  border: 1px solid transparent;
  background-color: #fafafa;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
div.table {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-content: center;
  margin-top: 20px;
  text-align: center;
}
div.table h4 {
  width: 100%;
  display: inline-block;
}
</style>
<body>
  <div class="headerText">
    <p>Realice un programa en PHP que permita la entrada de nombre, apellido y cedula de 3 empleados al igual que sus respectivos sueldos, departamento y lugar de trabajo. utilice arreglos asociativos.</p>
  </div>
  <div class="data-boxes">
  <div class="data-box">
      <h3>Empleado #1</h3>
      <div>
        <label for="first">Nombre</label>
        <input class="firstname" type="text" placeholder="Ej. 'Diego'">
        <label for="first">Apellido</label>
        <input class="lastname" type="text" placeholder="Ej. 'Parente'">
      </div>
      <div>
        <label for="first">Cedula</label>
        <select class="pre-id" >
          <option value="V" default>V</option>
          <option value="P">P</option>
          <option value="E">E</option>
          <option value="J">J</option>
        </select>
        <input class="only-number cedula only-digits" type="text" placeholder="Ej. '27734444'"  style="margin-left: 5px;">
      </div>
      <div>
        <label for="first">Sueldo</label>
        <input class="salary numerical only-digits" type="text" value="0.00" min="0" step="0.01">
      </div>
      <div>
        <label for="first">Departamento</label>
        <select class="string department" >
          <option value="Ninguno" default>Ninguno</option>
          <option value="Programación">Programación</option>
          <option value="Diseño">Diseño</option>
          <option value="Marketing">Marketing</option>
          <option value="Recursos Humanos">Recursos Humanos</option>
        </select>
      </div>
      <div>
        <label for="first">Lugar de Trabajo</label>
        <select class="string workplace" >
          <option value="Oficina">Oficina</option>
          <option value="Remoto">Remoto</option>
          <option value="Cubiculos">Cubiculos</option>
        </select>
      </div>
    </div>

    <div class="data-box">
      <h3>Empleado #2</h3>
      <div>
        <label for="first">Nombre</label>
        <input class="firstname" type="text" placeholder="Ej. 'Diego'">
        <label for="first">Apellido</label>
        <input class="lastname" type="text" placeholder="Ej. 'Parente'">
      </div>
      <div>
        <label for="first">Cedula</label>
        <select class="pre-id" >
          <option value="V" default>V</option>
          <option value="P">P</option>
          <option value="E">E</option>
          <option value="J">J</option>
        </select>
        <input class="only-number cedula only-digits" type="text" placeholder="Ej. '27734444'"  style="margin-left: 5px;">
      </div>
      <div>
        <label for="first">Sueldo</label>
        <input class="salary numerical only-digits" type="text" value="0.00" min="0" step="0.01">
      </div>
      <div>
        <label for="first">Departamento</label>
        <select class="string department" >
          <option value="Ninguno" default>Ninguno</option>
          <option value="Programación">Programación</option>
          <option value="Diseño">Diseño</option>
          <option value="Marketing">Marketing</option>
          <option value="Recursos Humanos">Recursos Humanos</option>
        </select>
      </div>
      <div>
        <label for="first">Lugar de Trabajo</label>
        <select class="string workplace" >
          <option value="Oficina">Oficina</option>
          <option value="Remoto">Remoto</option>
          <option value="Cubiculos">Cubiculos</option>
        </select>
      </div>
    </div>
    <div class="data-box">
      <h3>Empleado #3</h3>
      <div>
        <label for="first">Nombre</label>
        <input class="firstname" type="text" placeholder="Ej. 'Diego'">
        <label for="first">Apellido</label>
        <input class="lastname" type="text" placeholder="Ej. 'Parente'">
      </div>
      <div>
        <label for="first">Cedula</label>
        <select class="pre-id" >
          <option value="V" default>V</option>
          <option value="P">P</option>
          <option value="E">E</option>
          <option value="J">J</option>
        </select>
        <input class="only-number cedula only-digits" type="text" placeholder="Ej. '27734444'"  style="margin-left: 5px;">
      </div>
      <div>
        <label for="first">Sueldo</label>
        <input class="salary numerical only-digits" type="text" value="0.00" min="0" step="0.01">
      </div>
      <div>
        <label for="first">Departamento</label>
        <select class="string department" >
          <option value="Ninguno" default>Ninguno</option>
          <option value="Programación">Programación</option>
          <option value="Diseño">Diseño</option>
          <option value="Marketing">Marketing</option>
          <option value="Recursos Humanos">Recursos Humanos</option>
        </select>
      </div>
      <div>
        <label for="first">Lugar de Trabajo</label>
        <select class="string workplace" >
          <option value="Oficina">Oficina</option>
          <option value="Remoto">Remoto</option>
          <option value="Cubiculos">Cubiculos</option>
        </select>
      </div>
    </div>
    </div>
    <div style="margin:0px auto; text-align:center;">
      <span id="errors"></span>
    </div>
    <div class="centered-button">
      <button onclick="getFormData()">Agregar Empleados</button>
    </div>
    <div style="margin-left: 20px; margin-top: 20px; text-align: center;">
      <span id="result"></span>
    </div>


    <div class="table">
    <h3>Empleados Registrados</h3>
  <br>
    <?php 
    $sql = "SELECT * FROM empleados";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {        
    ?>
    <table>
  <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Cedula</th>
    <th>Sueldo</th>
    <th>Lugar de Trabajo</th>
    <th>Departamento</th>
  </tr>
  <?php
    while($row = $result->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $row["nombre"]; ?></td>
    <td><?php echo $row["apellido"]; ?></td>
    <td><?php echo $row["cedula"]; ?></td>
    <td><?php echo $row["sueldo"]; ?></td>
    <td><?php echo $row["workplace"]; ?></td>
    <td><?php echo $row["department"]; ?></td>
  </tr>
  <?php } ?>
</table>
<?php 
  } else {
  ?>
  <h4>No se ha encontrado ningún empleado.</h4> 
  <?php
  }
?>
</div>


    
</body>
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>  
<script>
$(document).ready(function() {

})
$(document).on('blur', '.numerical', function() {
  var value = $(this).val();
  if (isNaN(value)) {
    $(this).val('');
  } else if (!value) {
    return;
  } else {
    value = parseFloat(value).toFixed(2);
    $(this).val(value);
  }
});

$('.only-number').on('blur', function() {
  var value = numberWithCommas($(this).val());
    $(this).val(value);
});

$('.only-digits').on('keypress', function(key) {
    if(key.charCode < 48 || key.charCode > 57) return false;
});

  function getFormData() {
    let formData = [];
    let name = "";
    let lastname = "";
    let salary = "";
    let preID = "";
    let cedula = "";
    let department = "";
    let workplace = "";
    let cedulaFull = "";
    let dataBox = {};
    $('.data-box').each(function(index) {
      name = $(this).find('.firstname').val();
      lastname = $(this).find('.lastname').val();
      workplace = $(this).find('.workplace').val();
      department = $(this).find('.department').val();
      salary = $(this).find('.salary').val();
      preID = $(this).find('.pre-id').val();
      cedula = $(this).find('.cedula').val();
      cedulaFull = `${preID}${cedula}`;
      dataBox = {
        index, name, lastname, salary, workplace, department, cedulaFull 
      };
      formData.push(dataBox);
      dataBox = {};
    });
    validateForm(formData);
  }

  function validateForm(formData) {
    let formsErrors = 0;
    formData.forEach(data => {
      if(!formsErrors) {
        if(data.name === '' || data.lastname === '' || data.salary === '' ||  data.cedulaFull.length === 1 || data.workplace === '' || data.department === '') {
          formsErrors++;
          return false;
        }
      }
    });
    if(formsErrors === 0) {
      submitForm(formData);
      $("#errors").text("");
    } else {
      $("#errors").text("Se encontraron errores en el formulario, corrijalos y vuelva a intentar.");
    }
  }

  function submitForm(formData) {
    $.ajax({
        url:"process.php",
        type:"POST",  
        data: {formData : formData}, 
        success:function(result){  
          if(result === "Errors") {
            $("#result").text("Ha ocurrido un error en la Base de datos, por favor intenta mas tarde");
          } else {
            $("#result").text(`${result}`);
            setTimeout(() => {
              location.reload();
            }, 2500);
          }
        }  
    });
  }

  function numberWithCommas(x) {
    var parts = x.toString().split(".");
    parts[0]=parts[0].replace(/\B(?=(\d{3})+(?!\d))/g,".");
    return parts.join(",");
  }


</script>

<?php
if(isset($_POST["registration"])) {
  echo $_POST["registration"]."---".$_POST["email"];  
}
?>
</html>