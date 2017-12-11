
          <!--This is the main menu part-->

          <main class="nav-col-2 col s12 m12 l10 ">
            
              <div class="row">
                <div class="col l2 hide-on-med-and-down">
                  <!--LEAVE THIS PART///DONT PUT ANY DIVISIONS AND CLASSES IN THIS SECTION-->
                </div>
                <div class="col s12 l10">
                  <div class="container-fluid">

                    <h5>Registered subjects</h5>

                      <a href="#modalsubject" class="btn btn-username cyan btn-add-subject modal-trigger">ADD SUBJECT</a>

                          <div id="modalsubject" class="modal">
                            <div class="modal-content modal-add-works">
                              <h5>ADD NEW SUBJECT</h5>

                              <?php echo form_open('Teachersubjects/add_load'); ?>

                                    <div class="row">
                                        <div class="col s12">
                                          <div class="formrow">
                                              <label for="subject">Subject:</label>
                                              <select id="subject" name="subject">
                                                <?php foreach ($subjects as $subject): ?>
                                                  <option value="<?php echo $subject['SubjectsID'] ?>"><?php echo $subject['SubjectDescription'] ?></option>
                                                <?php endforeach ?>
                                              </select>
                                          </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                      <div class="col s4">
                                          <div class="input-field col s12">
                                            <input placeholder="Eg.('MTH')" id="first_name" type="text"  name="daycode" class="validate">
                                            <label for="start_time">Please type the day</label>
                                          </div>
                                      </div>

                                      <div class="col s4">
                                          <div class="input-field col s12">
                                            <input placeholder="Enter the time start" id="first_name" type="text" name="timestart" class="timepicker">
                                            <label for="start_time">Time start</label>
                                          </div>
                                      </div>

                                      <div class="col s4">
                                          <div class="input-field col s12">
                                            <input placeholder="Enter the time end" id="first_name" type="text" name="timeend" class="timepicker">
                                            <label for="end_time">Time end</label>
                                          </div>
                                      </div>
                                    </div>
                                  <button class="waves-effect btn cyan btn-username right" type="submit" value="submit">SUBMIT </button>
                              </form>

                            </div>
                          </div> 
                    
                      <table class="responsive-table hoverable striped table-for-students">
                        <thead class="blue lighten-3">
                          <tr>
                            <th>Subject Code</th>
                            <th>Subject Description</th>
                            <th>Schedule</th>
                            <th>View</th>
                          </tr>
                        </thead>

                        <tbody>
                   <?php foreach ($loads as $load): ?>
                     <tr>
                       <td><?php echo $load['Subjectcode']?></td>
                       <td><?php echo $load['SubjectDescription'] ?></td>
                       <td><?php echo$load['dayCode']?>&nbsp;<?php echo$load['timeStart']?>-<?php echo$load['timeEnd']?></td>
                       <td><a href="<?php echo base_url('Teachersubjects/view_students') ?>" class="btn btn-username cyan darken-1"><i class="material-icons">people_outline</i></a></td>
                     </tr>
                   <?php endforeach ?>

                        </tbody>
                      </table>
                    
                  </div>
                </div>
              </div>
                
          </main>