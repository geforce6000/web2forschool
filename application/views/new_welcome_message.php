<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--
 * Created by PhpStorm.
 * User: geforce6000
 * Date: 2017/12/14 0014
 * Time: 上午 09:01
-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- 新 Bootstrap4 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <!-- popper.min.js 用于弹窗、提示、下拉菜单 -->
    <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
    <!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <!-- 自建测试用的Css文件，index.css，用于首页 -->
    <link rel="stylesheet" href="css\index.css">
  </head>
  <body>
    <div class="container-fluid wraper">
      <!-- 第1个row，左边8格显示logo图片，右边4格显示搜索框 -->
      <div class="row">
        <!-- lolo -->
        <div class="col-xl-8 col-sm-12 with-border">
          <img class="img-fluid" src="image\logo.png" alt="">
        </div>
        <!-- 搜索框 -->
        <div class="col-xl-4 col-sm-12 with-border search-box">
          <span>自建测试用的Css文件，index.css，用于首页</span>
        </div>
      </div>
      <!-- 第2个row，显示导航栏 -->
      <div class="row nav-bar">
        <div class="col-xl-12">
          <nav class="navbar navbar-expand-md bg-dark navbar-dark">
          <!-- 网站名牌，点击回到首页 -->
            <a class="navbar-brand" href="#">Navbar</a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- 导航主入口 -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <!-- 子入口 -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Dropdown link
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                  </div>
                </li>
                </ul>
              </div>
            </nav>
        </div>
      </div>
      <!-- 第3个row，显示轮播图 -->
      <div class="row">
        <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- 指示符 -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
          <!-- 轮播图片 -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <!-- 图片 -->
              <img class="img-fluid" src="image\1.png">
                <!-- 图片描述文字，可以是连接 -->
              <div class="carousel-caption">
                <h3>第1张图片描述标题</h3>
                <p>描述文字1!</p>
              </div>
            </div>
            <div class="carousel-item">
              <!-- 图片 -->
              <img class="img-fluid" src="image\2.png">
              <!-- 图片描述文字，可以是连接 -->
              <div class="carousel-caption">
                <h3>第2张图片描述标题</h3>
                <p>描述文字2!</p>
              </div>
            </div>
            <div class="carousel-item">
              <!-- 图片 -->
              <img class="img-fluid" src="image\3.png">
                <!-- 图片描述文字，可以是连接 -->
              <div class="carousel-caption">
                <h3>第3张图片描述标题</h3>
                <p>描述文字3!</p>
              </div>
            </div>
          </div>
          <!-- 左右切换按钮 -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
      <!-- 第4个row，显示主要新闻 -->
      <div class="row">
        <div class="col-xl-12">
          <div id="content">
            <?php echo $article->content; ?>
          </div>
        </div>
      </div>
    </div>
    <script>
      /*
        对content中的img元素添加img-fluid属性，使图片自动缩放
        对img元素的父元素p，添加text-center属性，使图片居中
        bootstrap4自带的mx-auto属性也可以使图片居中，但是在这里莫名地不生效
       */
      $("#content img").addClass("img-fluid").parent().addClass("text-center");
    </script>
  </body>
</html>