@if(isset($consulta) && count($consulta) > 0)
<center>
<h3>Nota obtenida por curso:</h3>
<table>
<tr>
<th> CURSO &nbsp;</th>
<th> NOTA &nbsp;</th>
</tr>
@foreach($consulta as $registro)
<tr>
<td>{{ $registro->CURSO }}</td>
<td>{{ $registro->NOTA }}</td>
</tr>
@endforeach
</table>
</center>
<BR><BR>
@else
<h3>No se encontró ningún curso para calificar </h3>
@endif