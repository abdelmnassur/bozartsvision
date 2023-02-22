<x-auth>
    <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ asset('template/images/icon/logo.png') }}" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">

                                @csrf
                                <div class="form-group">
                                    @error('email')
                                    <small  class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <label>e-mail</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="exemple@email.com" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Mot de passe">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Se souvenir de moi
                                    </label>
                                    <label>
                                        <a href="#">Mot de paase oublié ?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Connexion</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Si vous ne possedez pa un compte alors
                                    <a href="{{ route('register') }}">Clique ici</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</x-auth>    