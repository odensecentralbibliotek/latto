/* 
 * Integrates the google translation bar into the site.
 * It injects a translation link that opens into a dialog where you can select
 * the language.
 */
jQuery(document).ready(function(){
    
    //Add the link to top of page.
    //CloseTranslationDialogHooks = false;
    if(typeof Drupal.settings.oc_template_overwrites !== 'undefined' &&
           Drupal.settings.oc_template_overwrites.google_translate_enabled == 1 )
    {

    }
    setTimeout(function(){ 
    if(!jQuery('#google_translate_element').length || jQuery('#google_translate_element').is(':empty') )
    {
        /*
         * This is required only for IE. The callback function is not always triggerd
         * But the translate object is loaded fine and we can just init it then.
         * the timeout can be tweaked for bedst possible user experiance.
         */
        googleTranslateElementInit();
    }
    
    }, 1000);
});
//Callback after google translate init.
function googleTranslateElementInit() {
    if(!jQuery('#Translation_Menu_Addon').length)
    {
         var TranslateLink = jQuery("#page").children();
        TranslateLink.first().prepend('<div id="Translation_Menu_Addon" class="grid-inner" style=""><a onclick="ShowTranslationDialog()" >'+ 'Translate'+'</a>\n\
                                   </div><div onclick="" id="Translation_dialog" title="Vælg Sprog" style="display:none;"><div id="google_translate_element"></div>\n\
                                   <br/><div style="font-size:12px;">'+Drupal.t('Vi gør opmærksom på, at denne funktion er en maskinel oversættelse og derfor ikke altid er helt korrekt.')+'</div></div>');
    }
    var languages = '';
    try {
        languages = Drupal.settings.oc_template_overwrites.google_translate_languages;
    } catch (e) {
        
    }  
    new google.translate.TranslateElement({pageLanguage: 'da', includedLanguages: languages, layout: google.translate.TranslateElement.InlineLayout.SIMPLE,autoDisplay: false, gaTrack: true, gaId: 'UA-3030685-7'}, 'google_translate_element');  
}
function ShowTranslationDialog(e)
{
    var Languages = jQuery('.goog-te-menu-frame').contents().find('.goog-te-menu2-item');
    jQuery.each(Languages,function(index,value){
        value.addEventListener("click", function(){
         jQuery( "#Translation_dialog" ).dialog( "close" );
     });
    });
    jQuery( "#Translation_dialog" ).dialog({
        modal: true,
        buttons: {
        Luk: function() {
                jQuery( this ).dialog( "close" );
            }
         }
    });
}

