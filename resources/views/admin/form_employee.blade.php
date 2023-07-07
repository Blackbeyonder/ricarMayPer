<form action="contact_post" method="POST">
 
    @csrf
 
    <label>Nombre</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"  name="nombre" id="">
    <br>
    <label>Fecha de nacimiento</label>
    <input type="date" id="start" name="trip-start">
    <br>
    <label>Edad</label>
    <input type="number" type="text" class="form-control" name="apellido" id="">
    <br>
    <label>Genero</label>
    <input type="text" type="text" class="form-control" name="apellido" id="">
    <br>
    <label>Sueldo base</label>
    <input type="number" type="text" class="form-control" name="apellido" id="">
    <br>
    <input type="submit" value="Enviar">
</form>