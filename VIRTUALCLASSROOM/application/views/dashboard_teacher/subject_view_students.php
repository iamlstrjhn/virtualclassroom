  <!--This is the main menu part-->

          <main class="nav-col-2 col s12 m12 l10 ">
            
              <div class="row">
                <div class="col l2 hide-on-med-and-down">
                  <!--LEAVE THIS PART///DONT PUT ANY DIVISIONS AND CLASSES IN THIS SECTION-->
                </div>
                <div class="col s12 l10">
                  <div class="container-fluid">
                    <h5>Registered Students</h5>
                    <a href="<?php echo base_url('Teachersubjects') ?>" class="btn btn-username cyan btn-add-subject "><i class="material-icons">more</i></a>

                    <a href="#modal1" class="btn btn-username cyan btn-add-subject right modal-trigger"><i class="material-icons">person_add</i></a>

                    <!-- Modal for register student -->
                    <div id="modal1" class="modal">
                        <div class="modal-content modal-add-student">
                         <h5>Add a student</h5>
                            <form method=GET>
                             <div id="chips_ahoy" class="chips chips-autocomplete"></div>
                             </form>
                          <br>
                          <button class="waves-effect btn cyan btn-username right" type="submit" value="submit">SUBMIT </button>
                        </div>
                      </div>
                      <!-- End for add student -->

                    <table class="responsive-table hoverable striped table-faculty">
                          <thead class="light-blue lighten-3">
                            <tr>
                              <th>Names</th>
                              <th>Options</th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr>
                              <td>Lester John Pulanco</td>
                              <td><a class="btn cyan btn-username modal-trigger" href="#modalviewstudents"><i class="material-icons">visibility</i></a></td>

                                <div id="modalviewstudents" class="modal">
                                  <div class="modal-content">
                                    <h5>Lester John Pulanco</h5>
                                    <h6>Bachelor of Science in Information Technology</h6><br>
                                    <p><b>EMAIL:</b>&ensp;lesterjohnpulanco@gmail.com</p>
                                    <p><b>ADDRESS:</b>&ensp;597 Sitio Nibangon, Brgy. Mangan-Vaca Subic, Zambales</p>
                                    <p><b>CONTACT:</b>&ensp;09485612291</p>
                                    <p><b>STATUS:</b>&ensp;Currently Enrolled</p>

                                  </div>
                                </div>
                            </tr>

                          </tbody>
                        </table>
                      
                </div>
              </div>
                
          </main>

          <!-- <div class="search-wrapper">
                              <input type="text" id="autocomplete-input" class="autocomplete"><i class="material-icons search">search</i>
          </div> -->

     