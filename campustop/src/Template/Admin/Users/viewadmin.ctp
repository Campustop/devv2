<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           User
                        </div>
                       <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
				
				<div class="users form">
				<table class='table table-striped table-bordered table-hover dataTable no-footer'>
				<?= $this->Form->create($user,['action'=>'viewadmin']) ?>
					<tr>
						<td>
							<label>First Name:</label>
						</td>
						<td>

						<label><?php echo $user['fname']; ?></label>
							
						</td>
					</tr>
					<tr>
						<td>
							<label>Middle Name:</label>
						</td>
						<td>

							<label><?php echo $user['mname']; ?></label>
							
						</td>
					</tr>
					<tr>
						<td>
							<label>Last Name:</label>
						</td>
						<td>

							<label><?php echo $user['lname']; ?></label>
							
						</td>
					</tr>
					<tr>
						<td>
							<label>User Name:</label>
						</td>
						<td>

							<label><?php echo $user['username']; ?></label>
							
						</td>
					</tr>
					<tr>
						<td>
							<label>Role:</label>
						</td>
						<td>

							<?php echo $this->Form->select('user_role_name', $userrole,['id'=>'role']); ?>
							
						</td>
					</tr>
					<tr>
						<td>
							<label>Country Name:</label>
						</td>
						<td>
							<?php echo $this->Form->select('country_id', $country,['id'=>'country_id','disabled' => 'true']); ?>
							
						</td>
					</tr>
				
					<tr>
					
						<td>
				
						</td>
						</tr>
					<tr>
					<?php 	if(count($work)>0)
                    {?>
                                                   
					<tr>
							<td colspan="2">
										<label>Work Experience</label>
							</td>
					</tr>
					<tr>
							<td colspan="2">
				
					
							<table class='table table-bordered  no-footer'>

							<tr>
								<th>Worked In</th>
								<th>Job Was</th>
								<th>Worked On</th>
								<th>Work Period</th>
								<th>Work Experience</th>
								<th>Work </th>
							</tr>
								<?php foreach ($work as $list): 
                                                    	//pr($list);
                                                    ?>
								<tr>
									
									<td>

										<label><?php echo $list['worked_in'];?></label>
										
									</td>
								
									<td>
										<label><?php if($list['job_was']=="parttime"){ echo "parttime";}else{ echo "fulltime";}  ?></label>
									</td>
									<td>

										<label><?php echo $list['worked_on']; ?></label>
									</td>
								
									<td>
										<label><?php echo $list['work_from'].'-'.$list['work_end'] ?></label>
									</td>
									<td>

										<label><?php echo $list['work_experience']; ?></label>
									</td>
								
									<td>
										<label><?php if($list['work_flag']=="1"){ echo "Private";}else{ echo "public";}  ?></label>
									</td>
									
								</tr>
							<?php endforeach; ?>
							
						</table>
						</td>
					</tr>
					<?php }?>
					<?php 	if(count($education)>0)
                    {?>
                                                   
					<tr>
							<td colspan="2">
										<label>Work Experience</label>
							</td>
					</tr>
					<tr>
							<td colspan="2">
				
					
							<table class='table table-bordered  no-footer'>

							<tr>
								<th>Worked In</th>
								<th>Job Was</th>
								<th>Worked On</th>
								<th>Work Period</th>
								<th>Work Experience</th>
								<th>Work </th>
							</tr>
								<?php foreach ($work as $list): 
                                                    	//pr($list);
                                                    ?>
								<tr>
									
									<td>

										<label><?php echo $list['worked_in'];?></label>
										
									</td>
								
									<td>
										<label><?php if($list['job_was']=="parttime"){ echo "parttime";}else{ echo "fulltime";}  ?></label>
									</td>
									<td>

										<label><?php echo $list['worked_on']; ?></label>
									</td>
								
									<td>
										<label><?php echo $list['work_from'].'-'.$list['work_end'] ?></label>
									</td>
									<td>

										<label><?php echo $list['work_experience']; ?></label>
									</td>
								
									<td>
										<label><?php if($list['work_flag']=="1"){ echo "Private";}else{ echo "public";}  ?></label>
									</td>
									
								</tr>
							<?php endforeach; ?>
							
						</table>
						</td>
					</tr>
					<?php }?>
					<td colspan="2" align="center">
					<?php
					echo $this->Form->button('Update', array('type' => 'submit','class'=>'btn btn-default'));
					echo $this->Form->end(); 
					
					?>
					</td>
					</tr>
					</table>
                </div>
            </div>
    </div>
     </div>
              
  </div>
  </div>
	
  </div>
  </div>
  </div>
