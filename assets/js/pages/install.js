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
                menuActiveEntrySelector: "toggle-menu__entry--active",
                serverMenuSelector: ".toggle-menu__entry:nth-child(1)",
                desktopMenuSelector: ".toggle-menu__entry:nth-child(2)",
                mobileMenuSelector: ".toggle-menu__entry:nth-child(3)",
                serverDownloadSectionSelector: "#serverDownloads",
                desktopDownloadSectionSelector: "#desktopDownloads",
                mobileDownloadSectionSelector: "#mobileDownloads",
                macClientSelector: "#mac-client",
                windowsClientSelector: "#windows-client",
                linuxClientSelector: "#linux-client",
                androidClientSelector: "#android-client",
                iosClientSelector: "#ios-client",
                fdroidClientSelector: "#froid-client",
                windowsMobileClientSelector: "#windowsMobile-client",
                visibleClass: "is-visible",
                macClass: "mac",
                linuxClass: "linux",
                windowsClass: "windows",
                androidClass: "android",
                iosClass: "ios",
                mobileClass: "mobile",
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
                var server = $(this.variables.htmlSelector).hasClass(this.variables.macClass || this.variables.linuxClass
                    || this.variables.windowsClass),
                    mobile = $(this.variables.htmlSelector).hasClass(this.variables.androidClass || this.variables.iosClass
                        || this.variables.mobileClass);

                if (desktopClick) {
                    $(this.variables.menuEntrySelector).removeClass(this.variables.menuActiveEntrySelector);
                    $(this.variables.desktopMenuSelector).addClass(this.variables.menuActiveEntrySelector);
                    $(this.variables.serverDownloadSectionSelector).removeClass(this.variables.visibleClass);
                    $(this.variables.mobileDownloadSectionSelector).removeClass(this.variables.visibleClass);
                    $(this.variables.desktopDownloadSectionSelector).addClass(this.variables.visibleClass);

                    this.matchClientWithOs();
                    return

                } if (mobile || mobileClick) {
                    $(this.variables.menuEntrySelector).removeClass(this.variables.menuActiveEntrySelector);
                    $(this.variables.mobileMenuSelector).addClass(this.variables.menuActiveEntrySelector);
                    $(this.variables.serverDownloadSectionSelector).removeClass(this.variables.visibleClass);
                    $(this.variables.desktopDownloadSectionSelector).removeClass(this.variables.visibleClass);
                    $(this.variables.mobileDownloadSectionSelector).addClass(this.variables.visibleClass);

                    this.matchClientMobile();
                    return

                } if (server || serverClick) {
                    $(this.variables.menuEntrySelector).removeClass(this.variables.menuActiveEntrySelector);
                    $(this.variables.serverMenuSelector).addClass(this.variables.menuActiveEntrySelector);
                    $(this.variables.mobileDownloadSectionSelector).removeClass(this.variables.visibleClass);
                    $(this.variables.desktopDownloadSectionSelector).removeClass(this.variables.visibleClass);
                    $(this.variables.serverDownloadSectionSelector).addClass(this.variables.visibleClass);
                    return
                }
            },

            matchClientWithOs: function () {
                if ($(this.variables.htmlSelector).hasClass(this.variables.macClass)) {
                    $(this.variables.macClientSelector).insertBefore(this.variables.windowsClientSelector);
                } if ($(this.variables.htmlSelector).hasClass(this.variables.linuxClass)) {
                    $(this.variables.linuxClientSelector).insertBefore(this.variables.windowsClientSelector);
                } else {
                    return
                }
            },

            matchClientMobile: function () {
                if ($(this.variables.htmlSelector).hasClass(this.variables.iosClass)) {
                    $(this.variables.iosClientSelector).insertBefore(this.variables.androidClientSelector);
                } else {
                    return;
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
