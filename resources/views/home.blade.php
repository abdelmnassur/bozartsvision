<x-auth>
    <div class="page-content--bge5">
        <div class="container mt-5">
            <div class="login-logo">
                <a href="#">
                <img src="{{ asset('template/images/icon/logo.png') }}" alt="CoolAdmin">
                </a>
            </div>
            <h1 class="text-center">Vous etes sur le logiciel de gestion des artistes du Burkina</h1>

            <div class="card-footer">
                <a class="btn btn-primary btn-sm" href="{{ route('login') }}">
                    <i class="fa fa-user"></i> CONNEXION
                </a>
                <a class="btn btn-danger btn-sm" href="{{ route('register') }}" >
                    <i class="fa fa-ban"></i> INSCRIPTION
                </a>
            </div>

            {{-- <div class="login-wrap">
                <div class="login-content mt-5">
                    <a >CONNEXION</a> <br>
                    <a >INSCRIPTION</a>
                </div>
            </div> --}}
        </div>
        <h4 class="text-center text-primary mt-5">Devéloppé par <b><i> Ouedraogo Abdel Nassur</i></b>, Informaticien</h4>
    </div>
</x-auth>