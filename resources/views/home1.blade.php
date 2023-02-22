<div class="account-dropdown__footer">
    <a onClick="event.preventDefault(); document.getElementById('deconnection').submit()" href="">
        <i class="zmdi zmdi-power"></i>Déconnexion
    </a>
    
    <form action="{{ route('logout') }}" method="post" id="deconnection">
        @csrf
        @method('post')
    </form>

</div>