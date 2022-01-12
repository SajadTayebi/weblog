<nav class="main-nav float-right d-none d-lg-block mb-5">
    <ul>
        <li class="active"><a href="#intro">خانه</a></li>
        <li><a href="#about">درباره ما</a></li>
        <li><a href="#services">خدمات</a></li>
        <li><a href="#portfolio">نمونه کار</a></li>
        <li><a href="#team">همکاران</a></li>
        <li class="drop-down"><a href="">منوی کاربری</a>
            <ul>
                @auth
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <li>
                            <a href="">پروفایل کاربری</a>
                        </li>
                        @if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
                            <li>
                                <a href="{{route('admin.panel')}}">پنل مدیریت</a>
                            </li>
                        @endif
                        <li>
                            <button class="btn btn-success btn-block">خروج</button>
                        </li>
                    </form>
                @else
                <li><a href="{{route('register')}}">ثبت نام</a></li>
                <li><a href="{{route('login')}}">ورود</a></li>
                @endauth
            </ul>
        </li>
        <li><a href="#footer">تماس با ما</a></li>
    </ul>
</nav><!-- .main-nav -->
