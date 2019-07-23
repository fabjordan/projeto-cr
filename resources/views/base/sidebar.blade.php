<nav class="cr-sidebar">
    <div class="cr-sidebar-header"></div>
    <ul class="list-unstyled components">
        <li class="active">
            <a href="{{ route('cliente.dashboard') }}" class="text-center">
                <i class="iconsmind-Monitor-Analytics"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('cliente.certidoes') }}" class="text-center">
                <i class="iconsmind-Letter-Open"></i>
                Pedidos de Certidão
            </a>
        </li>
        <li>
            <a href="{{ route('cliente.protocolo') }}" class="box">
                <i class="iconsmind-Network"></i>
                Protocolo Eletrônico
            </a>
        </li>
        <li>
            <a href="{{ route('cliente.protesto') }}">
                <i class="iconsmind-Information"></i>
                Intimação Eletrônica de Protesto
            </a>
        </li>
        <li>
            <a href="{{ route('cliente.dashboard') }}">
                <i class="iconsmind-Support"></i>
                Chamados
            </a>
        </li>
        <li>
            <a href="#">
                <i class="iconsmind-File-Network"></i>
                Autenticidade de Documentos
            </a>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="iconsmind-Gears"></i>
                Configurações
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="{{ route('cliente.perfil') }}">
                        <i class="iconsmind-Profile"></i>
                        Meu Perfil
                    </a>
                </li>
                <li>
                    <a href="{{ route('cliente.dashboard') }}">    
                        <i class="iconsmind-Equalizer"></i>
                        Preferências
                    </a>
                </li>

            </ul>
        </li>
    </ul>
</nav>
