<ul class="header__user-nav">
    @guest
        <li class="header__authorization">
            <a class="header__user-button {{request()->is('login') ? 'header__user-button--active' : ''}} header__authorization-button button"
               href="/login">
                Вход
            </a>
        </li>
        <li>
            <a class="header__user-button {{request()->is('registration') ? 'header__user-button--active' : ''}} header__register-button button"
               href="/registration">
                Регистрация
            </a>
        </li>
    @endguest
    @auth
        <li class="header__profile">
            <a class="header__profile-link" href="#">
                <div class="header__avatar-wrapper">
                    <img class="header__profile-avatar" src="../img/userpic-medium.jpg" alt="Аватар профиля">
                </div>
                <div class="header__profile-name">
                    <span>Антон Глуханько</span>
                    <svg class="header__link-arrow" width="10" height="6">
                        <use xlink:href="#icon-arrow-right-ad"></use>
                    </svg>
                </div>
            </a>
            <div class="header__tooltip-wrapper">
                <div class="header__profile-tooltip">
                    <ul class="header__profile-nav">
                        <li class="header__profile-nav-item">
                            <a class="header__profile-nav-link" href="#">
                                <span class="header__profile-nav-text">
                                Мой профиль
                                </span>
                            </a>
                        </li>
                        <li class="header__profile-nav-item">
                            <a class="header__profile-nav-link" href="#">
                                <span class="header__profile-nav-text">
                                Сообщения
                                <i class="header__profile-indicator">2</i>
                                </span>
                            </a>
                        </li>
                        <li class="header__profile-nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="header__profile-nav-link"
                                        style="margin: 0;
                                        padding: 0;
                                        border: none;
                                        background-color: transparent;
                                        cursor: pointer">
                                    <span class="header__profile-nav-text">
                                        Выход
                                    </span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <a class="header__post-button button button--transparent" href="adding-post.html">Пост</a>
        </li>
    @endauth
</ul>
