(function($){var $emailfield=$('input[name="email"]');$emailfield.on('blur',function(){$(this).mailcheck({suggested:function(element,suggestion){if(!$('#email-domain-suggestion').length){var html='<p id="email-domain-suggestion">';html+='Did you mean: '+suggestion.address;html+='@<span>'+suggestion.domain+'</span>?';html+='<br><a id="email-domain-suggestion__accept">';html+='<i class="fas fa-check" aria-hidden="true"></i>';html+='</a><a id="email-domain-suggestion__reject"><i ';html+='class="fas fa-times" aria-hidden="true"></i></a></p>';$(element).before(html);$('#email-domain-suggestion__accept').click(function(){$(element).val(suggestion.full);$('#email-domain-suggestion').remove();})
$('#email-domain-suggestion__reject').click(function(){$('#email-domain-suggestion').remove();})}else{$('#email-domain-suggestion span').text(suggestion.domain);}},empty:function(element){$('#email-domain-suggestion').remove();}});});})(jQuery)
