<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                  
                  

                    <li>
                        <a href="#" class="<?php if($this->request->params['controller']=='City'){ echo "active-menu";}?>"><i class="fa fa-sitemap"></i> Tour Category<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                 <a href="<?= SITEURL; ?>countrys">Country Master</a>
                            </li>
                             <li>
                                  <a href="<?= SITEURL; ?>province">Province Master</a>
                            </li>
                             <li>
                                 <a href="<?= SITEURL; ?>city"> City Master</a>
                            </li>
                             <li>
                                 <a href="<?= SITEURL; ?>collage"> Collage Master</a>
                            </li>
                            <li>
                                 <a href="<?= SITEURL; ?>program">Program Master</a>
                            </li>
                            <li>
                                 <a href="<?= SITEURL; ?>degree">Major Master</a>
                            </li>
                            <li>
                                 <a href="<?= SITEURL; ?>cms">Cms Master</a>
                            </li>
                            
                            
                        </ul>
                    </li>

                  
                </ul>

            </div>

        </nav>
  
  <!-- END SIDEBAR -->