</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="d-none d-md-block"><?=($this->session->userdata('lang') == "en") ? 'EN' : 'ID'; ?> <i class="fa fa-angle-down"></i></span>
                             <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?=base_url("en/")?>"><img src="<?=base_url("images/icons/flags/usa.png")?>" alt="EN"> English</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=base_url("id/")?>"><img src="<?=base_url("images/icons/flags/indonesia.png")?>" alt="ID"> Bahasa</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"><?= $this->session->userdata('u_email')?></a></li>
                    </ul>
                    <ul class="navbar-nav float-right"><li class="nav-item dropdown"><a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"><?= $this->session->userdata('id_user')?></a></li></ul>
                </div>
            </nav>
        </header>
        
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    
                    <ul id="sidebarnav" class="p-t-30">
                        <?php 
                        echo ($this->session->userdata('l_lvl')=='121096') ? '<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="'.base_url("fiucontrol/root_back_user").'" aria-expanded="false"><i class="mdi  mdi-crown"></i><span class="hide-menu">'.$this->lang->line('top_bar-root').'</span></a></li>' : '';
                        ?>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url()?>" aria-expanded="false"><i class="mdi  mdi-arrow-left"></i><span class="hide-menu"><?=$this->lang->line('panel13');?></span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url("ifaccount/profile")?>" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu"><?=$this->lang->line('panel14');?></span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu"><?=$this->lang->line('panel15');?></span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?=base_url("ifjobv/udata")?>" class="sidebar-link"><i class="mdi mdi-contact-mail"></i><span class="hide-menu"> <?=$this->lang->line('panel20thif');?> </span></a></li>
                                <li class="sidebar-item"><a href="<?=base_url("ifjobv/ufile")?>" class="sidebar-link"><i class="mdi mdi-folder"></i><span class="hide-menu"> <?=$this->lang->line('panel21thif');?> </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url("intnog/logout")?>" aria-expanded="false"><i class="mdi  mdi-logout"></i><span class="hide-menu">Logout</span></a></li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        
        <div class="page-wrapper">
            <div class="container-fluid">