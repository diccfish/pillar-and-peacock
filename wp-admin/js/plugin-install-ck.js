/* Plugin Browser Thickbox related JS*/var tb_position;jQuery(document).ready(function(e){tb_position=function(){var t=e("#TB_window"),n=e(window).width(),r=e(window).height(),i=720<n?720:n,s=0;e("body.admin-bar").length&&(s=28);if(t.size()){t.width(i-50).height(r-45-s);e("#TB_iframeContent").width(i-50).height(r-75-s);t.css({"margin-left":"-"+parseInt((i-50)/2,10)+"px"});typeof document.body.style.maxWidth!="undefined"&&t.css({top:20+s+"px","margin-top":"0"})}return e("a.thickbox").each(function(){var t=e(this).attr("href");if(!t)return;t=t.replace(/&width=[0-9]+/g,"");t=t.replace(/&height=[0-9]+/g,"");e(this).attr("href",t+"&width="+(i-80)+"&height="+(r-85-s))})};e(window).resize(function(){tb_position()});e("#dashboard_plugins a.thickbox, .plugins a.thickbox").click(function(){tb_click.call(this);e("#TB_title").css({"background-color":"#222",color:"#cfcfcf"});e("#TB_ajaxWindowTitle").html("<strong>"+plugininstallL10n.plugin_information+"</strong>&nbsp;"+e(this).attr("title"));return!1});e("#plugin-information #sidemenu a").click(function(){var t=e(this).attr("name");e("#plugin-information-header a.current").removeClass("current");e(this).addClass("current");e("#section-holder div.section").hide();e("#section-"+t).show();return!1});e("a.install-now").click(function(){return confirm(plugininstallL10n.ays)})});