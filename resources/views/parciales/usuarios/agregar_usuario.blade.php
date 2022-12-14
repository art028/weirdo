@extends('usuarios')
@section('contenido_usuarios')

<div class="form">
    <div id = "encabezado">
         <p id="titulo">Nuevo Usuario</p>
    </div>
    <form action="#">
        <div class="container">
            <div class="formulario">
                <div>
                    <p>Nombre:</p>
                    <input type="text" value="" placeholder="Nombre del empleado">
                </div>
                <div>
                    <p>Apellido P:</p>
                    <input type="text" value="" placeholder="Apellido Patarno del empleado">
                </div>
                <div>
                    <p>Apellido M:</p>
                    <input type="text" value="" placeholder="Apellido Materno del empleado">
                </div>
                <div>
                    <p>Num Cel:</p>
                    <input type="number" value="" placeholder="Número celular del empleado">
                </div>
                <div>
                    <p>Fecha ingreso:</p>
                    <input type="date" value="" title="Fecha de registro">
                </div>
            </div>
            <div class="formulario2">
                <div>
                    <p>Correo:</p>
                    <input type="email" value="" placeholder="Correo del empleado">
                </div>
                <div>
                    <p>Contraseña:</p>
                    <input type="password" value="" placeholder="Contraseña del empleado ">
                </div>
                <div>
                    <p></p>
                    <input type="password" value="" placeholder="Confirme la contraseña ">
                </div>
                <div>
                    <p>Cargo:</p>
                    <select name="select">
                        <option value="0" selected disabled>Cargo del empleado</option>
                        <option value="value1">Value 1</option>
                        <option value="value2">Value 2</option>
                        <option value="value3">Value 3</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="botones">
            <a href=""><button>Cancelar</button></a>
            <a id="guardar"href=""><button>Guardar</button></a>
        </div>

    </form>


</div>


@endsection

