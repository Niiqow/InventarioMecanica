@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


<div class="container">

                              <div class="section text-left">
                              <div class="text-center">
                              <a class="btn btn-primary" href="{{ route('plan_estudio.index') }}">Volver</a>
                              </div>
                        <h2 class="title text-center">Ingeniería Mecánica en Mantenimiento Industrial</h2>

                  </div>

<div class="text-center">
        <a class="btn btn-primary" href="{{ route('MMIEquipos.index') }}">Equipos</a>
        <a class="btn btn-primary" href="{{ route('MMIInsumos.index') }}">Insumos</a>
        <a class="btn btn-primary" href="{{ route('MMIEquiposA.index') }}">Equipos Año</a>
        <a class="btn btn-primary" href="{{ route('MMIRelacion.index') }}">Relación Asig</a>
        <a class="btn btn-primary" href="{{ route('MMIFisica.index') }}">Física Mecánica</a>
</div>

<div class="section">

</div>

<div class="text-center">

<h3>Información general del Plan de Estudios y de su Estándar de Equipamiento</h3>
</div>

<br />
<br />
<br />

<table class="table">

    <tr>
      <td><h4>Área Académica</h4></td>
      <td><h4>Mecánica</h4></td>
    </tr>
    <tr>
      <td><h4>Programa</h4></td>
      <td><h4>Ingeniería Mecánica en Mantenimiento Industrial</h4></td>
    </tr>
    <tr>
      <td><h4>Mención</h4></td>
      <td><h4>Sin Mención</h4></td>
    </tr>

    <tr>
      <td><h4>Plan Código</h4></td>
      <td><h4>N3-N30-3</h4></td>
    </tr>

    <tr>
      <td><h4>Semestres</h4></td>
      <td><h4>8</h4></td>
    </tr>

    <tr>
      <td><h4>Versión</h4></td>
      <td><h4>2</h4></td>
    </tr>

    <tr>
      <td><h4>Alumnos por sección</h4></td>
      <td><h4>12</h4></td>
    </tr>


    <tr>
      <td><h4>Valorización del Equipamiento (UF IVA incluido)</h4></td>
      <td><h4>10027</h4></td>
    </tr>

    <tr>
      <td><h4>Valorización Insumos (UF IVA incluido)</h4></td>
      <td><h4>444,66</h4></td>
    </tr>
</table>
<br />
<br />
<br />
<h4>El Estándar de Equipamiento especificado en la hoja “Equipos”, está compuesto varias columnas, las que caracterizan al equipo y entregan datos de valorización para apoyar la implementación del equipamiento en Sede. A continuación se describen las columnas del formato:</h4>
<h4>• Equipo: corresponde a la descripción general del equipo.</h4>
<h4>• Especificación técnica detallada: entrega información adicional que permite precisar las características que debe tener el equipo, por ejemplo, precisión, requisitos técnicos, etc.</h4>
<h4>• Cantidad: es el número mínimo de equipos que deben existir en la sede para asegurar la ejecución de las actividades de aprendizaje.</h4>
<h4>• Valor unitario: corresponde al precio unitario del equipo. Esta valorización corresponde exclusivamente al valor del equipo y no considera costos adicionales por transporte, capacitación u otros.</h4>
<h4>• Valor total: resulta de multiplicar el valor unitario por la cantidad de equipos considerados en el estándar.</h4>
<h4>• Cod PS: Corresponde al código PeopleSoft que tiene el equipo. Este código será utilizado para efectuar las compras.</h4>
<h4>• Dólar referencia: dado que la mayoría de los equipos (sino todos) corresponden a bienes importados, se registrará en esta columna el valor del tipo de cambio promedio del mes anterior al que se realizó la última valorización del equipo.</h4>
<h4>• Observaciones: en esta columna se registrará cualquier información complementaria para la identificación del equipo.</h4>

<h4>La cantidad de equipos considerados en el estándar responden a los necesarios para implementar una sección de la asignatura, de tal modo que todos los alumnos tengan la oportunidad de utilizarlos en las actividades de aprendizaje consideradas en ella.</h4>
<h4>Durante la planificación académica, la Sede podrá implementar un mayor número de secciones en la medida en que se utilicen los equipos en distintos bloques horarios.</h4>
<h4>Para aquellos casos en que la Sede, por cantidad de alumnos y/o disponibilidad de instalaciones, no pueda operar adecuadamente con el estándar básico definido, podrá gestionar la adquisición de mayor cantidad de equipos, justificándolos adecuadamente durante la formulación de proyectos de inversión.</h4>
<h4>Asimismo, si la cantidad de equipos señalada en el estándar no es posible instalarla en la sede, podrá contar con una cantidad inferior, reduciendo, proporcionalmente el número de alumnos de la actividad.</h4>
<h4>Si durante el proceso de revisión periódica de estándares o a causa de un proceso de compras se detecta que el equipo no está disponible en el mercado, la Dirección de área definirá un equipo de reemplazo, el cual será registrado en la columna “Observaciones”.</h4>
<h4>Esta actualización no se considera como cambio del Estándar de Equipamiento, pues sólo corresponde a la definición de una alternativa de compra cuando el equipo originalmente considerado no está disponible. Por consiguiente, no afectará a las Sedes que ya dispongan del equipo.</h4>
<h4>Dentro de este formato de estándar, la hoja “Insumos-Consumibles” muestra un listado de equipos y/o herramientas que, si bien no se extinguen con el uso, no cumplen con los criterios para ser considerados activo fijo, por lo que no deben ser considerados en los proyectos de inversión preparados por la Sede, sino como artículos para la docencia dentro del presupuesto operativo del Programa de  Estudio.</h4>
<h4>La valorización de insumos es considerando precios Región Metropolitana. No considera eventuales costos de transporte.
                                


<div>

      <div class="section">

</div>
        </div>


@endsection
