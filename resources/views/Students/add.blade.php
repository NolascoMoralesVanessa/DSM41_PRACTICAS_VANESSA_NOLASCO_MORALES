{{--  @include('layouts.header')
@include('layouts.menu')



@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Altas</h1>

</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Altas</h6>
            </div>
            <div class="card-body">

            <form action="{{ url('students') }}" method="post">
                {!! csrf_field() !!}
                <label for=""> Nombre:</label>
                <input class="form-control" type="text" id="name" name="name">
                <label for=""> Apellido:</label>
                <input class="form-control" type="text" id="surname" name="surname">
                <label for=""> Asignatura:</label>
                <input class="form-control" type="text" id="subject_id" name="subject_id">
                    <button type="submit" class="btn btn-primary m-3" value="save">Guardar</button>
                </div>
            </form>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')  --}}



@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Alta del estudiante</h1>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta del estudiante</h6>
            </div>
            <div class="card-body">

            <form action="{{ url('students') }}" method="post">
                {!! csrf_field() !!}  <!-- laravel almacena un token -->
                <label for=""> Nombre:</label>
                <input class="form-control" type="text" id="name" name="name">
                <label for=""> Apellido:</label>
                <input class="form-control" type="text" id="surname" name="surname">
                <label for=""> Asignatura Asignada:</label>
                <select class="form-control form-select" aria-label="Default select example" name="subject_id">
                    <option selected>Elige la asignatura</option>
                        @foreach($subjects as $subject)
                    <option value={{$subject->id}}>{{$subject->name}}</option>
                       @endforeach
                    </select>
                <div class="row">
                    <a class="btn btn-danger m-3"  href="/students" >Cancelar</a>
                    <button type="submit" class="btn btn-primary m-3" value="save">Guardar</button>
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
