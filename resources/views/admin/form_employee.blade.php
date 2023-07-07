<form action="employee_store" method="POST">
 
    @csrf
 
    <label>Nombre</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"  name="nombre" id="" required>
    <br>
    <label>Fecha de nacimiento</label>
    <input type="date" id="start" name="fecha" required>
    <br>
    <label>Edad</label>
    <input type="number" type="text" class="form-control" name="edad" id="" required>
    <br>
    <label>Genero</label>
    <select class="form-select" aria-label="Default select example" name="genero" required>
        <option selected value="">selecciona</option>
        <option value="Hombre">Hombre</option>
        <option value="Mujer">Mujer</option>
    </select >
    <br>
    <label>Sueldo base</label>
    <input type="number" type="text" class="form-control" name="sueldo" id="" required>
    <br>

    <label>Acerca de</label>
    <input type="text" type="text" class="form-control" name="acerca" id="" required>
    <br>

    <label>pasatiempo</label>
    <input type="text" type="text" class="form-control" name="pasatiempo" id="" required>
    <br>

    <label>idioma</label>
    <input type="text" type="text" class="form-control" name="idioma" id="" required>
    <br>

    <input type="submit" value="Enviar">
</form>