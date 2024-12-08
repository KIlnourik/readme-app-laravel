<ul class="header__my-nav">
    <li class="header__my-page header__my-page--popular">
        <a class="header__page-link {{request()->is('popular') ? 'header__page-link--active' : ''}}" href="/popular" title="Популярный контент">
            <span class="visually-hidden">Популярный контент</span>
        </a>
    </li>
    <li class="header__my-page header__my-page--feed">
        <a class="header__page-link {{request()->is('feed') ? 'header__page-link--active' : ''}}" href="/feed" title="Моя лента">
            <span class="visually-hidden">Моя лента</span>
        </a>
    </li>
    <li class="header__my-page header__my-page--messages">
        <a class="header__page-link {{request()->is('user/messages') ? 'header__page-link--active' : ''}}" href="/messages" title="Личные сообщения">
            <span class="visually-hidden">Личные сообщения</span>
        </a>
    </li>
</ul>
