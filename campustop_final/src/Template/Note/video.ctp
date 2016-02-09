
                 <h3>Video</h3>
                <hr class="hrstyle"/>
                 <div class="col-md-8 form-group">

                                  <div class="col-md-12 form-group" style="">
                                        <div class="col-md-4">
                                         <label >YouTube Links:<sup>*</sup></label> 
                                         </div>
                                          <div class="col-md-8">
                                              <input type="text" name="youtube_links" id="youtubelinks" class="form-control"  placeholder="Paste the YouTube embed links saprated by comma" value="" />
                                              <div style="display:none;" id="youtubelinksmessageblank"><i class="form-control-feedback fa fa-times" data-bv-icon-for="program_id" style="cursor: pointer;color: #a94442;" data-original-title="" title=""></i></div>
                                              <div style="display:none;color: 00a65a;" id="youtubelinksmessagevalid"><i class="form-control-feedback fa fa-check" data-bv-icon-for="degree_id" style="cursor: pointer; display: block;color: #00a65a;" data-original-title="" title=""></i></div>
                                          
                                          </div>  
                                  </div>
                                  <div class="col-md-12 form-group" style="">

                                              <div class="col-md-4"></div>
                                        <div class="col-md-8">
                                             Instruction:<br>
                                             <ol>
                                                    <li>Click the share link under the video.</li>
                                                    <li>Click the embed link.</li>
                                                    <li>Copy and paste part of the link as shown in the image.</li>
                                                    </ol>                                            </div>  
                                  </div>
                                   <div class="col-md-12 form-group" style="">
                                   <div class="col-md-4">
                                         
                                             </div>
                                             <div class="col-md-8">
                                  <img src="<?=SITEURL; ?>webroot/img/Desert.jpg" width="79%" height="37%">
                                  </div>
                                  </div>

                                  <div class="col-md-12 form-group">
                                  <div class="col-md-4">
                                    <label >Other Video Links</label> 
                                      </div>
                                    <div class="col-md-8">
                                     <input type="text" name="other_video_links" id="other_video_links" class="input-name form-control" placeholder="Paste Direct Video Links separated by comma" value="" />
                                    </div>
                                </div>

                                <?php
                                 echo $this->Form->hidden('created_dt', ['value'=>time()]);
                                      ?>
                      </div>