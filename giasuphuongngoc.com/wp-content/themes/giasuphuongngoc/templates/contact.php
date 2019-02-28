<?php
/*
 Template Name: Liên hệ
 */?>
<?php get_header(); ?>
  <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
<div class="title-wap">
  <div class="container">
    <h1 class="title"><?php the_title(); ?></h1>
  </div>
</div>
<div class="main-container container">
  <!-- /#page-header -->
  <div class="row">


    <section class="col-sm-12">

      <a id="main-content"></a>

      <div class="region region-content">
        <section id="block-block-16" class="block block-block clearfix">
          <?php the_content(); ?>
        </section> <!-- /.block -->

        <section id="block-system-main" class="block block-system clearfix">


          <div id="node-23" class="node node-webform clearfix" about="/lien-he" typeof="sioc:Item foaf:Document">


            <span property="dc:title" content="Liên hệ" class="rdf-meta element-hidden"></span><span property="sioc:num_replies" content="0" datatype="xsd:integer" class="rdf-meta element-hidden"></span>

            <div class="content">
              <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                <div class="field-items">
                  <div class="field-item even" property="content:encoded">
                    <p><span class="dia-chi">Hotline:  0905 44 00 93 - (0511) 3 823 978</span></p>
                    <p><span class="dia-chi">Địa chỉ liên hệ :</span></p>
                    <p>169 Lê Lợi, Q.Hải Châu. TP.Đà Nẵng</p>
                    <p><span>Website: giasuphuongngoc.com</span></p>
                    <p><span>FB: <a href="https://www.facebook.com/giasuphuongngoc/?ref=hl">www.facebook.com/giasuphuongngoc</a></span></p>
                  </div>
                </div>
              </div>
              <form class="webform-client-form webform-client-form-23" enctype="multipart/form-data" action="http://giasuphuongngoc.com/lien-he" method="post" id="webform-client-form-23" accept-charset="UTF-8">
                <div>
                  <div class="form-item webform-component webform-component-textfield webform-component--name">
                    <label for="edit-submitted-name">Họ và tên </label>
                    <input class="form-control form-text" type="text" id="edit-submitted-name" name="submitted[name]" value="" size="60" maxlength="128" />
                  </div>
                  <div class="form-item webform-component webform-component-email webform-component--email">
                    <label for="edit-submitted-email">Email </label>
                    <input class="email form-text form-email" type="email" id="edit-submitted-email" name="submitted[email]" size="60" />
                  </div>
                  <div class="form-item webform-component webform-component-textfield webform-component--phone">
                    <label for="edit-submitted-phone">Số điện thoại </label>
                    <input class="form-control form-text" type="text" id="edit-submitted-phone" name="submitted[phone]" value="" size="60" maxlength="128" />
                  </div>
                  <div class="form-item webform-component webform-component-textarea webform-component--message">
                    <label for="edit-submitted-message">Tin nhắn </label>
                    <div class="form-textarea-wrapper resizable"><textarea class="form-control form-textarea" id="edit-submitted-message" name="submitted[message]" cols="60" rows="5"></textarea></div>
                  </div>
                  <input type="hidden" name="details[sid]" />
                  <input type="hidden" name="details[page_num]" value="1" />
                  <input type="hidden" name="details[page_count]" value="1" />
                  <input type="hidden" name="details[finished]" value="0" />
                  <input type="hidden" name="form_build_id" value="form-i1b-Mr8At4vNdRXbhbYVKwxBA1EBNY-QJHF4VSKTAzo" />
                  <input type="hidden" name="form_id" value="webform_client_form_23" />
                  <button class="webform-submit button-primary btn btn-default form-submit" name="op" value="Gửi" type="submit">Gửi</button>
                </div>
              </form>
            </div>



          </div>

        </section> <!-- /.block -->
      </div>
    </section>


  </div>
</div>









<?php endwhile;  ?>

<!-- Container / End -->
<?php get_footer(); ?>
