
                 <h3>Video</h3>
                <hr class="hrstyle"/>
                 <div class="col-md-8 form-group">

                                  <div class="col-md-12 form-group" style="">
                                        <div class="col-md-4">
                                         <label >YouTube Links:</label> 
                                         </div>
                                          <div class="col-md-8">
                                          <input type="text" name="youtube_links" id="youtube_links" class="form-control"  placeholder="Paste the YouTube embed links saprated by comma" value="" />
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