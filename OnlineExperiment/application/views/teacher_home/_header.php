<!DOCTYPE html>

<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title><?php echo $title; ?></title>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/bootstrap.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/bootstrap-select.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>css/question-content.css"/>

    <script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/messages_cn.js"></script>

    <script type="text/javascript" src="<?php echo base_url()?>js/bootstrap-select.js"></script>

	</head>
<body>
		
<div class="navbar navbar-inverse">
	<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><?php echo $this->session->userdata('e_name')?></a>
  </div>
  <div class="navbar-collapse collapse navbar-inverse-collapse">
    <ul class="nav navbar-nav">
      <li id="main_page_li"><a href="<?php echo site_url('teacher_home/index')?>">主页</a></li>
      <li id="student_li"><a href="<?php echo site_url('teacher_student/index')?>">学生</a></li>
      <!-- <li id="class_li"><a href="<?php echo site_url('teacher_class/index')?>">课程</a></li> -->
      <li id="performance_li"><a href="<?php echo site_url('teacher_performance/index')?>">学习情况</a></li>
      
    </ul>

    <ul class="nav navbar-nav navbar-right">
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $this->session->userdata('e_username')?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <!-- <li><a href="#">修改密码</a></li> -->
          <li><a href="<?php echo site_url('teacher_home/change_password') ?>">修改密码</a></li>
          <li><a href="<?php echo site_url('teacher_home/logout') ?>">退出</a></li>
        </ul>
      </li>

    </ul>
    </div>
  </div>
</div>