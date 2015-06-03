<!-- Nav -->
<nav id="nav">
    <ul>
        <li><a href="index.html">{{Lang::get('navbar.inicio')}}</a></li>
        <li>
            <a href="#">{{Lang::get('navbar.noticias')}}</a>
            <ul>
                <li><a href="#">{{Lang::get('navbar.todas_noticias')}}</a></li>
                <li><a href="#">{{Lang::get('navbar.prensa')}}</a></li>
            </ul>
        <li>
            <a href="#">{{Lang::get('navbar.equipo')}}</a>
            <ul>
                <li>
                    <a href="#">{{Lang::get('navbar.subequipos')}}<i class="icon fa-angle-right fa-fw"></i>
                    </a>
                    <ul>
                        <li><a href="/gestion">{{Lang::get('navbar.gestion')}}</a></li>
                        <li><a href="#">{{Lang::get('navbar.arquitectura')}}</a></li>
                        <li><a href="#">{{Lang::get('navbar.civil')}}</a></li>
                        <li><a href="#">{{Lang::get('navbar.social')}}</a></li>
                        <li><a href="#">{{Lang::get('navbar.electrica')}}</a></li>
                        <li><a href="#">{{Lang::get('navbar.bioclimatica')}}</a></li>
                        <li><a href="#">{{Lang::get('navbar.diseno')}}</a></li>
                        <li><a href="#">{{Lang::get('navbar.web')}}</a></li>
                    </ul>
                </li>
                <li><a href="#">{{Lang::get('navbar.organigrama')}}</a></li>
            </ul>
        </li>
        <li>
            <a href="#">{{Lang::get('navbar.solar')}}</a>
            <ul>
                <li><a href="#">{{Lang::get('navbar.general')}}</a></li>
                <li><a href="#">{{Lang::get('navbar.competencias')}}</a></li>
            </ul>
        </li>
        <li>
            <a href="#">{{Lang::get('navbar.patrocinadores')}}</a>
            <ul>
                <li><a href="#">{{Lang::get('navbar.p_proyecto')}}</a></li>
                <li><a href="#">{{Lang::get('navbar.p_concurso')}}</a></li>
            </ul>
        </li>
    </ul>
</nav>