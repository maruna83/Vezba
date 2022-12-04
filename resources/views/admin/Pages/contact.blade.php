@extends ('admin.layouts.master')
​
@section('title', 'Admin | Kontakt')
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
<style>

</style>
@endsection
​
@section ('content')
<!--CONTACT US SECTION--->
<div class="card text-center">
    <div class="card-header">
        <h3>Kontakt </h3>
    </div>
    <div class="card-body">
        <form action="/admin/editContact" method="post">
            @csrf
            <form>
                <div class="form-row m-b-55">
                    <div class="value">
                        <div class="row row-refine">
                            <div class="col-3"></div>
                            <div class="col-6">
                                <div class="input-group-desc">
                                    <input class="form-control" type="text" name="ime" placeholder="Naziv" value="">
                                    <label class="label--desc">Naziv <span class="text-danger">* </span> <span class="text-danger"></span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row m-b-55">
                    <div class="value">
                        <div class="row row-refine">
                            <div class="col-2"></div>
                            <div class="col-4">
                                <div class="input-group-desc">
                                    <input class="form-control" type="text" name="adresa" placeholder="Adresa" value="">
                                    <label class="label--desc">Adresa <span class="text-danger">* </span> <span class="text-danger"></span></label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group-desc">
                                    <input class="form-control" type="text" name="mesto" placeholder="Mesto" value="">
                                    <label class="label--desc">Mesto <span class="text-danger">* </span> </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row m-b-55">
                    <div class="value">
                        <div class="row row-refine">
                            <div class="col-2"></div>
                            <div class="col-4">
                                <div class="input-group-desc">
                                    <input class="form-control" type="text" name="fiksni" placeholder="Telefon" value="">
                                    <label class="label--desc">Fiksni <span class="text-danger">* </span> <span class="text-danger"></span></label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group-desc">
                                    <input class="form-control" type="text" name="mobilni" placeholder="Mobilni" value="">
                                    <label class="label--desc">Mobilni <span class="text-danger">* </span> </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row m-b-55">
                    <div class="value">
                        <div class="row row-refine">
                            <div class="col-3"></div>
                            <div class="col-6">
                                <div class="input-group-desc">
                                    <input class="form-control" type="text" name="email" placeholder="Email" value="">
                                    <label class="label--desc">Email <span class="text-danger">* </span> <span class="text-danger"></span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row m-b-55">
                    <div class="value">
                        <div class="row row-refine">
                            <div class="col-2"></div>
                            <div class="col-4">
                                <div class="input-group-desc">
                                    <input class="form-control" type="text" name="facebook" placeholder="Facebook" value="">
                                    <label class="label--desc">Facebook <span class="text-danger">* </span> <span class="text-danger"></span></label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group-desc">
                                    <input class="form-control" type="text" name="instagram" placeholder="Instagram" value="">
                                    <label class="label--desc">Instagram <span class="text-danger">* </span> </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <div class="card-footer text-muted">
        <input class="btn btn-primary" type="submit" name="submit" value="Sacuvaj"><br><br>

        </form>
    </div>
</div>
<!--end contact us-->
@endsection
​
@section ('script')
<!-- NAVBAR -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- END NAVBAR -->
<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection