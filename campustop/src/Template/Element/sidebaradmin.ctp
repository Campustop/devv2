<?php //echo $this->request->param('controller');?>

<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li>
                        <a href="#" class=""><i class="fa fa-sitemap"></i>Masters<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                        <li>
                        <a href="<?= SITEURL; ?>admin/countrys" class="<?php if($this->request->param('controller')=="Countrys"){ echo "active-menu"; } ?>"><i class="fa fa-dashboard"></i> Country Master</a>
                        </li>

                             <li>
                                  <a href="<?= SITEURL; ?>admin/province" class="<?php if($this->request->param('controller')=="Province"){ echo "active-menu"; } ?>"><i class="fa fa-dashboard"></i> Province Master</a>
                            </li>
                             <li>
                                  <a href="<?= SITEURL; ?>admin/city" class="<?php if($this->request->param('controller')=="City"){ echo "active-menu"; } ?>"><i class="fa fa-dashboard"></i>City Master</a>
                            </li>
                             <li>
                                 <a href="<?= SITEURL; ?>admin/collage" class="<?php if($this->request->param('controller')=="Collage"){ echo "active-menu"; } ?>"><i class="fa fa-dashboard"></i>Collage Master</a>
                            </li>
                            <li>
                                 
                                 <a href="<?= SITEURL; ?>admin/program" class="<?php if($this->request->param('controller')=="Program"){ echo "active-menu"; } ?>"><i class="fa fa-dashboard"></i>Program Master</a>
                            </li>
                            <li>
                                 <a href="<?= SITEURL; ?>admin/degree" class="<?php if($this->request->param('controller')=="Degree"){ echo "active-menu"; } ?>"><i class="fa fa-dashboard"></i>Major(degree) Master</a>
                            </li>
                            <li>
                            
                                 <a href="<?= SITEURL; ?>admin/cms" class="<?php if($this->request->param('controller')=="Cms"){ echo "active-menu"; } ?>"><i class="fa fa-dashboard"></i>Cms Master</a>
                            </li>

                    <li>
                        <a href="<?= SITEURL; ?>admin/Biographys" class="<?php if($this->request->param('controller')=="Biographys"){ echo "active-menu"; } ?>"><i class="fa fa-dashboard"></i>Biographys Master</a>
                    </li>
                    <li>
                        <a href="<?= SITEURL; ?>admin/Newsletter" class="<?php if($this->request->param('controller')=="Newsletter"){ echo "active-menu"; } ?>"><i class="fa fa-dashboard"></i> Newsletter Master</a>
                    </li>
                    <li>
                        <a href="<?= SITEURL; ?>admin/Skill" class="<?php if($this->request->param('controller')=="Skill"){ echo "active-menu"; } ?>"><i class="fa fa-dashboard"></i> Skill Master</a>
                    </li>
                    <li>
                        <a href="<?= SITEURL; ?>admin/Testinomials" class="<?php if($this->request->param('controller')=="Testinomials"){ echo "active-menu"; } ?>"><i class="fa fa-dashboard"></i> Testinomials Master</a>
                    </li>
                    <li>
                        <a href="<?= SITEURL; ?>admin/Univercity" class="<?php if($this->request->param('controller')=="Univercity"){ echo "active-menu"; } ?>"><i class="fa fa-dashboard"></i> Univercity Master</a>
                    </li>
                    <li>
                        <a href="<?= SITEURL; ?>admin/Userrole" class="<?php if($this->request->param('controller')=="Userrole"){ echo "active-menu"; } ?>"><i class="fa fa-dashboard"></i> User Role Master</a>
                    </li>
                    <li>
                        <a href="<?= SITEURL; ?>admin/Typesofresource" class="<?php if($this->request->param('controller')=="Typesofresource"){ echo "active-menu"; } ?>"><i class="fa fa-dashboard"></i> Types of resource Master</a>
                    </li>
                    <li>
                        <a href="<?= SITEURL; ?>admin/users/userlist" class="<?php if($this->request->param('controller')=="User"){ echo "active-menu"; } ?>"><i class="fa fa-dashboard"></i> User List Master</a>
                    </li>

                            
                        </ul>
                    </li>

                  
                </ul>

            </div>

        </nav>
  
  <!-- END SIDEBAR -->