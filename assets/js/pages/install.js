define(["jquery", "underscore", "enquire", "velocity", "velocityUI", "scrollMagic", "browserSelector"],
function ($, _, enquire, velocity, velocityUI, ScrollMagic, browserSelector) {
	$(document).ready(function() {
    'use strict';
    var installPage = {
        init: function() {

          this.pinFiltersBar();
          this.matchDevice();
          this.handlerClick();

          enquire.register('screen and (max-width: 480px)', {
  					//match: _.bind(this.resultsBindMobile, this)
  				});

  				enquire.register('screen and (min-width: 481px)', {
  					//match: _.bind(this.enterpriseBindDesktop, this)
  				});
  			},

  			variables : {
          linksContainerSelector : ".usefull-links",
          downloadsSectionSelector: ".downloads-container",
					htmlSelector: "html",
          menuEntrySelector: ".toggle-menu__entry",
          serverMenuSelector: ".toggle-menu__entry:nth-child(1)",
          desktopMenuSelector: ".toggle-menu__entry:nth-child(2)",
          mobileMenuSelector: ".toggle-menu__entry:nth-child(3)",
          serverDownloadSectionSelector: "#serverDownloads",
          desktopDownloadSectionSelector: "#desktopDownloads",
          mobileDownloadSectionSelector: "#mobileDownloads",
  			},

        handlerClick: function() {
          $(this.variables.menuEntrySelector).click(event, _.bind(this.toggleSection, this));
        },

        toggleSection: function(event) {
          var elementId = $(event.currentTarget).attr("id");

          if (elementId === "server") {
            this.matchDevice(true);
          } if (elementId === "desktop") {
            this.matchDevice(false, true);
          } if (elementId === "mobile") {
            this.matchDevice(false, false, true);
          }
        },

				matchDevice: function(serverClick, desktopClick, mobileClick) {
					var server = $(this.variables.htmlSelector).hasClass("mac" || "linux" || "windows"),
              mobile = $(this.variables.htmlSelector).hasClass("android" || "ios" || "mobile");

          if (desktopClick) {
            $(this.variables.menuEntrySelector).removeClass("toggle-menu__entry--active");
            $(this.variables.desktopMenuSelector).addClass("toggle-menu__entry--active");
            $(this.variables.serverDownloadSectionSelector).removeClass("is-visible");
            $(this.variables.mobileDownloadSectionSelector).removeClass("is-visible");
            $(this.variables.desktopDownloadSectionSelector).addClass("is-visible");
            return
            
          } if (mobile || mobileClick) {
            $(this.variables.menuEntrySelector).removeClass("toggle-menu__entry--active");
            $(this.variables.mobileMenuSelector).addClass("toggle-menu__entry--active");
            $(this.variables.serverDownloadSectionSelector).removeClass("is-visible");
            $(this.variables.desktopDownloadSectionSelector).removeClass("is-visible");
            $(this.variables.mobileDownloadSectionSelector).addClass("is-visible");
            return

          } if (server || serverClick) {
            $(this.variables.menuEntrySelector).removeClass("toggle-menu__entry--active");
            $(this.variables.serverMenuSelector).addClass("toggle-menu__entry--active");
            $(this.variables.mobileDownloadSectionSelector).removeClass("is-visible");
            $(this.variables.desktopDownloadSectionSelector).removeClass("is-visible");
            $(this.variables.serverDownloadSectionSelector).addClass("is-visible");
            return
          }
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
