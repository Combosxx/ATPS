<?php 
include "Nav.php";
//require "Nav.php";
session_start();
?>

<html dir="ltr" lang="en">
<head>
  <meta charset="utf-8" />
  <title>Envoyer une demande &ndash; ATPS</title>
  <link href="https://support-atps.zendesk.com/hc/fr/requests/new" rel="canonical">
  <link rel="stylesheet" href="//static.zdassets.com/hc/assets/application-dabd91632e59b822715fbd3d678bb2b8.css" media="all" id="stylesheet" />
  <link rel="stylesheet" type="text/css" href="//p18.zdassets.com/hc/theming_assets/9209966/360000279740/style.css?digest=16999468303634">
  <link rel="icon" type="image/x-icon" href="//theme.zdassets.com/theme_assets/9209966/9ba468b7d09cfa64e22583f042413fafc2e67bb8.png">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
<!-- Make the translated search clear but
ton label available for use in JS -->
<!-- See buildClearSearchButton() in script.js -->
<script type="text/javascript">window.searchClearButtonLabelLocalized = "Effacer la recherche";</script>
</head>
<body class="">
   
    </nav>
    
  </div>

  <div class="nav-wrapper-mobile">
    <button class="menu-button-mobile" aria-controls="user-nav-mobile" aria-expanded="false" aria-label="Ouvrir/Fermer le menu de navigation">
      
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" focusable="false" viewBox="0 0 16 16" class="icon-menu">
        <path fill="none" stroke="currentColor" stroke-linecap="round" d="M1.5 3.5h13m-13 4h13m-13 4h13"/>
      </svg>
    </button>
  
        
          <li class="item">
            <a role="button" rel="nofollow" data-auth-action="signin" title="Ouvre une boîte de dialogue" href="/hc/fr/signin?return_to=https%3A%2F%2Fsupport-atps.zendesk.com%2Fhc%2Ffr%2Frequests%2Fnew">
              Connexion
            </a>
          </li>
          <li class="nav-divider"></li>
        
        <li class="item"></li>
        <li class="item"><a class="submit-a-request" role="menuitem" href="/hc/fr/requests/new">Envoyer une demande</a></li>
        <li class="nav-divider"></li>
        
        </li>
      </ul>
    </nav>
  </div>

</header>


  <main role="main">
    <div class="container-divider"></div>
<div class="container">
  <div class="sub-nav">
    <nav aria-label="Emplacement actuel">
  <ol class="breadcrumbs">
    
      <li>
        
          <a href="ATPS.PHP">ATPS</a>
        
      </li>
    
      <li>
        
          
            <a href="#" aria-current="page">Envoyer une demande</a>
          
        
      </li>
   
  </ol>

</nav>

      <?php
$image_url = "https://example.com/photo/7.png";
echo "<img src='". $image_url. "'>";
?>
 <h1>
    Envoyer une demande
    <span class="follow-up-hint">
      
    </span>
  </h1>

  <div id="main-content" class="form">
    <form id="new_request" class="request-form" data-form="" data-form-type="request" action="/hc/fr/requests" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" autocomplete="off" />



  

  <input type="hidden" name="request[ticket_form_id]" id="request_ticket_form_id" value="360001996079" autocomplete="off" />

  <div class="form-field string required request_anonymous_requester_email"><label for="request_anonymous_requester_email">Adresse e-mail</label>
