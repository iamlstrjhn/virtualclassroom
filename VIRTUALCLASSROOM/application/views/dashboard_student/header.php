<!DOCTYPE html>
  <html>
    <head>

      <title>Virtual Classroom</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="/assets/materialize/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="/assets/materialize/css/style.css">
      <link rel="stylesheet" type="text/css" href="/assets/materialize/css/animate.css">
      <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,300,400,600,700,900" rel="stylesheet">
    </head>

    <body>
      <header>
          <div class="navbar-fixed">
              <nav>
                <div class="nav-wrapper black-text">
                  <a href="#!" class="brand-logo"><img class="image-logo" src="/images/logocc.png"></a>
                  <ul class="right hide-on-med-and-down">
                    <li><a class="btn-username btn white-text cyan" href="<?php echo base_url('Studentprofile'); ?>">@<?php 
                       if ($this->session->has_userdata('flag')) {
                         echo $this->session->userdata['flag']['username'];
                       }else{
                         echo $this->session->userdata['session']['username'];
                       }

                       ?>
                     </a></li>
                    <li><a href="<?php echo base_url('Studentlogin/logout_acct'); ?>">Signout</a></li>
                  </ul>
                      <ul id="slide-out" class="side-nav">
                          <li>
                            <div class="user-view">
                              <div class="background">
                                <img src="images/office.jpg">
                              </div>
                              <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
                              <a href="#!name"><span class="white-text name">John Doe</span></a>
                              <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                          </div>
                        </li>
                        <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
                        <li><a href="#!">Second Link</a></li>
                        <li><div class="divider"></div></li>
                        <li><a class="subheader">Subheader</a></li>
                        <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
                    </ul>
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
              </nav>
          </div>
      </header>

      <div class="container-fluid">
        <div class="row">
          <div class="nav-col-1 col l2 hide-on-med-and-down">
               <div class="collection collection-sidebar">
                  <a href="#!" class="collection-item col-item waves-effect"><h6 class="h5-sidebar black-text">Hi, 

                    <?php 
                       if ($this->session->has_userdata('flag')) {
                         echo $this->session->userdata['flag']['Firstname']." ".$this->session->userdata['flag']['Lastname'];
                       }else{
                         echo $this->session->userdata['session']['Firstname'];
                       }

                       ?>

                       <i class="em em-blush"></i></h6></a>
                  <a href="<?php echo base_url('Studentdashboard'); ?>" class="collection-item col-item waves-effect"><i class="material-icons side-icons">home</i>Home</a>
                  <a href="<?php echo base_url('Schoolworks'); ?>" class="collection-item col-item waves-effect"><i class="material-icons side-icons">import_contacts</i>School Works<span class="new badge cyan darken-2">1</span></a>
                  <a href="<?php echo base_url('Subjects'); ?>" class="collection-item col-item waves-effect"><i class="material-icons side-icons">subject</i>Subjects</a>
                  <a href="<?php echo base_url('Schedules'); ?>" class="collection-item col-item waves-effect"><i class="material-icons side-icons">announcement</i>Announcements</a>
                  <a href="<?php echo base_url('Teachers'); ?>" class="collection-item col-item waves-effect"><i class="material-icons side-icons">person</i>Professors</a>
                  <a href="<?php echo base_url('Messages'); ?>" class="collection-item col-item waves-effect"><i class="material-icons side-icons">inbox</i>Messages <small>(PENDING)</small></a>
                  <a href="<?php echo base_url('Videochat'); ?>" class="collection-item col-item waves-effect"><i class="material-icons side-icons">switch_video</i>Live Chat <small>(PENDING)</small></a>
              </div>

          </div>
