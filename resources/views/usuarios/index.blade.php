<style>
  table {
    width: 100%;
    border-collapse: collapse;
  }

  th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }
</style>

<div>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Imagen usuarios</th>
        <th>matricula</th>
        <th>nombre</th>
        <th>app</th>
        <th>apm</th>
        <th>fn</th>
        <th>email</th>
        <th>pass</th>
        <th>idt_usuario</th>
        <th>activo</th>
      </tr>
    </thead>
    <tbody>
      @foreach($usuarios as $usuarios)
        <tr>
          <td>{{$usuarios->id_usuario}}</td>
          <td>{{$usuarios->img}}</td>
          <td>{{$usuarios->matricula}}</td>
          <td>{{$usuarios->nombre}}</td>
          <td>{{$usuarios->app}}</td>
          <td>{{$usuarios->apm}}</td>
          <td>{{$usuarios->fn}}</td>
          <td>{{$usuarios->email}}</td>
          <td>{{$usuarios->pass}}</td>
          <td>{{$usuarios->idt_usuario}}</td>
          <td>{{$usuarios->activo}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>