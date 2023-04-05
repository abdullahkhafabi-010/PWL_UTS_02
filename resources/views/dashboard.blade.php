<script>
  alert('Selamat Datang');
</script>

@extends('layout.main')

@section('isi')
    
<!-- Main content -->
<section class="content">
    <div class="jumbotron jumbotron-fluid">
        <div class="inner">
            <h4 style="font-weight: bold">Selamat Datang</h4>

            <h5 style="font-weight: bold">{!! $full_name !!}</h5>
        </div>
      </div>
</section>
  <!-- /.content-wrapper -->
@endsection