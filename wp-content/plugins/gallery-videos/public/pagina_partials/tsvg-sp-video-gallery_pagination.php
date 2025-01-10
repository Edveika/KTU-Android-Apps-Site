<style type="text/css">
:after, :before,  * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>   .tsvg-pagination-pages-wrapper .tsvg-pagination-disabled-item{
    display: none!important;
}
.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='pagination']  figure ul li,.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='load-more']  figure ul li,.tsvg-pagination-pages-wrapper[data-pagination='all']  ,.tsvg-pagination-disabled-item{
    display: none!important;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-pages-wrapper[data-pagination='pagination']{
    display: flex!important;
    overflow-y: hidden;
    overflow-x: auto;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-page-item a:focus{
  outline:none!important;
  box-shadow:unset!important;
}
<?php if($tsvg_theme_name=='Grid Video Gallery'){ ?>
    .tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
        display: flex!important;
    }
<?php } ?>
<?php if($tsvg_theme_name=='LightBox Video Gallery'){?>
    .tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
        display: flex!important;
    }
<?php }?>
<?php if($tsvg_theme_name=='Thumbnails Video'){?>
    .tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
        display: flex!important;
    }
<?php }?>
<?php if($tsvg_theme_name=='Content Popup'){?>
    .tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
        display: inline-block!important;
    }
<?php }?>
<?php if($tsvg_theme_name=='Elastic Gallery'){?>
    .tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
        display: inline-block!important;
    }
<?php }?>
<?php if($tsvg_theme_name=='Fancy Gallery'){?>
    .tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
        display: inline-block!important;
    }
<?php }?>
<?php if($tsvg_theme_name=='Parallax Engine'){?>
    .tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
        display: inline-block!important;
    }
<?php }?>
<?php if($tsvg_theme_name=='Classic Gallery'){?>
    .tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
        display: inline-block!important;
    }
<?php }?>
<?php if($tsvg_theme_name=='Space Gallery'){?>
    .tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='pagination']  figure ul .tsvg-layout-item-show,.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-pagination='load-more']  figure ul .tsvg-layout-item-show{
        display: block!important;
    }
