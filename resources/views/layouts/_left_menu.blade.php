<ul id="menu" class="page-sidebar-menu">
    <li {!! (Request::is('dashboard') ? 'class="active"' : '') !!}>
        <a href="{{ route('dashboard') }}">
            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">Dashboard</span>
        </a>
    </li>

    <li {!! (Request::is('users') || Request::is('users/create') || Request::is('user_profile') || Request::is('users/*') || Request::is('deleted_users') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">Пользователи</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('users') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Список
                </a>
            </li>
            <li {!! (Request::is('users/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('users/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Добавить
                </a>
            </li>
            <li {!! ((Request::is('users/*')) && !(Request::is('users/create')) ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::route('users.show',Sentinel::getUser()->id) }}">
                    <i class="fa fa-angle-double-right"></i>
                    Просмотр профиля
                </a>
            </li>
            <li {!! (Request::is('deleted_users') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('deleted_users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Удалить
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('groups') || Request::is('groups/create') || Request::is('groups/*') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">Группы пользователей</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('groups') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('groups') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Список
                </a>
            </li>
            <li {!! (Request::is('groups/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('groups/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Добавить
                </a>
            </li>
        </ul>
    </li>


    <!-- Menus generated by CRUD generator -->
    @include('layouts/menu')
</ul>
