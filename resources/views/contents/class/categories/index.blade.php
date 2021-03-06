<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Lecture</li>
              <li class="breadcrumb-item active"><a href="{{ url('lecture/categories') }}">Categories</a></li>
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
                <div class="float-right"><i class="fas fa-plus size:2x"></i> <a href="{{ url('lecture/categories/create-new') }}">Create New</a></div>

            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Gambar Kategori</th>
                          <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $idx => $categorie)
                        <tr>
                          <td>{{ $idx+1 }}</td>
                          <td>{{ $categorie->name }}</td>

                            <td>
                              @if (is_null($categorie->images))
                                <label> - </label>
                              @else
                                <img class="img-rounded zoom" src="{{$categorie->url}}" width="50">
                              
                              @endif
                          </td>
                        <td>
                          <a href="{{ url('lecture/categories/update/'.$categorie->idcategories) }}"><i class="fas fa-edit" title="edit categories"></i></a>
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

{{-- <script>
  function btn_delete(idcategories){
    $('#idcategories').val(idcategories)
  }
</script> --}}

{{-- <script>

  function btn_delete(idcategories){
    
  }

</script> --}}