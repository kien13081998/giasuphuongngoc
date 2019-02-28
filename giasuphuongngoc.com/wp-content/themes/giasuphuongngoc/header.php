<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]> <html <?php language_attributes(); ?>> <![endif]-->

<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Description" content="<?php bloginfo('description'); ?>">
  <meta name="Keywords" content="<?php bloginfo('keywords'); ?>">
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
  <meta property="og:title" content="<?php bloginfo('name')?>">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:type" content="website">
  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/style.css">
  <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=latin-ext,cyrillic,cyrillic-ext,latin,greek-ext,greek,vietnamese" media="all" />
  <link type="text/css" rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" media="all" />
  <!-- HTML5 element support for IE6-8 -->
    <?php wp_head();?>
  </head>
  <?php $eto_options = get_option('theme_options'); ?>
<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-23 node-type-webform">
  <header id="navbar">
    <div class="container">
      <div class="navbar-header">
        <a class="logo navbar-btn pull-left" href="<?php echo get_home_url(); ?>" title="Home">
          <img src="<?php echo $eto_options['logo']?>" alt="Home" />
        </a>
      </div>
    </div>
  </header>
  <section id="menu-top">
    <div class="container">
      <div class="region region-main-menu">
        <section id="block-superfish-1" class="block block-superfish clearfix">
          <ul id="superfish-1" class="menu sf-menu sf-menu-top-menu sf-horizontal sf-style-none sf-total-items-8 sf-parent-items-4 sf-single-items-4">
            <li id="menu-370-1" class="first odd sf-item-1 sf-depth-1 sf-no-children"><a href="index.html" class="sf-depth-1">Trang Chủ</a></li>
            <li id="menu-585-1" class="middle even sf-item-2 sf-depth-1 sf-total-children-2 sf-parent-children-0 sf-single-children-2 menuparent"><a href="ve-chung-toi.html" class="sf-depth-1 menuparent">Về chúng tôi</a>
              <ul>
                <li id="menu-760-1" class="first odd sf-item-1 sf-depth-2 sf-no-children"><a href="ve-chung-toi.html" class="sf-depth-2">7 lý do chọn GS Phương Ngọc</a></li>
                <li id="menu-507-1" class="last even sf-item-2 sf-depth-2 sf-no-children"><a href="thu-ngo.html" class="sf-depth-2">Thư ngỏ</a></li>
              </ul>
            </li>
            <li id="menu-706-1" class="middle odd sf-item-3 sf-depth-1 sf-no-children"><a href="ket-qua-hoc-tap.html" class="sf-depth-1">Kết quả học tập</a></li>
            <li id="menu-715-1" class="middle even sf-item-4 sf-depth-1 sf-total-children-1 sf-parent-children-0 sf-single-children-1 menuparent"><a href="index.html" class="sf-depth-1 menuparent">Phụ huynh</a>
              <ul>
                <li id="menu-754-1" class="firstandlast odd sf-item-1 sf-depth-2 sf-no-children"><a href="cac-buoc-tim-gia-su-0.html" class="sf-depth-2">Các bước tìm gia sư</a></li>
              </ul>
            </li>
            <li id="menu-710-1" class="middle odd sf-item-5 sf-depth-1 sf-total-children-4 sf-parent-children-0 sf-single-children-4 menuparent"><a href="index.html" class="sf-depth-1 menuparent">Gia sư</a>
              <ul>
                <li id="menu-375-1" class="first odd sf-item-1 sf-depth-2 sf-no-children"><a href="giao-vien.html" class="sf-depth-2">Hình ảnh sinh viên/giáo viên</a></li>
                <li id="menu-717-1" class="middle even sf-item-2 sf-depth-2 sf-no-children"><a href="quy-trinh-nhan-lop.html" class="sf-depth-2">Quy trình nhận lớp</a></li>
                <li id="menu-712-1" class="middle odd sf-item-3 sf-depth-2 sf-no-children"><a href="quy-dinh-hoan-tra-phi.html" class="sf-depth-2">Quy định hoàn trả phí</a></li>
                <li id="menu-713-1" class="last even sf-item-4 sf-depth-2 sf-no-children"><a href="de-tro-thanh-gia-su-gioi.html" class="sf-depth-2">Để trở thành gia sư giỏi</a></li>
              </ul>
            </li>
            <li id="menu-761-1" class="middle even sf-item-6 sf-depth-1 sf-no-children"><a href="hoc-phi-0.html" class="sf-depth-1">Học phí</a></li>
            <li id="menu-738-1" class="middle odd sf-item-7 sf-depth-1 sf-total-children-2 sf-parent-children-0 sf-single-children-2 menuparent"><a href="index.html" class="sf-depth-1 menuparent">Giải đáp thắc mắc</a>
              <ul>
                <li id="menu-739-1" class="first odd sf-item-1 sf-depth-2 sf-no-children"><a href="duoi-day-la-nhung-cau-tra-loi-ve-quyen-loi-cua-phu-huynh-hoc-sinh.html" class="sf-depth-2">Phụ huynh</a></li>
                <li id="menu-740-1" class="last even sf-item-2 sf-depth-2 sf-no-children"><a href="duoi-day-la-nhung-cau-tra-loi-ve-quyen-loi-cua-gia-su.html" class="sf-depth-2">Gia sư</a></li>
              </ul>
            </li>
            <li id="menu-377-1" class="active-trail last even sf-item-8 sf-depth-1 sf-no-children"><a href="lien-he.html" class="sf-depth-1 active">Liên Hệ</a></li>
          </ul>
        </section> <!-- /.block -->
      </div>
    </div>
  </section>
