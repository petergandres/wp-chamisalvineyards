// JavaScript Document
var vin65remote = {
	loadingGraphic : '<img src="https://s3.amazonaws.com/assetss3.vin65.com/images/loading.gif">',
	product : {
		addToCartForm : function(website) {
			jQuery("[v65remotejs=addToCartForm]").each(function(index) {
				var productSKU="", currentForm="";
				productSKU=jQuery(this).attr('productSKU');
				currentForm=jQuery(this);
				
				jQuery.getJSON(website + '/index.cfm?method=remote.addToCartForm&productSKU=' + productSKU + '&?callback=?', function(response) {
					currentForm.html(response);
				});
			})
		}
	},
	usertools : {
		loginWidget : function(website,relocateTo) {
			jQuery.getJSON(website + '/index.cfm?method=remote.loginWidget&relocateTo= ' + relocateTo + '&?callback=?', function(response) {
				jQuery("[v65remotejs=loginWidget]").html(response);
			});	
		}
	},
	form : {
		form : function(website,formName) {
			jQuery.getJSON(website + '/index.cfm?method=remote.form&formName=' + formName + '&?callback=?', function(response) {
				jQuery("[v65remotejs=form]").html(response);
			});	
			jQuery(document).ready(function(){
				jQuery("[v65remotejs=form] form").live("submit",function(event){
				
					// if (jQuery('.v65-widgetForm fieldset').find('div.error').length == 0) {
					// 	jQuery(".newsletter__sent").css({"display":"none"});
					// }
					// else if (jQuery('.v65-widgetForm fieldset').find('div.error').length !== 0){
					// 	jQuery(".newsletter__sent").css({"display":"block"});

					// } else if ( jQuery('.v65-form').children().length === 0 ){
					// 	jQuery(".newsletter__sent").css({"display":"block"});

					// } else {
					// 	// jQuery(".newsletter__sent").css({"display":"block"});

					// }

			
					event.preventDefault();
					vin65remote.form.processSubmitForm(this,website);


				});
			});			
		},
		processSubmitForm: function(form,website) {
			d = new Date();
			formLabelsAndValues=jQuery(form).serialize();
			formDiv=jQuery(form).find("[name=FormDivID]").val();
			jQuery("#" + formDiv).html(vin65remote.loadingGraphic);
			jQuery.getJSON(website + '/index.cfm?method=remote.processForm&' + formLabelsAndValues + '&timeStamp=' + d.getTime() + '&?callback=?', function(response) {
				jQuery("#" + formDiv).hide();
				jQuery("#" + formDiv).replaceWith(response).hide().slideDown("slow");

			});

		}
	},	
	cart : {
		modalCart : function(website,dontShowIfZero) {
			jQuery.getJSON(website + '/index.cfm?method=remote.modalCart&dontShowIfZero=' + dontShowIfZero + '&?callback=?', function(response) {
				jQuery("[v65remotejs=modalCart]").html(response);
			});	
		},
		toggleCart: function() {
			var cartVisible = jQuery(".v65-widgetModalCart-dropdown").is(':visible');
			if(cartVisible == true) {
				vin65remote.cart.hideCart();			
			} else {
				vin65remote.cart.showCart();	
			}
		},
		showCart: function()  {
			jQuery(".v65-widgetModalCart-dropdown").slideDown("slow");
			jQuery("[v65remotejs=modalCart]").addClass('.v65-widgetModalCart-selected');
		},
		hideCart: function() {
			jQuery(".v65-widgetModalCart-dropdown").slideUp("slow");
			jQuery("[v65remotejs=modalCart]").removeClass('.v65-widgetModalCart-selected');
		},
		addToCart: function(website) {
			jQuery(document).ready(function(){
				jQuery("[v65remotejs=addToCart]").live("submit",function(event){
					event.preventDefault();
					vin65remote.cart.processAddToCart(this,website);
				});
			});
		},		
		processAddToCart: function(form,website) {
			try {vin65.quickView.closeQuickView();} catch(err) { /*Fail Silently*/}
			formLabelsAndValues=jQuery(form).serialize();
			target=jQuery("body").offset().top;
			jQuery(".v65-widgetModalCart-dropdown").hide();
			jQuery('html,body').animate({scrollTop: target},400,function() { 
				//Stuff placed in here will execute twice//
			});
			d = new Date();
			jQuery(".v65-widgetModalCart-dropdown").show().html(vin65remote.loadingGraphic);
			jQuery.getJSON(website + '/index.cfm?method=cart.addToCart&modalLayout=1&' + formLabelsAndValues + '&timeStamp=' + d.getTime() + '&?callback=?', function(response) {
				jQuery("[v65remotejs=modalCart]").replaceWith('<div v65remotejs="modalCart">' + response + '</div>').hide();
				jQuery(".v65-widgetModalCart-dropdown").slideDown();
				jQuery(".v65-widgetModalCart-itemMessage").fadeIn().slideDown().delay(3000);
				jQuery(".v65-widgetModalCart-itemMessage").slideUp().fadeOut();
			});
			return false;
		}
	}
};