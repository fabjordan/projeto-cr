<nav class="navbar fixed-top navbar-expand-sm navbar-light">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <button type="button" id="sidebarCollapse" class="btn btn-link">
                <i class="fas fa-bars"></i>
            </button>
        </li>
        <form class="form-inline my-2 my-lg-0">
            <div class="cr-form__group" id="namer">
                <input type="text" class="cr-form__input" placeholder="Digite para buscar...">
            </div>
        </form>
    </ul>

    <div class="mx-auto">
        <img src="{{ asset('img/logo.png') }}" alt="logo" width="100">
    </div>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle cr-dropdown__toogle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="simple-icon-grid"></i>
                </button>
                <div class="dropdown-menu cr-dropdown__menu dropdown-menu-right mt-3 position-absolute" aria-labelledby="dropdownMenuButton">

                    <a class="cr-dropdown__item" href="#">
                        <i class="iconsmind-Equalizer"></i>
                        <span>Preferências</span>
                    </a>
                    <a class="cr-dropdown__item" href="#">
                        <i class="iconsmind-MaleFemale"></i>
                        <span>Perfil</span>
                    </a>
                    <a class="cr-dropdown__item" href="#">
                        <i class="iconsmind-File-Love"></i>
                        <span>Meus Arquivos</span>
                    </a>
                    <a class="cr-dropdown__item" href="#">
                        <i class="iconsmind-Post-Office"></i>
                        <span>Serventias</span>
                    </a>
                    <a class="cr-dropdown__item" href="#">
                        <i class="iconsmind-Bar-Chart"></i>
                        <span>Minhas Estatísticas</span>
                    </a>
                    <a class="cr-dropdown__item" href="#">
                        <i class="iconsmind-File-Network"></i>
                        Autenticidade de Documentos
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle cr-dropdown__toogle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="simple-icon-bell"></i>
                </button>
                <div class="dropdown-menu cr-dropdown__notification dropdown-menu-right overflow-hidden mt-3 scroll position-absolute" aria-labelledby="dropdownMenuButton">
                    <div class="d-flex flex-row mb-3 border-bottom">
                        <a href="" class="cr-dropdown__item">
                            <i class="iconsmind-MaleFemale"></i>
                        </a>
                        <div class="pl-3 pr-2">
                            <a href="#" class="dropdown-menu__notification">
                                <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-3 border-bottom">
                        <a href="" class="cr-dropdown__item">
                            <i class="iconsmind-MaleFemale"></i>
                        </a>
                        <div class="pl-3 pr-2">
                            <a href="#" class="dropdown-menu__notification">
                                <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-3 border-bottom">
                        <a href="" class="cr-dropdown__item">
                            <i class="iconsmind-MaleFemale"></i>
                        </a>
                        <div class="pl-3 pr-2">
                            <a href="#" class="dropdown-menu__notification">
                                <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-3 border-bottom">
                        <a href="" class="cr-dropdown__item">
                            <i class="iconsmind-MaleFemale"></i>
                        </a>
                        <div class="pl-3 pr-2">
                            <a href="#" class="dropdown-menu__notification">
                                <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-3 border-bottom">
                        <a href="" class="cr-dropdown__item">
                            <i class="iconsmind-MaleFemale"></i>
                        </a>
                        <div class="pl-3 pr-2">
                            <a href="#" class="dropdown-menu__notification">
                                <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle cr-dropdown__toogle" type="button" data-toggle="dropdown">
                    <i class="iconsmind-Male"></i> Jordan
                </button>
                <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute">
                    <a class="dropdown-item" href="#">Trocar de Grupo</a>
                    <a class="dropdown-item" href="#">Perfil</a>
                    <a class="dropdown-item" href="#">Sair</a>
                </div>
            </div>
        </li>
    </ul>
</nav>