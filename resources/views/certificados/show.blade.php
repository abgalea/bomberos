@extends('layouts.app')

@section('content')

{{-- <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">{{ $certificados->id}}</h1>
    <p class="lead">{{ $certificados->id}}</p>
    </div>
  </div> --}}

  <div class="card">
    <div class="card-header">
      Certificado de Identificacion Unica (CIU)N&deg;: {{ $certificados->id}}
    </div>
    <div class="card-body">
      <table width='100%'>
        <tbody>
          <tr>
            <td><img src='/img/logo_bom.jpg' width='50' /></td>
            <td><h2 class="card-title">Dirección Bomberos - Policía de la Provincia de Misiones - Ministerio de Gobierno</h2></td>
            <td><img src='/img/logo_polmis.jpg' width='50' /></td>
          </tr>
        </tbody>
      </table>
            <h3>EL FUNCIONARIO DE POLICIA QUE SUSCRIBE CERTIFICA QUE: EL USO / LOCAL</h3>
            Rubro: <b>{{ $certificados->rubro}}.</b><br>
            Titular: <b>{{ $certificados->nombre_comerciante}}.</b><br> 
            Domicilio: <b>{{ $certificados->direccion}}.</b><br> 
            Comercio: <b>{{ $certificados->nombre_comercio}}.</b><br> 
            Presentó todas las Documentaciones referidas al Sistema de Protección contra Incendios, acorde al proyecto presentado oportunamente.-<br> 
            Observaciones: <b>{{ $certificados->observaciones}}.</b> | Nro Certificado: <b>{{ $certificados->nro_certificado}}</b><br> 
            Nro Previa: <b>{{ $certificados->previa}}</b><br> 
            Valido Desde: <b>{{date('d/m/y', strtotime($certificados->desde))}}</b> Hasta: <b>{{date('d/m/y', strtotime($certificados->hasta))}}</b>
            <p>Emitido: <b>{{date('d/m/y', strtotime($certificados->fecha))}}</b> <br> <b>Puede Validar los Datos del Presente 
              Certificado en la Siguiente URL - <a href="https://policiamisiones.gob.ar/CIU/index.php?id={{$certificados->id}}">https://policiamisiones.gob.ar/CIU/</a></b>
            </p>
          <br><p></p><hr style='border:dashed #000 1px'><table width='100%'>
        <tbody>
          <tr>
            <td><img src='/img/logo_bom.jpg' width='40' /></td>
            <td><h3>Certificado de Identificacion Unica (CIU)N°: {{ $certificados->id}} - DUPLICADO</h3></td>
            <td><img src='/img/logo_polmis.jpg' width='40' /></td>
          </tr>
        </tbody>
      </table>
            <b>EL FUNCIONARIO DE POLICIA QUE SUSCRIBE CERTIFICA QUE: EL USO / LOCAL</b>
            Rubro: <b>{{ $certificados->rubro}}.</b><br>
            Titular: <b>{{ $certificados->nombre_comerciante}}.</b><br> 
            Domicilio: <b>{{ $certificados->direccion}}.</b><br> 
            Comercio: <b>{{ $certificados->nombre_comercio}}.</b><br> 
            Presentó todas las Documentaciones referidas al Sistema de Protección contra Incendios, acorde al proyecto presentado oportunamente.-<br> 
            Observaciones: <b>{{ $certificados->observaciones}}.</b> | Nro Certificado: <b>{{ $certificados->nro_certificado}}</b><br> 
            Nro Previa: <b>{{ $certificados->previa}}</b><br> 
            Valido Desde: <b>{{date('d/m/y', strtotime($certificados->desde))}}</b> Hasta: <b>{{date('d/m/y', strtotime($certificados->hasta))}}</b>
            <p>Emitido: <b>{{date('d/m/y', strtotime($certificados->fecha))}}</b> <br> <b>Puede Validar los Datos del Presente 
              Certificado en la Siguiente URL - <a href="https://policiamisiones.gob.ar/CIU/index.php?id={{$certificados->id}}">https://policiamisiones.gob.ar/CIU/</a></b>
            </p>
          
          <br><p></p><hr style='border:dashed #000 1px'><table width='100%'>
        <tbody>
          <tr>
            <td><img src='/img/logo_bom.jpg' width='40' /></td>
            <td><h3>Certificado de Identificacion Unica (CIU)N°: {{ $certificados->id}} - TRIPLICADO</h3></td>
            <td><img src='/img/logo_polmis.jpg' width='40' /></td>
          </tr>
        </tbody>
      </table>
            <b>EL FUNCIONARIO DE POLICIA QUE SUSCRIBE CERTIFICA QUE: EL USO / LOCAL</b>
            Rubro: <b>{{ $certificados->rubro}}.</b><br>
            Titular: <b>{{ $certificados->nombre_comerciante}}.</b><br> 
            Domicilio: <b>{{ $certificados->direccion}}.</b><br> 
            Comercio: <b>{{ $certificados->nombre_comercio}}.</b><br> 
            Presentó todas las Documentaciones referidas al Sistema de Protección contra Incendios, acorde al proyecto presentado oportunamente.-<br> 
            Observaciones: <b>{{ $certificados->observaciones}}.</b> | Nro Certificado: <b>{{ $certificados->nro_certificado}}</b><br> 
            Nro Previa: <b>{{ $certificados->previa}}</b><br> 
            Valido Desde: <b>{{date('d/m/y', strtotime($certificados->desde))}}</b> Hasta: <b>{{date('d/m/y', strtotime($certificados->hasta))}}</b>
            <p>Emitido: <b>{{date('d/m/y', strtotime($certificados->fecha))}}</b> <br> <b>Puede Validar los Datos del Presente 
              Certificado en la Siguiente URL - <a href="https://policiamisiones.gob.ar/CIU/index.php?id={{$certificados->id}}">https://policiamisiones.gob.ar/CIU/</a></b>
            </p>
          
    </div>
  </div>
  {{-- <script>
    window.print();
  </script> --}}
@endsection