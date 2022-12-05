@extends ('admin.layouts.master')
​
@section('title', 'Admin | Prostorije')
​
@section ('css')
<!-- NAVBAR -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- END NAVBAR -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/878f92c316.js" crossorigin="anonymous"></script>
<style>

</style>
@endsection
​
@section ('content')
<div class="row">
    <div class="col-sm-3">
        @if(session('message'))
        <div class="alert alert-{{session('message.type')}}">
            {{session('message.text')}}
        </div>
        @endif
        @if (session('status'))
    <h6 class="alert alert-success mt-2">{{ session('status') }}</h6>
    @endif
    </div>
    <div class="col-sm-6">
        <div class="card text-center">
            <div class="card-header">
                <h3>Prostorije </h3>
            </div>
            @if (session('status'))
    <h6 class="alert alert-success mt-2">{{ session('status') }}</h6>
    @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-center">
                        <caption class="align-left">
                            <span>Lista Prostorija</span>
                        </caption>
                        <caption style="text-align:right">
                            <a href="/admin/insertRooms" class="btn btn-warning align-right"><span class="align-right">Dodaj novo</span></a>
                        </caption>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Naziv</th>
                                <th scope="col" class="align-right">Opcije</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($rooms)
                            @foreach($rooms as $room)
                            {{$rb=$rb+1}}
                            <tr>
                                <th scope="row">{{ $rb }}</th>
                                <td>{{$room->naziv}}</td>
                                <td class="">

                                    <div class="row justify-content-center btn-group">
                                        <div class="d-inline p-2">
                                            <a href="/admin/previewRoom/id/{{$room->id}}" class="nav-link text-center card-link">
                                                <span class="fas fa-edit" style="font-size: 22px;" aria-hidden="true"></span></a>
                                        </div>
                                        <div class="d-inline p-2">
                                            <a href="/admin/deleteRoom/id/{{$room->id}}" class="nav-link text-center card-link" }>
                                                <span class="fas fa-trash" style="font-size: 22px;" aria-hidden="true"></span></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
​
@section ('script')
<!-- NAVBAR -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- END NAVBAR -->

@endsection