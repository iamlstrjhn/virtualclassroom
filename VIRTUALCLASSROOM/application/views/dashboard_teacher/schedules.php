

          <!--This is the main menu part-->

          <main class="nav-col-2 col s12 m12 l10 ">
            
              <div class="row">
                <div class="col l2 hide-on-med-and-down">
                  <!--LEAVE THIS PART///DONT PUT ANY DIVISIONS AND CLASSES IN THIS SECTION-->
                </div>
                <div class="col s12 l10">
                  <div class="container-fluid">

                    <h5>Announcements</h5>
                      
                       <a class="btn waves-effect cyan btn-add-schoolworks modal-trigger" href="#modal2">ADD NEW</a>

                         <div id="modal2" class="modal">
                            <div class="modal-content modal-add-schedules">
                                <h5>ADD A SCHEDULE</h5>

                                <?php echo form_open('Teacherschedules/add_announcement'); ?>
                                  <div class="row">
                                      <div class="col s12">
                                          <div class="input-field">
                                            <input type="text" class="validate" name="title">
                                            <label>Input Title</label>
                                          </div>
                                      </div>

                                      <div class="col s12">
                                          <div class="input-field">
                                            <input type="text" class="validate" name="content">
                                            <label>Input Content</label>
                                          </div>
                                      </div>

                                     <div class="col s12">
                                          <div class="input-field">
                                            <input type="text" class="datepicker" name="sched">
                                            <label>Enter the date</label>
                                          </div>
                                      </div>
                                    </div>

                                    <button class="waves-effect btn cyan btn-username right" type="submit" value="submit">SUBMIT </button>
                                </form>
                                
                            </div>
                            
                        </div>

                            <div class="row">

                              <?php foreach ($announcement as $announcements) { ?>
                                
                              
                              <div class="col s12 l6">
                                 <div class="card-schedule">
                                    <h6 class="h6-schedule"><?php echo $announcements['AnnouncementTitle'] ?></h6>
                                    <p><b class="sched-bold-text"><?php echo $announcements['Firstname']." ".$announcements['Lastname'] ?></b>&ensp;<i><?php echo $announcements['AnnouncementSched'] ?></i></p>
                                    <p><?php echo $announcements['AnnouncementContent'] ?></p>
                                  </div>
                              </div>
                              <?php } ?>

                            </div>
                      
                  </div>
                </div>
              </div>
                
          </main>

     