<?php }?>
:root{
    --tsvg_p_lm_bc_<?php echo esc_attr($tsvg_shortcode_id);?>:<?php echo esc_html( htmlspecialchars($tsvg_style_options->TotalSoft_GV_2_24));?>;
    --tsvg_p_lm_c_<?php echo esc_attr($tsvg_shortcode_id);?>:<?php echo esc_html( htmlspecialchars($tsvg_style_options->TotalSoft_GV_2_25));?>;
    --tsvg_p_lm_fs_<?php echo esc_attr($tsvg_shortcode_id);?>:<?php echo filter_var(esc_html($tsvg_style_options->TotalSoft_GV_2_23), FILTER_VALIDATE_INT);?>px;
    --tsvg_p_lm_cbc_<?php echo esc_attr($tsvg_shortcode_id);?>:<?php echo esc_html( htmlspecialchars($tsvg_style_options->TotalSoft_GV_2_26));?>;
    --tsvg_p_lm_cc_<?php echo esc_attr($tsvg_shortcode_id);?>:<?php echo esc_html( htmlspecialchars($tsvg_style_options->TotalSoft_GV_2_27));?>;
    --tsvg_p_lm_hbc_<?php echo esc_attr($tsvg_shortcode_id);?>:<?php echo esc_html( htmlspecialchars($tsvg_style_options->TotalSoft_GV_2_28));?>;
    --tsvg_p_lm_hc_<?php echo esc_attr($tsvg_shortcode_id);?>:<?php echo esc_html( htmlspecialchars($tsvg_style_options->TotalSoft_GV_2_29));?>;
    --tsvg_p_lm__bdc_<?php echo esc_attr($tsvg_shortcode_id);?>:<?php echo esc_html( htmlspecialchars($tsvg_style_options->TotalSoft_GV_2_30));?>;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='load-more'][data-item-type='After']  .btn-lg{
    display: flex!important;
    flex-direction: row;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='load-more'][data-item-type='Before']  .btn-lg{
    display: flex!important;
    flex-direction: row-reverse;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='load-more']  .btn-lg span{
    margin: 0 5px;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='load-more']  .btn-lg  .ts-vgallery,#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='load-more']  ul .btn-lg .ts-vgallery-emoji{
    display:block;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-pages-wrapper{
    text-align: center;
    display: flex;
    justify-content: center;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages{
    font-family: var(--tsvg_s_ff_<?php echo esc_attr($tsvg_shortcode_id);?>)!important;
    display: inline-flex;
    align-items: center;
    position: relative;
    padding-left: 0;
    border-radius: 4px;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-pages>li {
    display: inline;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-pages>li>a,#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-pages>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    text-decoration: none;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?> figure .tsvg-load{
    -webkit-transition: height 3s ease-out;
    -moz-transition: height 3s ease-out;
    -o-transition: height 3s ease-out;
    -ms-transition: height 3s ease-out;
    transition: height 3s ease-out;
}
.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-pages-wrapper[data-pagination='load-more'] .btn-lg span,.tsvg-pagination-pages-wrapper[data-pagination='load-more'] .btn-lg i{
    display:none;
}
.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'] i{
    display:none;
}
.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'] .ts-vgallery,.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'] .ts-vgallery-emoji{
    display:inline-block;;
}
.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-icon-show='true'] span{
    display:none;
}
.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='load-more'][data-load-icon='text'] .btn-lg span{
    display:inline-block;
    vertical-align: sub;
}
.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='load-more'][data-load-icon='icon'] .btn-lg i{
    display:inline-block;
}
.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-pages-wrapper[data-pagination='load-more'][data-load-icon='text-icon'] .btn-lg span,.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='load-more'][data-load-icon='text-icon'] .btn-lg i{
    display:inline-block;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> a.tsvg-pagination-page-link{
    display:inline-block!important;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-pages-wrapper li {
    border: none !important;
    list-style: none !important;
    display: inline-block !important;
    padding: 0 !important
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination']  li {
    display: inline;
    text-align: center;
    margin-left: 0 !important;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination']  li a {
    float: left;
    display: block;
    font-size:var(--tsvg_p_lm_fs_<?php echo esc_attr($tsvg_shortcode_id);?>);
    text-decoration: none;
    padding: 5px 12px;
    color: var(--tsvg_p_lm_c_<?php echo esc_attr($tsvg_shortcode_id);?>);
    margin-left: -1px;
    border: 1px solid transparent;
    line-height: 1.5;
    margin: 0;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination']  li:active {
    outline: none;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style01']  li:first-child a {
    -moz-border-radius: 6px 0 0 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px 0 0 6px;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style01']  li:last-child a{
    -moz-border-radius: 0 6px 6px 0;
    -webkit-border-radius: 0;
    border-radius: 0 6px 6px 0;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style01'] li a {
    border-color: var(--tsvg_p_lm__bdc_<?php echo esc_attr($tsvg_shortcode_id);?>);;
    background: var(--tsvg_p_lm_bc_<?php echo esc_attr($tsvg_shortcode_id);?>);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style01']  li:hover:not(.tsvg-pagination-page-active)  a {
    background-color: var(--tsvg_p_lm_hbc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    color: var(--tsvg_p_lm_hc_<?php echo esc_attr($tsvg_shortcode_id);?>);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style01']  li a:active  ,   #tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style01']  li.tsvg-pagination-page-active  a {
    background-color: var(--tsvg_p_lm_cbc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    color: var(--tsvg_p_lm_cc_<?php echo esc_attr($tsvg_shortcode_id);?>);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style02']  li:first-child a {
    -moz-border-radius: 50px 0 0 50px;
    -webkit-border-radius: 50px;
    border-radius: 50px 0 0 50px;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style02']  li:last-child a {
    -moz-border-radius: 0 50px 50px 0;
    -webkit-border-radius: 0;
    border-radius: 0 50px 50px 0;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style02']  li a {
    border-color: var(--tsvg_p_lm__bdc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    background: var(--tsvg_p_lm_bc_<?php echo esc_attr($tsvg_shortcode_id);?>);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style02'] li:hover:not(.tsvg-pagination-page-active) a {
    background-color: var(--tsvg_p_lm_hbc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    color: var(--tsvg_p_lm_hc_<?php echo esc_attr($tsvg_shortcode_id);?>);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style02'] li.tsvg-pagination-page-active a, #tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style02'] li a:active {
    background-color: var(--tsvg_p_lm_cbc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    color: var(--tsvg_p_lm_cc_<?php echo esc_attr($tsvg_shortcode_id);?>);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style03'] li a {
    margin-left: 3px;
    padding: 0;
    width: calc(15px + var(--tsvg_p_lm_fs_<?php echo esc_attr($tsvg_shortcode_id);?>));
    -moz-border-radius: 100%;
    -webkit-border-radius: 100%;
    border-radius: 100%;
    background: var(--tsvg_p_lm_bc_<?php echo esc_attr($tsvg_shortcode_id);?>);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style03'] li:hover:not(.tsvg-pagination-page-active) a {
    background-color: var(--tsvg_p_lm_hbc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    color: var(--tsvg_p_lm_hc_<?php echo esc_attr($tsvg_shortcode_id);?>);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style03'] li.tsvg-pagination-page-active a, #tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style03'] li a:active {
    background-color: var(--tsvg_p_lm_cbc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    color: var(--tsvg_p_lm_cc_<?php echo esc_attr($tsvg_shortcode_id);?>);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style04'] li a {
    margin: 0 5px;
    padding: 0;
    width: calc(15px + var(--tsvg_p_lm_fs_<?php echo esc_attr($tsvg_shortcode_id);?>));
    -moz-border-radius: 100%;
    -webkit-border-radius: 100%;
    border-radius: 100%;
    background-color: var(--tsvg_p_lm_bc_<?php echo esc_attr($tsvg_shortcode_id);?>);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style04'] li:first-child a  {
    -moz-border-radius: 50px 0 0 50px;
    -webkit-border-radius: 50px;
    border-radius: 50px 0 0 50px;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style04'] li:last-child a {
    -moz-border-radius: 0 50px 50px 0;
    -webkit-border-radius: 0;
    border-radius: 0 50px 50px 0;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style04'] li:hover:not(.tsvg-pagination-page-active) a {
    background-color: var(--tsvg_p_lm_hbc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    color: var(--tsvg_p_lm_hc_<?php echo esc_attr($tsvg_shortcode_id);?>);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style04'] li.tsvg-pagination-page-active a,  #tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style04'] li a:active {
    background-color: var(--tsvg_p_lm_cbc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    color: var(--tsvg_p_lm_cc_<?php echo esc_attr($tsvg_shortcode_id);?>);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style05'] {
    position: relative;
    z-index: 0;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style05'] ul:after {
    content: '';
    position: absolute;
    width: 100%;
    height: calc(100% - 6px);
    left: 0;
    bottom: 0;
    z-index: -1;
    background: -moz-linear-gradient(left, rgba(0, 0, 0, 0) 0%, var(--tsvg_p_lm_bc_<?php echo esc_attr($tsvg_shortcode_id);?>) 50%, rgba(0, 0, 0, 0) 100%);
    background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0) 0%, var(--tsvg_p_lm_bc_<?php echo esc_attr($tsvg_shortcode_id);?>) 50%, rgba(0, 0, 0, 0) 100%);
    background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, var(--tsvg_p_lm_bc_<?php echo esc_attr($tsvg_shortcode_id);?>) 50%, rgba(0, 0, 0, 0) 100%);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style05'] li{
    margin:0;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style05'] li a {
    padding: 12px 5px 5px;
    margin: 0 10px;
    position: relative;
    color: var(--tsvg_p_lm_c_<?php echo esc_attr($tsvg_shortcode_id);?>);
    z-index: 0;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style05'] li:not(.tsvg-pagination-page-active):hover a {
    color: var(--tsvg_p_lm_hc_<?php echo esc_attr($tsvg_shortcode_id);?>)!important;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style05'] li:not(.tsvg-pagination-page-active):hover a:after {
    content: '';
    position: absolute;
    width: calc(100% + 10px);
    height: calc(100% - 17px);
    background: var(--tsvg_p_lm_hbc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    -moz-border-radius: 100%;
    -webkit-border-radius: 100%;
    border-radius: 100%;
    z-index: -1;
    left: -5px;
    bottom: 5px;
    margin: auto;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style05'] li:first-child:hover a:after, #tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style05'] li:last-child:hover a:after {
    display: none;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style05'] li.tsvg-pagination-page-active a {
    background-color: var(--tsvg_p_lm_cbc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    color: var(--tsvg_p_lm_cc_<?php echo esc_attr($tsvg_shortcode_id);?>);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style05'] li.tsvg-pagination-page-active a:before {
    content: '';
    position: absolute;
    top: -12px;
    left: -10px;
    width: calc(100% + 20px);
    border: 10px solid transparent;
    border-bottom: 7px solid var(--tsvg_p_lm_cbc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    z-index: -1;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style05'] li.tsvg-pagination-page-active:hover a:after {
    display: none;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style06']  {
    -moz-border-radius: 50px;
    -webkit-border-radius: 50px;
    border-radius: 50px;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style06'] li a {
    border-color: var(--tsvg_p_lm__bdc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    background: var(--tsvg_p_lm_bc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    padding: 10px 15px;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style06'] li:hover:not(.tsvg-pagination-page-active) a:after {
    color: var(--tsvg_p_lm_hc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    background: var(--tsvg_p_lm_hbc_<?php echo esc_attr($tsvg_shortcode_id);?>);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style06'] li:first-child a {
    -moz-border-radius: 50px 0 0 50px;
    -webkit-border-radius: 50px;
    border-radius: 50px 0 0 50px;
    padding: 10px 20px;
    position: relative;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style06'] li:first-child a:after,  #tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style06'] li:first-child:hover a:after {
    content: '';
    position: absolute;
    width: 10px;
    height: 100%;
    top: 0;
    right: 0;
    background: -moz-linear-gradient(left, rgba(0, 0, 0, 0) 0%, var(--tsvg_p_lm_c_<?php echo esc_attr($tsvg_shortcode_id);?>) 100%);
    background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0) 0%, var(--tsvg_p_lm_c_<?php echo esc_attr($tsvg_shortcode_id);?>) 100%);
    background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, var(--tsvg_p_lm_c_<?php echo esc_attr($tsvg_shortcode_id);?>) 100%);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style06'] li:last-child a{
    -moz-border-radius: 0 50px 50px 0;
    -webkit-border-radius: 0;
    border-radius: 0 50px 50px 0;
    width: 50px;
    position: relative;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style06'] li:last-child a:after,  #tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style06'] li:last-child:hover a:after {
    content: '';
    position: absolute;
    width: 10px;
    height: 100%;
    top: 0;
    left: 0;
    background: -moz-linear-gradient(left, var(--tsvg_p_lm_c_<?php echo esc_attr($tsvg_shortcode_id);?>) 0%, rgba(0, 0, 0, 0) 100%);
    background: -webkit-linear-gradient(left, var(--tsvg_p_lm_c_<?php echo esc_attr($tsvg_shortcode_id);?>) 0%, rgba(0, 0, 0, 0) 100%);
    background: linear-gradient(to right, var(--tsvg_p_lm_c_<?php echo esc_attr($tsvg_shortcode_id);?>) 0%, rgba(0, 0, 0, 0) 100%);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='pagination'][data-pagina-style='style06'] li.tsvg-pagination-page-active a {
    background-color: var(--tsvg_p_lm_cbc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    color: var(--tsvg_p_lm_cc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    -moz-box-shadow: 0 0 3px var(--tsvg_p_lm_cc_<?php echo esc_attr($tsvg_shortcode_id);?>) inset;
    -webkit-box-shadow: 0 0 3px var(--tsvg_p_lm_cc_<?php echo esc_attr($tsvg_shortcode_id);?>) inset;
    box-shadow: 0 0 3px var(--tsvg_p_lm_cc_<?php echo esc_attr($tsvg_shortcode_id);?>) inset;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='load-more'] a{
    background-color: var(--tsvg_p_lm_bc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    color: var(--tsvg_p_lm_c_<?php echo esc_attr($tsvg_shortcode_id);?>);
    font-size:  var(--tsvg_p_lm_fs_<?php echo esc_attr($tsvg_shortcode_id);?>);
    border: 1px solid var(--tsvg_p_lm__bdc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    cursor: pointer;
    display: inline-block;
    padding: 0.3em 1em !important;
    line-height: 1 !important;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='load-more'] i {
    color: var(--tsvg_p_lm_c_<?php echo esc_attr($tsvg_shortcode_id);?>);
    display:block;
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper[data-pagination='load-more'] a:hover {
    background-color: var(--tsvg_p_lm_hbc_<?php echo esc_attr($tsvg_shortcode_id);?>);
    color: var(--tsvg_p_lm_hc_<?php echo esc_attr($tsvg_shortcode_id);?>);
}
#tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> main.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>[data-p-lm=''] >figure> ul>li{
    opacity: 0;
    transform: scaleY(0);
    animation: animate-height 0.7s ease-in-out  0s forwards;
    -webkit-animation: animate-height 0.7s ease-in-out  0s forwards;
    -moz-animation: animate-height 0.7s ease-in-out  0s forwards;
    transform-origin: top;
    animation-delay: 0s!important;
}
</style>
<?php
echo sprintf("
    <nav class='tsvg-pagination-pages-wrapper' data-short-id='%s' data-short-theme='%s'  data-pagination='%s' data-load-vw='%s' data-icon-show='%s' data-load-icon='%s' data-pagina-style='%s' data-item-type='%s' >
        <ul class='tsvg-pagination-pages' data-ef='%s' data-vw='%s' data-next-icon='%s' data-prev-icon='%s' data-load-icon='%s' data-load-text='%s'>
        </ul>
    </nav>",
esc_attr($tsvg_shortcode_id),
esc_attr($tsvg_theme_name),
esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_01 ),
esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_08 ),
esc_attr( $tsvg_design_options['TotalSoft_VGallery_Sty_16'] ),
esc_attr( $tsvg_design_options['TotalSoft_VGallery_Sty_17'] ),
esc_attr( $tsvg_style_options->TotalSoft_GV_2_22 ),
esc_attr( $tsvg_style_options->TotalSoft_GV_2_33 ),
esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_05 ),
esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_06 ),
esc_attr( $tsvg_style_options->TotalSoft_GV_2_39),
esc_attr( $tsvg_style_options->TotalSoft_GV_2_38),
esc_attr( $tsvg_style_options->TotalSoft_GV_2_32),
esc_attr( $tsvg_setting_options->TotalSoft_VGallery_Set_03)
); 
?>
<script>
    var tsvgPaginationLoad<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = 'false';
    function tsvgPaginationCreate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>,tsvgFrom<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, tsvgTo<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>) {
        var tsvgShowData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.slice(tsvgFrom<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, tsvgTo<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>);
		var short_id =jQuery(tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>).closest('section').find('.tsvg-pagination-pages-wrapper').attr('data-short-id');
		var tsvgThemeName<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> =jQuery(tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>).closest('section').find('.tsvg-pagination-pages-wrapper').attr('data-short-theme');
            jQuery.each(tsvgShowData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, function (index, value) {
                let  tsvg_elem_delay = 0.3 * index;	
                if(tsvgPaginationLoad<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> == 'true'){
                    tsvg_elem_delay = 0.9 * (index+1);	
                }
                jQuery(this).css({'-moz-animation-delay': tsvg_elem_delay+'s','-webkit-animation-delay': tsvg_elem_delay+'s','animation-delay': tsvg_elem_delay+'s'});
                jQuery(this).addClass('tsvg-layout-item-show');
            })
            if(tsvgThemeName<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>=='Grid Video Gallery') {
                var interval_pg_fn_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>= setInterval(upGrid_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, 100);
                function upGrid_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() {
                if (typeof(window.Modernizr) != "undefined" && window.Modernizr != null && 
                    typeof(window.imagesLoaded) != "undefined" && window.imagesLoaded != null && 
                    typeof(window.CBPGridGallery) != "undefined" && window.CBPGridGallery != null){
                    new  CBPGridGallery(document.getElementById(`tsvg-section-${short_id}`));
                    clearInterval(interval_pg_fn_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>);
                    }
                }
            }
            if( jQuery('.tsvg-main-content-'+short_id).attr("data-pagination")=='load-more' && !jQuery('.tsvg-main-content-'+short_id+' figure ul li').not('.tsvg-layout-item-show').length){ jQuery('.tsvg-section-'+short_id+'  .tsvg-pagination-pages li,.tsvg-section-'+short_id+' .tsvg-pagination-pages-wrapper .btn').remove();}
    }
    function tsvgPaginationGenerate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(id = "<?php echo esc_attr( $tsvg_shortcode_id ); ?>") {
        if (!id) {
			return; 
		}
        var tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?> figure>ul>li');
        var itemsLength = tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>.length;
        var numberItemsPerPage =  Math.ceil(jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>').attr('data-item-number'));
        var paginationItemsLenth;
        var pagina_length;
        var currentPaginationPosition;
        var showFrom;
        var showTo;
        var pageNumber = 1;
        var next_text = '';
		var prev_text = '';
		var next_icon = jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages').attr('data-next-icon');
		var prev_icon = jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages').attr('data-prev-icon'); 
		var load_icon = jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages').attr('data-load-icon');  
		var load_text = jQuery('.tsvg-section-<?php echo esc_attr( $tsvg_shortcode_id ); ?>  .tsvg-pagination-pages').attr('data-load-text');
        var max_heigth =jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>').height(); 
        var currentPosition = 1;
        var page_vw = jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages').attr('data-vw');
        jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?> figure ul').removeClass('tsvg-load');
        jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?> figure ul li').removeClass('tsvg-layout-item-show');
        jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages li,.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper .btn').remove();
        if( jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>').attr("data-pagination")=='pagination'){
        paginationItemsLenth = Math.ceil(itemsLength / numberItemsPerPage) ;
        pagina_length=paginationItemsLenth=paginationItemsLenth<1?1:paginationItemsLenth;
        jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages').append('<li class="tsvg-pagination-page-item tsvg-pagination-page-item-prev" data-item-number="prev"><a href="javascript:void(0)" class="tsvg-pagination-page-link"  ><span >'+prev_text+'</span> <i class="'+prev_icon+'"></i></a></li>')
        if(page_vw=='vw-2'&& paginationItemsLenth>7)pagina_length=7;
        if(page_vw=='vw-3'&& paginationItemsLenth>4)pagina_length=4;
        if(page_vw=='vw-5')pagina_length=1;
        if(page_vw=='vw-4')pagina_length=1;
            for (var i = 0; i < pagina_length; i++) {
                var itemNumber = i + 1;
                jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-pages').append('<li data-item-number="' + itemNumber + '" class="tsvg-pagination-page-item tsvg-pagination-page-number "><a class="tsvg-pagination-page-link" href="javascript:void(0)">' + itemNumber + '</a></li>')
            }
        if(page_vw=='vw-4'){ jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-number').addClass('tsvg-pagination-disabled-item');}
        if(page_vw=='vw-2'&& paginationItemsLenth>7){
            if(paginationItemsLenth > (pagina_length+1))  jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages').append('<li data-item-number=" " class="tsvg-pagination-page-item page-null  "><a class="tsvg-pagination-page-link" href="javascript:void(0)">...</a></li>')
            jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages').append('<li data-item-number="' + paginationItemsLenth + '" class="tsvg-pagination-page-item "><a class="tsvg-pagination-page-link" href="javascript:void(0)">' + paginationItemsLenth + '</a></li>')
        }
        if(page_vw=='vw-3'&& paginationItemsLenth>4){
            if(paginationItemsLenth > (pagina_length+1))jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages').append('<li data-item-number=" " class="tsvg-pagination-page-item page-null  "><a class="tsvg-pagination-page-link" href="javascript:void(0)">...</a></li>')
            jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-pages').append('<li data-item-number="' + paginationItemsLenth + '" class="tsvg-pagination-page-item "><a class="tsvg-pagination-page-link" href="javascript:void(0)">' + paginationItemsLenth + '</a></li>')
        }
        jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages').append('<li class="tsvg-pagination-page-item tsvg-pagination-page-item-next" data-item-number="next"><a href="javascript:void(0)" class="tsvg-pagination-page-link"  ><span >'+next_text+'</span><i class="'+next_icon+'"></i></a></li>')
        jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  ul.tsvg-pagination-pages li').not('.page-null').click(function (e) {
          if( jQuery(this).hasClass('tsvg-pagination-page-active')){
              return false;
          }
          max_heigth =jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>').height();
        if(jQuery(this).parent().find('.tsvg-pagination-page-active').length){
            const tsvgMain = jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>')[0]
                const tsvgHeaderOffset = 200;
                const tsvgMainPosition = tsvgMain.getBoundingClientRect().top;
                const tsvgOffsetPosition = tsvgMainPosition + window.pageYOffset - tsvgHeaderOffset;
                window.scrollTo({
                  top: tsvgOffsetPosition,
                  behavior: "smooth",
                });
        }
        let effect_open_type =  jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>').attr('data-item-open');
        if(effect_open_type!='effect-1'){
          jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>').css({'min-height': max_heigth+'px','transition':'unset'});
        }
        jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?> figure ul li').removeClass('tsvg-layout-item-show');
        jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages li').removeClass('tsvg-pagination-page-active')
        jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-item[item-number="prev"]').removeClass('tsvg-pagination-disabled-item')
        jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-item[item-number="next"]').removeClass('tsvg-pagination-disabled-item')
        jQuery(this).addClass('tsvg-pagination-page-active');
        pageNumber = jQuery(this).attr('data-item-number');
        if (pageNumber == '1') {
            jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="prev"]').addClass('tsvg-pagination-disabled-item');
        } else{
            jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="prev"]').removeClass('tsvg-pagination-disabled-item');
        }
        if (+pageNumber == paginationItemsLenth) {
            jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="next"]').addClass('tsvg-pagination-disabled-item');
        }else{
            jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="next"]').removeClass('tsvg-pagination-disabled-item');
        }
        showFrom = numberItemsPerPage * (pageNumber - 1);
        showTo = showFrom + numberItemsPerPage;
        tsvgPaginationCreate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(tsvgPaginationData<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>,showFrom, showTo)
        jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="prev"]').unbind('click')
        jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="prev"]').click(function () {
        if(jQuery(this).parent().find('.tsvg-pagination-page-active').length){
            const tsvgMain = jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>')[0]
            const tsvgHeaderOffset = 200;
            const tsvgMainPosition = tsvgMain.getBoundingClientRect().top;
            const tsvgOffsetPosition = tsvgMainPosition + window.pageYOffset - tsvgHeaderOffset;
            window.scrollTo({
              top: tsvgOffsetPosition,
              behavior: "smooth",
            });
        }
        currentPosition = parseInt(jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  li.tsvg-pagination-page-item.tsvg-pagination-page-active').attr('data-item-number'))
        var last_element = jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  li.tsvg-pagination-page-item.tsvg-pagination-page-active').hasClass( "tsvg-pagination-page-number" );
        var prevPosiotion = currentPosition - 1;
        jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item').removeClass('tsvg-pagination-page-active')
        let first_item_position =  parseInt(jQuery(".tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-page-number").first().attr('data-item-number'));
        if(first_item_position>1&&last_element){
            jQuery(".tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-number").each(function(){
            let item_position =  parseInt(jQuery(this).attr('data-item-number'))-1;
            jQuery(this).attr('data-item-number',item_position).find('a').text(item_position)
            });
        }
        if(paginationItemsLenth > (parseInt(jQuery(".tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-number").last().attr('data-item-number'))+1) && !jQuery(".tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages").find('.page-null').length && (page_vw=='vw-2' || page_vw=='vw-3'))jQuery(".tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-number").last().after('<li data-item-number=" " class="tsvg-pagination-page-item page-null  "><a class="tsvg-pagination-page-link" href="javascript:void(0)">...</a></li>') 
        if((parseInt(jQuery(".tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-number").last().attr('data-item-number'))+1) >= paginationItemsLenth && (page_vw=='vw-2' || page_vw=='vw-3'))jQuery(".tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages").find('.page-null').remove();
        if(last_element){
        } else {
          jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="' +  parseInt(jQuery(".tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-number").last().attr('data-item-number')) + '"]').addClass('tsvg-pagination-page-active')
        } 
        if (-currentPosition == 1) {
            jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="prev"]').addClass('tsvg-pagination-disabled-item');
        } else{
            jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="prev"]').removeClass('tsvg-pagination-disabled-item');
        }
        if (+currentPosition == paginationItemsLenth) {
            jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="next"]').addClass('tsvg-pagination-disabled-item');
        }else{
            jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="next"]').removeClass('tsvg-pagination-disabled-item');
        }
        jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="' + prevPosiotion + '"]').click()
      })
      jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="next"]').unbind('click')
      jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="next"]').click(function () {
      if(jQuery(this).parent().find('.tsvg-pagination-page-active').length){
        const tsvgMain = jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>')[0]
        const tsvgHeaderOffset = 200;
        const tsvgMainPosition = tsvgMain.getBoundingClientRect().top;
        const tsvgOffsetPosition = tsvgMainPosition + window.pageYOffset - tsvgHeaderOffset;
        window.scrollTo({
          top: tsvgOffsetPosition,
          behavior: "smooth",
        });
      }
      currentPosition = parseInt(jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  li.tsvg-pagination-page-item.tsvg-pagination-page-active').attr('data-item-number'))
      var nextPosition = currentPosition + 1;
      jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item').removeClass('tsvg-pagination-page-active')
      let last_item_position =  parseInt(jQuery(".tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-number").last().attr('data-item-number'));
      if(((paginationItemsLenth-1)>last_item_position && (page_vw=='vw-2' || page_vw=='vw-3'))||((paginationItemsLenth-1) >= last_item_position&& (page_vw=='vw-4' || page_vw=='vw-5'))){
          jQuery(".tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-number").each(function(){
              let item_position =  parseInt(jQuery(this).attr('data-item-number'))+1;
              jQuery(this).attr('data-item-number',item_position).find('a').text(item_position)
          });
      }
      if(paginationItemsLenth > (parseInt(jQuery(".tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-number").last().attr('data-item-number'))+1) && !jQuery(".tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages").find('.page-null').length && (page_vw=='vw-2' || page_vw=='vw-3') )jQuery(".tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-number").last().after('<li data-item-number=" " class="tsvg-pagination-page-item page-null  "><a class="tsvg-pagination-page-link" href="javascript:void(0)">...</a></li>') 
      if((parseInt(jQuery(".tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-number").last().attr('data-item-number'))+1) >= paginationItemsLenth && (page_vw=='vw-2' || page_vw=='vw-3'))jQuery(".tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages").find('.page-null').remove();
      if (currentPosition == '1') {
          jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="prev"]').addClass('tsvg-pagination-disabled-item');
      } else{
          jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="prev"]').removeClass('tsvg-pagination-disabled-item');
      }
      if (+currentPosition == paginationItemsLenth) {
          jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-page-item[data-item-number="next"]').addClass('tsvg-pagination-disabled-item');
      }else{
          jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="next"]').removeClass('tsvg-pagination-disabled-item');
      }
      jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-page-item[data-item-number="' + nextPosition + '"]').click();
      })
      if('<?php echo esc_html($tsvg_theme_name);?>'=='Grid Video Gallery') {
        var interval_pg_cl_fn_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = setInterval(upGrid_cl_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, 100);
          function upGrid_cl_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() {
          if (typeof(window.Modernizr) != "undefined" && window.Modernizr != null && 
                typeof(window.imagesLoaded) != "undefined" && window.imagesLoaded != null && 
                typeof(window.CBPGridGallery) != "undefined" && window.CBPGridGallery != null){
             new  CBPGridGallery(document.getElementById(`tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>`));
            clearInterval(interval_pg_cl_fn_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>);
          }
          }
      }
      if(effect_open_type=='effect-1' && jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?> figure>ul>li').length>1){
          jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-pages-wrapper').attr('style','transition:unset; transform: translateY(200%);');
          jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>').attr('style','transition:unset; margin-bottom:140px;');
          setTimeout(() => {
            jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper').attr('style','transition: transform 3s  ease-out;transform: translateY(0%);');
            jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>').attr('style','transition: margin 3s  ease-out;margin-bottom:0;');
          }, 1000);
      }else{
          setTimeout(() => {
            jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>').css({'transition':'min-height 3s  ease-in-out','min-height':'0px'});
          }, 1000);
	  }
    })
         jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-page-number:nth-child(2)').click();
    }
        if( jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>').attr("data-pagination")=='load-more'){
        jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper').append('<a href="javascript:void(0)" class="btn btn-lg"><span>'+load_text+'</span><i class="'+load_icon+'"></i></a>');
        if( jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper').attr("data-load-vw")=='ef-4' || jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper').attr("data-load-vw")=='ef-5' ){
            if(!jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper svg').length){
                if(jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper').attr("data-load-vw")=='ef-5'){
                    jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-pages-wrapper').find('.btn-lg').html('<ul><li>'+load_text+'</li></ul><div><svg viewBox="0 0 24 24"></svg></div>');
                }else{
                    jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?> .tsvg-pagination-pages-wrapper').find('.btn-lg').html('<div><svg viewBox="0 0 24 24"></svg></div>');
                }
                var  svg = document.querySelector('.btn-lg svg'),
                svgPath = new Proxy({
                    y: null,
                    smoothing: null
                }, {
                    set(target, key, value) {
                        target[key] = value;
                        if(target.y !== null && target.smoothing !== null) {
                            svg.innerHTML = getPath(target.y, target.smoothing, null);
                        }
                        return true;
                    },
                    get(target, key) {
                        return target[key];
                    }
                });
                svgPath.y = 20;
                svgPath.smoothing = 0;
            }
        }
        jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .btn-lg').click(function (e) {
          let max_heigth =jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>').height(); 
		 let main_length = jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?> figure ul li').length;
			tsvgPaginationLoad<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = 'false';
			if(jQuery(this).closest('.tsvg-pagination-pages-wrapper').attr("data-load-vw")=='ef-3'||jQuery(this).closest('.tsvg-pagination-pages-wrapper').attr("data-load-vw")=='ef-4'||jQuery(this).closest('.tsvg-pagination-pages-wrapper').attr("data-load-vw")=='ef-5'){
				tsvgPaginationLoad<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = 'true';
			}
          jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>').css({'max-height': max_heigth+'px','transition':'unset'});
          setTimeout(() => {
              jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>').css({'transition':'max-height 3s  ease-in-out','max-height':main_length+'000vh'});
            }, 100);
          tsvgPaginationCreate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?> figure ul li').not('.tsvg-layout-item-show'),0, numberItemsPerPage);
          if(jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper').attr("data-load-vw")=='ef-3'){
            jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .btn-lg').addClass('animate');
            setTimeout(function(){
                jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .btn-lg').removeClass('animate');
            },700);
          }
            if(!jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .btn-lg').hasClass('loading')&&(jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper').attr("data-load-vw")=='ef-4'||jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper').attr("data-load-vw")=='ef-5')&&jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper svg').length) {
            jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .btn-lg').addClass('loading');
                setTimeout(() => {
                    svg.innerHTML = getPath(0, 0, [
                        [3, 14],
                        [8, 19],
                        [21, 6]
                    ]);
                }, 1000 / 2);
                setTimeout(() => {
                    jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .btn-lg').removeClass('loading');
                    if(jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper').attr("data-load-vw")=='ef-5'){
                        jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper').find('.btn-lg').html('<ul><li><span>'+load_text+'</span><i class="'+load_icon+'"></i></li></ul><div><svg viewBox="0 0 24 24"><path d="M 4,12 C 4,12 12,20 12,20 C 12,20 20,12 20,12"></path></svg></div>');
                    }else{
                       jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-pagination-pages-wrapper').find('.btn-lg').html('<div><svg viewBox="0 0 24 24"><path d="M 4,12 C 4,12 12,20 12,20 C 12,20 20,12 20,12"></path></svg></div>');
                    }
                }, 2000 );
            }
        })
        tsvgPaginationCreate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(jQuery('.tsvg-section-<?php echo esc_attr($tsvg_shortcode_id);?>  .tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?> figure ul li').not('.tsvg-layout-item-show'),0, numberItemsPerPage)
      }
    }
    function tsvgNewPagination<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>(){
        var interval_pag_fn_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?> = setInterval(setPagina_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>, 100);
        function setPagina_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>() {
        if(  typeof(jQuery) != "undefined" && jQuery != null){
            if( jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>').attr("data-pagination")=='pagination'){
                tsvgPaginationGenerate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>();
            }
            if( jQuery('.tsvg-main-content-<?php echo esc_attr($tsvg_shortcode_id);?>').attr("data-pagination")=='load-more'){
                tsvgPaginationGenerate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>();
            }
            clearInterval(interval_pag_fn_<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>);
        }
        }
    }
    tsvgNewPagination<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>();
	function tsvgPaginationGenerate(){
		tsvgPaginationGenerate<?php echo esc_attr( $tsvg_js_shortcode_id ); ?>();
	}
    function getPoint(point, i, a, smoothing) {
    let cp = (current, previous, next, reverse) => {
            let p = previous || current,
                n = next || current,
                o = {
                    length: Math.sqrt(Math.pow(n[0] - p[0], 2) + Math.pow(n[1] - p[1], 2)),
                    angle: Math.atan2(n[1] - p[1], n[0] - p[0])
                },
                angle = o.angle + (reverse ? Math.PI : 0),
                length = o.length * smoothing;
            return [current[0] + Math.cos(angle) * length, current[1] + Math.sin(angle) * length];
        },
        cps = cp(a[i - 1], a[i - 2], point, false),
        cpe = cp(point, a[i - 1], a[i + 1], true);
    return `C ${cps[0]},${cps[1]} ${cpe[0]},${cpe[1]} ${point[0]},${point[1]}`;
}
function getPath(update, smoothing, pointsNew) {
    let points = pointsNew ? pointsNew : [
            [4, 12],
            [12, update],
            [20, 12]
        ],
        d = points.reduce((acc, point, i, a) => i === 0 ? `M ${point[0]},${point[1]}` : `${acc} ${getPoint(point, i, a, smoothing)}`, '');
    return `<path d="${d}" />`;
}
</script>
    