@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Grupos </h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i></a>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta</h6>
            </div>
            <div class="card-body">

             <form action="{{ url('groups') }}" method="post">
             {!! csrf_field() !!}
                <label for=""> Nombre:</label>
                <input class="form-control" type="text" id="name" name="name">
                <label for=""> Descripcion:</label>
                <input class="form-control" type="text" id="description" name="description" >

                {{--  <label for=""> Estudiante:</label>
                <input class="form-control" type="text" id="student_id" name="student_id" >
                <div class="row">  --}}



                    <label for=""> Estudiante:</label>
                    <select class="form-control form-select" aria-label="Default select example" name="student_id">
                    <option selected>Nombre estudiante</option>
                        @foreach($students as $student)
                        <option value={{$student->id}}>{{$student->name}}</option>
                       @endforeach
                    </select>
                </div>
                <div class="row">

                    <button type="submit" class="btn btn-primary m-3">Guardar</button>

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

@section('footer')

@endsection
