
                 <h3>Rearch Paper</h3>
                <hr class="hrstyle"/>
                 <div class="col-md-8 form-group">

                                  <div class="col-md-12 form-group" style="">
                                        <div class="col-md-4">
                                         <label >Field:</label> 
                                         </div>
                                          <div class="col-md-8">
                                          <input type="text" name="field" id="field" class="form-control"  placeholder="Field in which Case was studied" value="" />
                                          </div>  
                                  </div>
                                 <div class="col-md-12 form-group" style="" id="read1">
                                        <div class="col-md-4">
                                         <label >Read At:</label> 
                                         </div>
                                          <div class="col-md-8">
                                         <input type="text" name="read_at[]" class="input-name form-control" placeholder="Conferences/Seminars where paper was read"  value="" style="margin-bottom: 3%;" /><input type="button" class="submit_btn" id="read_at"><span > </span></div>  
                                  </div>
                                   <div class="col-md-12 form-group" style="">
                                        <div class="col-md-4">
                                         <label >Publish in:</label> 
                                         </div>
                                          <div class="col-md-8">
                                          <input type="text" name="publish_in" id="publish_in" class="form-control"  placeholder="Let the word know where it was publish" value="" />
                                          </div>  
                                  </div>

                                  <div class="col-md-12 form-group">
                                          <div>
                                           <div class="col-md-4">
                                           <label>Batch</label>
                                          </div>
                                          <select id="publish_on_month" name="publish_on_month[]" class="input-email form-control" style="width:24%;margin-left: 2%;" value="<?php echo $list['publish_on_month']?>">
                                          <option>Month</option>
                                              <script>
                                              var myDate = new Date();
                                              var year = myDate.getFullYear();
                                              for(var i = 01; i < 13; i++){
                                              document.write('<option value="'+i+'" >'+i+'</option>');
                                              }
                                              </script>
                                          </select>
                                                                                
                                          <select id="publish_on_year" name="publish_on_year[]" class="input-email form-control" style="width:25%" value="<?php echo $list['publish_on_year']?>">
                                          <option>Year</option>
                                          <script>
                                           var myDate = new Date();
                                           var year = myDate.getFullYear();
                                           for(var i = 1975; i < year+10; i++){
                                           document.write('<option value="'+i+'">'+i+'</option>');
                                           }
                                           </script>
                                           </select>
                                            </div>
                                    </div>
                                  <div class="col-md-12 form-group" style="" id="team1">
                                        <div class="col-md-4">
                                         <label >Team members:</label> 
                                         </div>
                                          <div class="col-md-8">
                                          <input type="text" name="team_member[]" id="team_member" class="form-control"  placeholder="Conferences/Seminars where paper was read" value="" style="margin-bottom: 3%;" /><input type="button" class="submit_btn" id="team"><span > </span>
                                          </div>  
                                  </div>

                                   <div class="col-md-12 form-group" style="" id="under1">
                                        <div class="col-md-4">
                                         <label >Under the guidance of:</label> 
                                         </div>
                                          <div class="col-md-8">
                                          <input type="text" name="under_gidance[]" id="under_gidance" class="form-control"  placeholder="Make your Guide/Mentor famous" value="" style="margin-bottom: 3%;" /><input type="button" class="submit_btn" id="under"><span > </span>
                                          </div>  
                                  </div>

                                 <div class="col-md-12 form-group" style="">
                                   <div class="col-md-4">
                                         
                                             </div>
                                           
                                  </div>

                                <?php
                                 echo $this->Form->hidden('created_dt', ['value'=>time()]);
                                      ?>
                      </div>