<input type="text" name="request[anonymous_requester_email]" id="request_anonymous_requester_email" aria-required="true" />
</div>
    <div class="form-field string  required  request_subject" >
      <label id="request_subject_label" for="request_subject">Sujet</label>
      <input type="text" name="request[subject]" id="request_subject" maxlength="150" size="150" aria-required="true" aria-labelledby="request_subject_label" />
      
      
    </div>

    
      <div class="suggestion-list" data-hc-class="searchbox" data-hc-suggestion-list="true"></div>
    
  
    <div class="form-field text  required  request_description" >
      <label id="request_description_label" for="request_description">Description (merci d&#39;ajouter vos coordonnées avec l&#39;email + téléphone pour être recontacté)</label>
      <textarea name="request[description]" id="request_description" aria-required="true" aria-describedby="request_description_hint" aria-labelledby="request_description_label" data-helper="wysiwyg">
</textarea><input type="hidden" name="request[description_mimetype]" id="request_description_mimetype" value="text/html" style="display: none;" autocomplete="off" />
      
      <p id="request_description_hint">Veuillez saisir les détails de votre demande. Un membre de notre équipe d’assistance répondra dans les plus brefs délais.</p>
    </div>

    
  
    <div class="form-field string  required  request_custom_fields_360002693079" >
      <label id="request_custom_fields_360002693079_label" for="request_custom_fields_360002693079">Date d&#39;échéance</label>
      <input type="text" name="request[custom_fields][360002693079]" id="request_custom_fields_360002693079" data-datepicker="" data-format="YYYY-MM-DD" class="datepicker" aria-required="true" aria-labelledby="request_custom_fields_360002693079_label" />
      
      
    </div>

    
  

  <script data-conditional-fields="[]"></script>

  <div class="form-field">
  <label for="request-attachments">
    Pièces jointes<span class="optional">(valeur facultative)</span>
  </label>
  <div id="upload-dropzone" class="upload-dropzone">
  <input type="file" multiple="true" id="request-attachments"
    data-fileupload="true"
    data-dropzone="upload-dropzone"
    data-error="upload-error"
    data-create-url="/hc/fr/request_uploads"
    data-name="request[attachments][]"
    data-pool="request-attachments-pool"
    data-delete-confirm-msg=""
    aria-describedby="upload-error" />
  <span>
    <a>Ajoutez un fichier</a> ou faites glisser les fichiers ici
  </span>
</div>

<div id="upload-error" class="notification notification-error notification-inline">
  <span data-upload-error-message></span>
</div>


  <ul id="request-attachments-pool" class="upload-pool" data-template="upload-template"></ul>

<script type="text/html" id="upload-template">
<li class="upload-item" data-upload-item>
    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" focusable="false" viewBox="0 0 12 12" aria-hidden="true" class="upload-item-icon">
      <path fill="none" stroke="currentColor" stroke-linecap="round" d="M2.5 4v4.5c0 1.7 1.3 3 3 3s3-1.3 3-3v-6c0-1.1-.9-2-2-2s-2 .9-2 2v6c0 .6.4 1 1 1s1-.4 1-1V4"/>
    </svg>
    <div aria-hidden="true" class="upload-item-icon-spacer"></div>
  <a class="upload-link" target="_blank" data-upload-link></a>
  <p class="upload-path" data-upload-path></p>
  <p class="upload-path" data-upload-size></p>
  <p data-upload-issue class="notification notification-alert notification-inline" aria-hidden="true"></p>
  <span class="upload-remove" aria-label="Supprimer la pièce jointe" role="button" tabindex="0" data-upload-remove>
    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" focusable="false" viewBox="0 0 12 12" class="upload-item-icon">
      <path stroke="currentColor" stroke-linecap="round" d="M3 9l6-6m0 6L3 3"/>
    </svg>
  </span>
  <div class="upload-progress" data-upload-progress></div>
  <input type="hidden">
</li>
</script>


</div>

  <footer><input type="submit" name="commit" value="Envoyer" /></footer>

</form>



  </div>
</div>

  </main>

  <footer class="footer">
  <div class="footer-inner">
    <a title="Accueil" href="/hc/fr">ATPS</a>

    <div class="footer-language-selector">
      
    </div>
  </div>
</footer>

  <script src="//static.zdassets.com/hc/assets/fr.30900be62dbde1f2771e.js"></script>
  <script src="https://support-atps.zendesk.com/auth/v2/host/without_iframe.js" data-brand-id="360000279740" data-return-to="https://support-atps.zendesk.com/hc/fr/requests/new" data-theme="hc" data-locale="fr" data-auth-origin="360000279740,false,true"></script>

  <script type="text/javascript">
  /*

    Greetings sourcecode lurker!

    This is for internal Zendesk and legacy usage,
    we don't support or guarantee any of these values
    so please don't build stuff on top of them.

  */

  HelpCenter = {};
  HelpCenter.account = {"subdomain":"support-atps","environment":"production","name":"ATPS"};
  HelpCenter.user = {"identifier":"da39a3ee5e6b4b0d3255bfef95601890afd80709","email":null,"name":"","role":"anonymous","avatar_url":"https://assets.zendesk.com/hc/assets/default_avatar.png","is_admin":false,"organizations":[],"groups":[]};
  HelpCenter.internal = {"asset_url":"//static.zdassets.com/hc/assets/","web_widget_asset_composer_url":"https://static.zdassets.com/ekr/snippet.js","current_session":{"locale":"fr","csrf_token":null,"shared_csrf_token":null},"settings":{},"usage_tracking":{"event":"submit_request_form_viewed","data":"BAh7BzoVcGFyZW50X3RpY2tldF9pZDA6Cl9tZXRheww6D2FjY291bnRfaWRpA26IjDoTaGVscF9jZW50ZXJfaWRsKwjXOq7RUwA6DWJyYW5kX2lkbCsIvFSw0VMAOgx1c2VyX2lkMDoTdXNlcl9yb2xlX25hbWVJIg5BTk9OWU1PVVMGOgZFVDoLbG9jYWxlSSIHZnIGOwxUOhphbm9ueW1vdXNfdHJhY2tpbmdfaWQw--4dd8517b690221d9f8af2051a57e6a362e3fdfe1","url":"https://support-atps.zendesk.com/hc/activity"},"current_record_id":null,"current_record_url":null,"current_record_title":null,"search_results_count":null,"current_text_direction":"ltr","current_brand":{"id":360000279740,"account_id":9209966,"name":"ATPS","active":true,"deleted_at":null,"created_at":"2019-03-26T10:00:27Z","updated_at":"2021-02-23T08:14:49Z","route_id":2702729,"signature_template":"{{agent.signature}}"},"current_brand_url":"https://support-atps.zendesk.com","current_host_mapping":null,"current_path":"/hc/fr/requests/new","authentication_domain":"https://support-atps.zendesk.com","show_autocomplete_breadcrumbs":true,"user_info_changing_enabled":false,"has_user_profiles_enabled":false,"has_end_user_attachments":true,"user_aliases_enabled":false,"has_anonymous_kb_voting":false,"has_multi_language_help_center":true,"show_at_mentions":false,"embeddables_config":{"embeddables_web_widget":true,"embeddables_connect_ipms":false},"base_domain":"zendesk.com","answer_bot_subdomain":"static","manage_content_url":"https://support-atps.zendesk.com/hc/fr","arrange_content_url":"https://support-atps.zendesk.com/hc/admin/arrange_contents?locale=fr","general_settings_url":"https://support-atps.zendesk.com/hc/admin/general_settings?locale=fr","user_segments_url":"https://support-atps.zendesk.com/knowledge/user_segments?brand_id=360000279740","has_gather":true,"has_ckeditor":true,"has_community_enabled":false,"has_community_badges":true,"has_community_post_content_tagging":false,"has_gather_content_tags":true,"has_guide_content_tags":true,"has_user_segments":true,"has_answer_bot_web_form_enabled":true,"has_edit_user_profile_v2":false,"has_change_password_modal_v2":true,"has_garden_modals":false,"billing_url":"/access/return_to?return_to=https%3A%2F%2Fsupport-atps.zendesk.com%2Fadmin%2Fbilling%2Fsubscription","is_account_owner":false,"theming_cookie_key":"hc-da39a3ee5e6b4b0d3255bfef95601890afd80709-2-preview","is_preview":false,"has_alternate_templates":false,"arrange_articles_url":"https://support-atps.zendesk.com/knowledge/arrange?brand_id=360000279740","article_verification_url":"https://support-atps.zendesk.com/knowledge/verification?brand_id=360000279740","has_article_verification":false,"guide_language_settings_url":"https://support-atps.zendesk.com/hc/admin/language_settings?locale=fr","docs_importer_url":"https://support-atps.zendesk.com/knowledge/import_articles?brand_id=360000279740","content_tags_url":"https://support-atps.zendesk.com/knowledge/content_tags?brand_id=360000279740","community_badges_url":"https://support-atps.zendesk.com/knowledge/community_badges?brand_id=360000279740","community_settings_url":"https://support-atps.zendesk.com/knowledge/community_settings?brand_id=360000279740","gather_plan_state":"subscribed","search_settings_url":"https://support-atps.zendesk.com/knowledge/search_settings?brand_id=360000279740","has_multibrand_search_in_plan":false,"has_search_settings_in_plan":true,"theming_api_version":3,"theming_settings":{"brand_color":"rgba(232, 73, 16, 1)","brand_text_color":"rgba(255, 255, 255, 1)","text_color":"rgba(46, 50, 54, 1)","link_color":"rgba(10, 125, 148, 1)","hover_link_color":"#0F3554","visited_link_color":"rgba(232, 73, 16, 1)","background_color":"rgba(255, 255, 255, 1)","heading_font":"Futura, 'Century Gothic', sans-serif","text_font":"Futura, 'Century Gothic', sans-serif","logo":"//theme.zdassets.com/theme_assets/9209966/18fd9d6f094a5bfad69f7f26d4c565b34a530447.png","show_brand_name":false,"favicon":"//theme.zdassets.com/theme_assets/9209966/9ba468b7d09cfa64e22583f042413fafc2e67bb8.png","homepage_background_image":"//theme.zdassets.com/theme_assets/9209966/204b311179587da22c8b0ab2e2b9e9f3eec9e031.png","community_background_image":"//theme.zdassets.com/theme_assets/9209966/e8671b2629a56a2a58bdce403940f55557d1dc6b.jpg","community_image":"//theme.zdassets.com/theme_assets/9209966/f809f5c199aae24d576f120908f1cc705a8a12f1.jpg","instant_search":true,"scoped_kb_search":true,"scoped_community_search":true,"show_recent_activity":true,"show_articles_in_section":true,"show_article_author":false,"show_article_comments":false,"show_follow_article":true,"show_recently_viewed_articles":true,"show_related_articles":false,"show_article_sharing":false,"show_follow_section":true,"show_follow_post":true,"show_post_sharing":false,"show_follow_topic":true,"request_list_beta":false},"has_pci_credit_card_custom_field":false,"current_brand_id":360000279740,"help_center_restricted":false,"current_brand_active":true,"is_assuming_someone_else":false,"flash_messages":[],"user_photo_editing_enabled":true,"has_docs_importer":false,"user_preferred_locale":"fr","has_end_user_session_renewal":true,"has_user_session_cookie_enabled":false,"has_end_user_2fa":true,"has_custom_statuses_enabled":false,"has_generative_answers_in_help_center":false,"has_hc_generative_answers_setting_enabled":false,"version":"v24530"};
</script>

  
  <script src="//static.zdassets.com/hc/assets/hc_enduser-aed5628a1a5251639e9960a1f9e080fa.js"></script>
  <script type="text/javascript" src="//p18.zdassets.com/hc/theming_assets/9209966/360000279740/script.js?digest=16999468303634"></script>  
<script>(function(){if (!document.body) return;var js = "window['__CF$cv$params']={r:'88330a980fad7948',t:'MTcxNTYwNzQyOC42NjYwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>
</html>