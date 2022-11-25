@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Editar Estudiante</h1>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Estudiante</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('students/' .$students->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input class="form-control" type="text" value="{{$students->id}}" aria-label="Disabled input example" disabled>
                <label for=""> Nombre:</label>
                <input class="form-control" type="text" id="name" name="name" value="{{$students->name}}">
                <label for=""> Apellido:</label>
                <input class="form-control" type="text" id="surname" name="surname" value="{{$students->surname}}">
                <label for=""> Asignatura:</label>
                <input class="form-control" type="text" id="subject_id" name="subject_id" value="{{$students->subject_id}}">
                <div class="row">
                    <button type="submit" class="btn btn-primary m-3" value="update">Guardar</button>

                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')