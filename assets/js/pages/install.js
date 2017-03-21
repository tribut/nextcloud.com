define(["jquery", "underscore", "enquire", "velocity", "velocityUI", "scrollMagic"],
function ($, _, enquire, velocity, velocityUI, ScrollMagic) {
	$(document).ready(function() {
    'use strict';
    var installPage = {
        init: function() {

          this.pinFiltersBar();

          enquire.register('screen and (max-width: 480px)', {
  					//match: _.bind(this.resultsBindMobile, this)
  				});

  				enquire.register('screen and (min-width: 481px)', {
  					//match: _.bind(this.enterpriseBindDesktop, this)
  				});
  			},

  			variables : {
          linksContainerSelector : ".usefull-links",
          downloadsSectionSelector: ".downloads-container"
  			},

        pinFiltersBar: function() {
          var controller = new ScrollMagic.Controller();
          var scene = new ScrollMagic.Scene({
            triggerElement: this.variables.downloadsSectionSelector,
            triggerHook:0,
            offset: 10
          })
            .setPin(this.variables.linksContainerSelector)
            .addTo(controller);
        },
      }
    installPage.init();
  });
});
