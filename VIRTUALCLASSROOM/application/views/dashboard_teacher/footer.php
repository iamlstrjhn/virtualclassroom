
        </div>
      </div>


      </div>
    </div>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <script type="text/javascript" src="/assets/materialize/js/materialize.min.js"></script>
      <!-- This is the autocomplete -->
      <script type="text/javascript" src="/assets/materialize/js/jquery.materialize-autocomplete.js"></script>
      <!-- this is the livechat javascript -->
      <script type="text/javascript" src="/assets/materialize/js/main.js"></script>

      <script type="text/javascript">
         $(".button-collapse").sideNav();

          $(document).ready(function(){
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
          });



          $(document).ready(function() {
          $('select').material_select();
          });
              
         $('.datepicker').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15, // Creates a dropdown of 15 years to control year,
          today: 'Today',
          clear: 'Clear',
          close: 'Ok',
          closeOnSelect: false // Close upon selecting a date,
        });

         $('.timepicker').pickatime({
          default: 'now', // Set default time: 'now', '1:30AM', '16:30'
          fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
          twelvehour: false, // Use AM/PM or 24-hour format
          donetext: 'OK', // text for done-button
          cleartext: 'Clear', // text for clear-button
          canceltext: 'Cancel', // Text for cancel-button
          autoclose: false, // automatic close timepicker
          ampmclickable: true, // make AM PM clickable
          aftershow: function(){} //Function for after opening timepicker
        });

         /*This is for the dropdown*/
          $('.dropdown-button').dropdown({
              inDuration: 300,
              outDuration: 225,
              constrainWidth: false, // Does not change width of dropdown to that of the activator
              hover: true, // Activate on hover
              gutter: 0, // Spacing from edge
              belowOrigin: false, // Displays dropdown below the button
              alignment: 'left', // Displays dropdown with edge aligned to the left of button
              stopPropagation: false // Stops event propagation
            }
          );

      /*jquery for search and add students*/
       $(function () {

          var multiple = $('#multipleInput').materialize_autocomplete({
              multiple: {
                  enable: true
              },
              appender: {
                  el: '.ac-users'
              },
              dropdown: {
                  el: '#multipleDropdown'
              }
          });

          var resultCache = {
           

              'L': [
                  {
                      id: '1',
                      text: 'Lester John Pulanco'
                  }
              ],

              'V': [
                  {
                      id: '2',
                      text: 'Vigil Muriel Boniol'
                  }
              ],
              'F': [
                  {
                      id: '3',
                      text: 'Francis Ape'
                  }
              ],
              'K': [
                  {
                      id: '4',
                      text: 'Ken Evangelista'
                  }
              ]
          };

          multiple.resultCache = resultCache;
      });
        
      </script>
    </body>
  </html>



 		