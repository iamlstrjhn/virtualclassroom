

          <!--This is the main menu part-->

          <main class="nav-col-2 col s12 m12 l10 ">
            
              <div class="row">
                <div class="col l2 hide-on-med-and-down">
                  <!--LEAVE THIS PART///DONT PUT ANY DIVISIONS AND CLASSES IN THIS SECTION-->
                </div>
                <div class="col s12 l10">
                  <div class="container-fluid">

                    <h5>Schoolworks</h5>
                      
                      <a class="btn waves-effect cyan btn-add-schoolworks modal-trigger" href="#modal1">ADD NEW</a>
                       <div id="modal1" class="modal">
                        <div class="modal-content modal-add-works">
                          <h5>ADD NEW SCHOOL WORKS</h5>

                          <?php echo form_open_multipart('Teacherschoolworks/post_content'); ?>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="input-field">
                                          <input name="content" type="text" class="validate">
                                          <label>Input message</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="col s12">
                                    <div class="input-field">
                                      <select name="load">
                                        <option value="" disabled selected>List of subjects</option>
                                        <?php foreach ($loads as $load) { ?>
                                        <option value="<?php echo $load['FacultyLoadID'] ?>"><?php echo $load['SubjectDescription'] ?></option>
                                        <?php }?>
                                      </select>
                                      <label>Choose your subject</label>
                                    </div>
                                  </div>
                                </div>

                                <div class="file-field input-field">
                                    <div class="btn btn-username cyan ">
                                        <span>File</span>
                                        <input type="file" name="userfile" size="20">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                              <button class="waves-effect btn cyan btn-username right" type="submit" value="upload">SUBMIT </button>
                          </form>

                        </div>
                      </div> 

                      <div class="row">

                        <?php foreach ($upload_data as $item) { ?>

                        <div class="col s12 l6">
                          <div class="card-works">
                            <a class="black-text h6-for-schoolworks" href="<?php echo site_url('/uploads/') .$item['SchoolWorksFile']?>" target="_blank"><?php echo $item['SchoolWorksFile'] ?></a>
                             <a class="btn right btn-details pink lighten-1 dropdown-button" href="#" data-beloworigin="true" data-activates="dropdown1"><i class="material-icons material-details">more_horiz</i></a>
                               <ul id='dropdown1' class='dropdown-content'>
                                  <li><a href="#modalview" class="modal-trigger"><i class="material-icons">open_in_new</i>VIEW</a></li>
                                  <li><a href="#!"><i class="material-icons">edit</i>EDIT</a></li>
                                  <li><a href="#!" class="remove"><i class="material-icons">delete</i>REMOVE</a></li>
                                </ul>
                                <!-- this is for the modal part -->
                                   <div id="modalview" class="modal modal-iframe-content">
                                      <div class="modal-content modal-iframe">
                                          <iframe src = "<?php echo site_url('/ViewerJS/#../uploads/') .$item['SchoolWorksFile']?>" width='100%' height='500' allowfullscreen webkitallowfullscreen></iframe>
                                      </div>
                                  </div>
                                  <!-- end of modal part -->
                             <br>

                            <small><?php echo $item['SchoolWorksDate'] ?></small>
                            <p><?php echo $item['SchoolWorksContent'] ?></p>
                            <div class="divider"></div>
                            <p class="p-text-schoolworks"><?php echo $item['SubjectDescription'] ?></p>
                          </div>
                        </div>

                        <?php } ?>

                        
                      </div>
                      
                  </div>
                </div>
              </div>
                
          </main>
