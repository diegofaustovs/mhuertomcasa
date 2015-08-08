<!-- Nav -->
<nav id="nav">
    <ul>
        <li><a href="/">{{Lang::get('navbar.inicio')}}</a></li>
        <li>
            <a href="#">{{Lang::get('navbar.noticias')}}</a>
            <ul>
                <li><a href='{{route('news')}}'>{{Lang::get('navbar.todas_noticias')}}</a></li>
                <li><a href='{{route('press')}}'>{{Lang::get('navbar.nuestra_prensa')}}</a></li>
                <li><a href='{{route('solar_press')}}'>{{Lang::get('navbar.prensa')}}</a></li>
            </ul>
        <li>
            <a href="">{{Lang::get('navbar.equipo')}}</a>
            <ul>
                <li>
                    <a href="">{{Lang::get('navbar.subequipos')}}</a>
                    <ul>
                        <li><a href='{{route('management')}}'>{{Lang::get('navbar.gestion')}}</a></li>
                        <li><a href="{{route('architecture')}}">{{Lang::get('navbar.arquitectura')}}</a></li>
                        <li><a href="{{route('civil')}}">{{Lang::get('navbar.civil')}}</a></li>
                        <li><a href="{{route('environmental')}}">{{Lang::get('navbar.ambiental')}}</a></li>
                        <li><a href="{{route('social')}}">{{Lang::get('navbar.social')}}</a></li>
                        <li><a href="{{route('electric')}}">{{Lang::get('navbar.electrica')}}</a></li>
                        <li><a href="{{route('orchards')}}">{{Lang::get('navbar.huerto')}}</a></li>
                        <li><a href="{{route('bioclimatics')}}">{{Lang::get('navbar.bioclimatica')}}</a></li>
                        <li><a href="{{route('design')}}">{{Lang::get('navbar.diseno')}}</a></li>
                        <li><a href="{{route('web')}}">{{Lang::get('navbar.web')}}</a></li>
                    </ul>
                </li>
                <li><a href="{{route('org_chart')}}">{{Lang::get('navbar.organigrama')}}</a></li>
            </ul>
        </li>
        <li>
            <a href="">{{Lang::get('navbar.solar')}}</a>
            <ul>
                <li><a href="{{route('solarInfo')}}">{{Lang::get('navbar.general')}}</a></li>
                <li><a href="{{route('contests')}}">{{Lang::get('navbar.competencias')}}</a></li>
            </ul>
        </li>
        <li>
            <a href="{{route('project_sponsors')}}">{{Lang::get('navbar.patrocinadores')}}</a>
        </li>
    </ul>
</nav>