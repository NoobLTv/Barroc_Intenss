@extends('app')

@section('content')
    <br>
<div class="container footer-fix">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Goedendag {{ Auth::user()->name }},</h2>
                    <p>Welkom bij het online portaal van Barroc Intense.<p>
                    <p>U kunt bovenaan in de taakbalk alle verwijzingen vinden naar wat u zoekt.</p>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


@endsection
