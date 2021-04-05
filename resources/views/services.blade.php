@extends('templates.app')
@section('title')
   Nos Services
@endsection
@section('content')

<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Services</h3>
            
            <div class="row">
                <div class="col-md-12">
                    <!-- BORDERED TABLE -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Nos services</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>nom</th>
                                        <th>Prix</th>
                                        <th>Categorie</th>
                                        <th>Description</th>
                                        <th>etat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i = 0;
                                        \Carbon\Carbon::setLocale('fr');
                                    ?>
                                    @foreach ($services as $service)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $service->name }}</td>
                                            <td>{{ $service->price }} $</td>
                                            <td>{{ $service->categories }}</td>
                                            <td>{{ ($service->state == 'disponible') ? 'disponible' : 'loue' }}</td>
                                            <td>{{ $service->description }}</td>
                                            {{-- <td>
                                                <button type="button" class="btn btn-warning">bloquez</button>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END BORDERED TABLE -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->

@endsection