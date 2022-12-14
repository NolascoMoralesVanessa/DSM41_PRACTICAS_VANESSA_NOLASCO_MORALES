@include('layouts.header')

@include('layouts.menu')



<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Estudiantes</h1>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
          <!--   <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista De  Carreras</h6>
            </div> -->
             <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar estudiante</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Informacion del estudiante</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="/students">Continuar</a>
                </div>
            </div>
        </div>
    </div>
            <div class="card-body">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-primary">Estudiantes</h3>
                            <div class="d-flex justify-content-end">
                                    <a class="btn btn-primary" href="students/create"><i class="fa-solid fa-layer-group"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                                <th>id</th>
                                                <th>Nombre</th>
                                                <th>Surname</th>
                                                <th>Tema</th>
                                                <th>Operaciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                                <th>id</th>
                                                <th>Nombre</th>
                                                <th>Surname</th>
                                                <th>Tema</th>
                                                <th>Operaciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($students as $student)
                                        <tr>
                                            <td>{{$student->id}}</td>
                                            <td>{{$student->name}}</td>
                                            <td>{{$student->surname}}</td>
                                            <td>{{$student->subject_id}}</td>
                                            <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                        <a class="btn btn-success m-3" href="students/{{$student->id}}/" ><i class="fa-regular fa-eye"></i></a>
                                                        <a class="btn btn-warning m-3" href="students/{{$student->id}}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                       
                                            </div>
                                            <form action="students/{{$student->id}}" method="POST">
                                @csrf
                                 @method("delete")
                                         

                                      <button class="btn btn-danger " type="submit" title="Eliminar grupo"><i class="fas fa-trash"></i></button>  
                                </form>
                                         
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            </div>
        </div>



    </div>


   </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')


