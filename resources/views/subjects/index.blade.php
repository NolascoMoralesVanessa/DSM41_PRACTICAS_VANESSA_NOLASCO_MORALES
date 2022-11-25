@include('layouts.header')

@include('layouts.menu')

@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> </h1>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
            <div class="card-body">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-1 font-weight-bold text-primary">Asignaturas</h6>
                            <div class="d-flex justify-content-end">
                                    <a class="btn btn-primary" href="subjects/create"  ><i class="fa-sharp fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                       <thead>
                                            <tr> 
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
                                                <th>Operaciones</th>
                                            </tr>
                                        </thead>
                                        
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
                                                <th>Operaciones</th>
                                            </tr>
                                            <tfoot>
                                            <tboddy>
                                            @foreach($subjects as $subject)
                                              <tr>
                                              <td>{{$subject->id}}</td>
                                              <td>{{$subject->name}}</td>
                                              <td>{{$subject->description}}</td>
                                              <td>

                                            <div class="btn-group" role="group" aria-label="Basic  mixed styles example">
                                                        <a class="btn btn-success m-3" href="subjects/{{$subject->id}}"><i class="fa-solid fa-eye"></i></a>
                                                        <a class="btn btn-warning m-3" href="subjects/{{$subject->id}}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                        
                                            </div>
                                            <form action="subjects/{{$subject->id}}" method="POST">
                                @csrf
                                 @method("delete")
                                         

                                      <button class="btn btn-danger " type="submit" title="Eliminar tema"><i class="fas fa-trash"></i></button>  
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


    