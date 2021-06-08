<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.php"><img src="Estilo/img/ui-sam.jpg" class="img-circle" width="80"></a></p>
            <h5 class="centered">Sam Soffes</h5>
            <li class="mt">
                <a class="<?php if (addslashes(htmlspecialchars(isset($_GET['hom'])))): echo "active";
else: echo "";
endif; ?>" href="index.php?hom">
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="<?php if ((addslashes(htmlspecialchars(isset($_GET['cad_func'])))) || (addslashes(htmlspecialchars(isset($_GET['cad_vei']))))): echo "active";
else: echo "";
endif; ?>" href="javascript:;">
                    <i class="fa fa-user"></i>
                    <span>Cadastros</span>
                </a>
                <ul class="sub">
                    <li class="<?php if (addslashes(htmlspecialchars(isset($_GET['cad_func'])))): echo "active";
else: echo "";
endif; ?>"><a href="general.php?cad_func">Funcionários</a></li>
                    
                    <li class="<?php if (addslashes(htmlspecialchars(isset($_GET['cad_vei'])))): echo "active";
else: echo "";
endif; ?>"><a href="panels.php?cad_vei">Veículos</a></li>

                </ul>
            </li>
            <li class="sub-menu">
                <a class="<?php if ((addslashes(htmlspecialchars(isset($_GET['vi_func'])))) || (addslashes(htmlspecialchars(isset($_GET['vi_vei']))))): echo "active";
else: echo "";
endif; ?>" href="javascript:;">
                    <i class="fa fa-eye"></i>
                    <span>Visualização</span>
                </a>
                <ul class="sub">
                    <li class="<?php if(addslashes(htmlspecialchars(isset($_GET['vi_func'])))): echo "active"; else: echo ""; endif;?>"><a href="grids.php?vi_func">Funcionários</a></li>
                    <li class="<?php if(addslashes(htmlspecialchars(isset($_GET['vi_vei'])))): echo"active"; else: echo""; endif;?>"><a href="calendar.php?vi_vei">Veículos</a></li>
              
                </ul>
            </li>
            <li class="sub-menu">
                <a class="<?php if(addslashes(htmlspecialchars(isset($_GET['re_licen'])))): echo"active"; else: echo ""; endif;?>" href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>Relatórios</span>
                </a>
                <ul class="sub">
                    <li class="<?php if(addslashes(htmlspecialchars(isset($_GET['re_licen'])))): echo "active"; else: echo ""; endif;?>"><a href="blank.php?re_licen">Licença de Aluguer</a></li>
              
                </ul>
            </li>
            <li class="sub-menu">
                <a class="<?php if(addslashes(htmlspecialchars(isset($_GET['est_tax'])))): echo "active"; echo "";endif;?>" href="javascript:;">
                    <i class="fa fa-area-chart"></i>
                    <span>Estatística</span>
                </a>
                <ul class="sub">
                    <li class="<?php if(addslashes(htmlspecialchars(isset($_GET['est_tax'])))): echo "active"; else: echo"";endif;?>"><a href="form_component.php?est_tax">Táxis</a></li>
      
                </ul>
            </li>
            <li class="sub-menu">
                <a class="<?php if((addslashes(htmlspecialchars(isset($_GET['so_sis'])))) || (addslashes(htmlspecialchars(isset($_GET['so_equi']))))): echo "active"; else: echo ""; endif;?>" href="javascript:;">
                    <i class="fa fa-th"></i>
                    <span>Sobre</span>
                </a>
                <ul class="sub">
                    <li class="<?php if(addslashes(htmlspecialchars(isset($_GET['so_sis'])))): echo "active"; else: echo ""; endif;?>"><a href="basic_table.php?so_sis">Sistema</a></li>
                    <li class="<?php if(addslashes(htmlspecialchars(isset($_GET['so_equi'])))): echo "active"; else: echo ""; endif;?>"><a href="responsive_table.php?so_equi">Equipa</a></li>
                    
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
















































