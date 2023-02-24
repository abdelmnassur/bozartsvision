<x-auth>
    <div class="page-content--bge5">
        <div class="container mt-5">
            <div class="login-logo">
                <a href="#">
                <img src="{{ asset('template/images/icon/logo.png') }}" alt="CoolAdmin">
                </a>
            </div>
            <h1 class="text-center">Vous etes sur le logiciel de gestion des artistes du Burkina</h1>


            <div class="card">
                <div class="card-header">
                    <strong>Active Buttons </strong>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary btn-lg btn-block" href="{{ route('login') }}"><i class="fa fa-user"></i> CONNEXION</a>
                    <a class="btn btn-primary btn-lg btn-block" href="{{ route('register') }}"><i class="fa fa-user"></i> INSCRIPTION</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                  <strong class="card-title">Information</strong>
                </div>

                <div class="card-body">
                  <div class="typo-headers">
                    Information
                  </div>
                  <div class="typo-articles">
                    <p>
                      Nous travaillons sur le backend revenez plustard <big>&#128515;</big> !!!
                    </p>
                  </div>
                </div>
              </div>
        </div>
        <h4 class="text-center text-primary mt-5">Devéloppé par <b><i> Ouedraogo Abdel Nassur</i></b>, Informaticien</h4>
    </div>
</x-auth>