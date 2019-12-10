@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


<div class="container">

                              <div class="section text-left">

                        <h2 class="title text-center">Ingeniería en Maquinaria, Vehículos Automotrices y Sistemas Electrónicos</h2>

                  </div>
<div class="text-center">

<h3>Información general del Plan de Estudios y de su Estándar de Equipamiento</h3>
</div>

<div class="section">

</div>

<table class="table">

    <tr>
      <td>Área Académica</td>
      <td>Mecánica</td>
    </tr>
    <tr>
      <td>Programa</td>
      <td>Ingeniería Mecánica en Mantenimiento Industrial</td>
    </tr>
    <tr>
      <td>Mención</td>
      <td>SIN MENCIÓN</td>
    </tr>

    <tr>
      <td>Plan Código</td>
      <td>N3-N30-3</td>
    </tr>

    <tr>
      <td>Semestres</td>
      <td>8</td>
    </tr>

    <tr>
      <td>Versión</td>
      <td>2</td>
    </tr>

    <tr>
      <td>Alumnos por sección</td>
      <td>12</td>
    </tr>


    <tr>
      <td>Valorización del Equipamiento (UF IVA incluido)</td>
      <td>10027</td>
    </tr>

    <tr>
      <td>Valorización Insumos (UF IVA incluido)</td>
      <td>444,66</td>
    </tr>
</table>
<br />
<br />
<br />
El Estándar de Equipamiento especificado en la hoja “Equipos”, está compuesto varias columnas, las que caracterizan al equipo y entregan datos de valorización para apoyar la implementación del equipamiento en Sede. A continuación se describen las columnas del formato:
• Equipo: corresponde a la descripción general del equipo.
• Especificación técnica detallada: entrega información adicional que permite precisar las características que debe tener el equipo, por ejemplo, precisión, requisitos técnicos, etc.
• Cantidad: es el número mínimo de equipos que deben existir en la sede para asegurar la ejecución de las actividades de aprendizaje.
• Valor unitario: corresponde al precio unitario del equipo. Esta valorización corresponde exclusivamente al valor del equipo y no considera costos adicionales por transporte, capacitación u otros.
• Valor total: resulta de multiplicar el valor unitario por la cantidad de equipos considerados en el estándar.
• Cod PS: Corresponde al código PeopleSoft que tiene el equipo. Este código será utilizado para efectuar las compras.
• Dólar referencia: dado que la mayoría de los equipos (sino todos) corresponden a bienes importados, se registrará en esta columna el valor del tipo de cambio promedio del mes anterior al que se realizó la última valorización del equipo.
• Observaciones: en esta columna se registrará cualquier información complementaria para la identificación del equipo.

La cantidad de equipos considerados en el estándar responden a los necesarios para implementar una sección de la asignatura, de tal modo que todos los alumnos tengan la oportunidad de utilizarlos en las actividades de aprendizaje consideradas en ella. Durante la planificación académica, la Sede podrá implementar un mayor número de secciones en la medida en que se utilicen los equipos en distintos bloques horarios. Para aquellos casos en que la Sede, por cantidad de alumnos y/o disponibilidad de instalaciones, no pueda operar adecuadamente con el estándar básico definido, podrá gestionar la adquisición de mayor cantidad de equipos, justificándolos adecuadamente durante la formulación de proyectos de inversión. Asimismo, si la cantidad de equipos señalada en el estándar no es posible instalarla en la sede, podrá contar con una cantidad inferior, reduciendo, proporcionalmente el número de alumnos de la actividad.
Si durante el proceso de revisión periódica de estándares o a causa de un proceso de compras se detecta que el equipo no está disponible en el mercado, la Dirección de área definirá un equipo de reemplazo, el cual será registrado en la columna “Observaciones”. Esta actualización no se considera como cambio del Estándar de Equipamiento, pues sólo corresponde a la definición de una alternativa de compra cuando el equipo originalmente considerado no está disponible. Por consiguiente, no afectará a las Sedes que ya dispongan del equipo.
Dentro de este formato de estándar, la hoja “Insumos-Consumibles” muestra un listado de equipos y/o herramientas que, si bien no se extinguen con el uso, no cumplen con los criterios para ser considerados activo fijo, por lo que no deben ser considerados en los proyectos de inversión preparados por la Sede, sino como artículos para la docencia dentro del presupuesto operativo del Programa de  Estudio.
La valorización de insumos es considerando precios Región Metropolitana. No considera eventuales costos de transporte.


<div>

      <div class="section">

</div>
                              </div>






@endsection
