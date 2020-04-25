var upgrade_form={initialise:function()
{try{jQuery('input[type=radio].checked').prop('checked',true);}catch(err){jQuery('input[type=radio].checked').attr('checked',true);}
upgrade_form.set_up_product_events();upgrade_form.select_initial_product();upgrade_form.set_up_worldpay_impressions();upgrade_form.set_up_why_upgrade();upgrade_form.set_up_extra_info();},set_up_worldpay_impressions:function()
{jQuery("#checkout_button").click(function()
{jQuery(this).val('Please wait...');var submitForm=function(){jQuery('#checkout_button').parents('form').submit();};if(jQuery("input[name='payment_method']:checked").val()=='worldpay')
{setTimeout(submitForm,1000);jQuery.get("/flatshare/worldpay_impression.pl?instId="+jQuery('input[name=instId]').val(),submitForm);return false;}
else{return true;}});},set_up_extra_info:function()
{jQuery('#upgradeform ul.extra_info span.link').each(function()
{jQuery(this).css({'text-decoration':'underline'});var extra=jQuery(this).next('span.extra_info');extra.hide();jQuery(this).click(function()
{extra.toggle();});});},set_up_product_events:function()
{var self=this;jQuery('#upgradeform').addClass('js');this.products=jQuery('#upgradeform.new div.panel.product');if(this.products.hasClass("shelter")){jQuery("ul#day28_panel_extra_info").find("li.hidden").removeClass("hidden");}
this.products
.click(function()
{self.products.removeClass('on');var product=jQuery(this),charity_number=jQuery("#upgradeform .charity_number");try{product
.addClass('on')
.find('input[name=M_prodprice], input[name=prod_id]')
.prop('checked',true);}catch(err){product
.addClass('on')
.find('input[name=M_prodprice], input[name=prod_id]')
.attr('checked',true);}
if(charity_number.hasClass("on")){charity_number.removeClass("on");}
if(product.hasClass("shelter")){charity_number.addClass("on");}
updatetotal();self.update_form();});jQuery('#extra_listings').change(self.update_form);},select_initial_product:function()
{this.products
.find('input[name=M_prodprice]:checked, input[name=prod_id]:checked')
.parents('div.panel')
.trigger('click');},update_form:function()
{switch(UPGRADE_JS)
{case 2:jQuery('input[name=desc]').val(jQuery('input[name=M_prodprice]:checked').parent('.product').attr('title'));break;}
jQuery('.discount_total').text(jQuery('input[name=amount]').val());jQuery('.extra_listings_total').text(jQuery('input[name=extralistingscost]').val());},set_up_why_upgrade:function()
{jQuery('li a.js_load').click(function()
{var li=jQuery(this).parent('li');var content=li.find('div.content');if(content.length)
{content.toggle();}
else
{var page=jQuery(this).attr('href');var what=jQuery(this).attr('class').match(/js_load (\w+)jQuery/)[1];var part=jQuery(this).attr('class').match(/js_load_part/);li.append('<div class="content '+what+'">...</div>');content=li.find('div.content.'+what);content.hide();content.load(page+' .js_load'+((part)?'.'+what:''),function()
{content.prepend('<a class="cross_close" href="#">X</a>');content.find('a.cross_close').click(function()
{content.toggle();return false;});switch(what)
{case'why_upgrade':content.find('a.bluebuttontextlink').remove();break;case'compare_packages':break;}
content.slideDown('fast');});}
return false;});}};jQuery(document).ready(upgrade_form.initialise);
