<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">New Class</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Trandings</li>
              <li class="breadcrumb-item active"><a href="{{ url('trandings/newclass') }}">New Class</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Index</h3>
                <div class="float-right"><i class="fas fa-plus size:2x"></i> <a href="{{ url('trandings/newclass/create-new') }}">Create New</a></div>

            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Kelas</th>
                          <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($newclases as $idx => $ncls)
                      <tr>
                          <td>{{ $idx+1 }}</td>
                          <td>{{ $ncls->name }}</td>
                          <td>{{ $ncls->classes->name }}</td>
                          <td>
                            <a href="{{ url('trandings/newclass/update/'.$ncls->idnewclass) }}"><i class="fas fa-edit" title="Update New Class"></i></a>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>                    
                </table>
            </div>
        </div>  
    
      </div>
    </section>
  </div>