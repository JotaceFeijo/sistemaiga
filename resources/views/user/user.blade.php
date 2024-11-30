@extends("template")
@section("content")
<h1>
        USUARIOS
        </h1>
<table class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">ID</h6>
                        </th>
                       <th> <h6 class="fs-4 fw-semibold mb-0">Nombres</h6></th>
                       <th> <h6 class="fs-4 fw-semibold mb-0">Apellido Paterno</h6></th>
                       <th><h6 class="fs-4 fw-semibold mb-0">Apellido Materno</h6></th>
                       <th><h6 class="fs-4 fw-semibold mb-0">Email</h6></th>
                       <th><h6 class="fs-4 fw-semibold mb-0">Editar</h6></th>
                       <th><h6 class="fs-4 fw-semibold mb-0">Eliminar</h6></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($user as $users )


                    <tr>
                      <td>{{ $users->id}}</td>
                      <td>{{ $users->name}}</td>
                      <td>{{ $users->firstname}}</td>

                      <td>{{ $users->lastname}}</td>
                      <td>{{ $users->email}}</td>
                      <td>editar</td>
                      <td>eliminar</td>
                    </tr>
                    @endforeach



                  </tbody>
                </table>
@endsection
