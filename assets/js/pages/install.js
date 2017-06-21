define(["jquery", "underscore", "enquire", "browserSelector", "selectize"],
function ($, _, enquire, browserSelector, selectize) {
    $(document).ready(function() {
        'use strict';
        var installPage = {
            init: function() {

                this.self = this;
                var jsonObject = PHPStrings;
                this.selectizeControl;
                this.selectedItem;
                this.deviceType;

                console.log(PHPStrings);


                $(".download-filtered").hide();
                $(this.variables.downloadButton).click(_.bind(this.templateDownloadsHandler, this));

                enquire.register('screen and (max-width: 480px)', {
                    //match: _.bind(this.resultsBindMobile, this)
                });

                enquire.register('screen and (min-width: 481px)', {
                    //match: _.bind(this.enterpriseBindDesktop, this)
                });
            },

            variables : {
                downloadButton: ".downloads .download-type a",
                downloadSection: ".download-filtered",
                downloadFiltersSelect: ".download-filtered__select",
                downloadsContainerSelector: ".download-filtered__downloads__OS"
            },

            templateDownloadsHandler: function(event) {
                var currentCategory = $(event.currentTarget).attr("data-category");

                if (currentCategory === "server") {
                    this.deviceType = PHPStrings.server;

                } if (currentCategory === "desktop") {
                     this.deviceType = PHPStrings.desktop;

                } if (currentCategory === "mobile") {
                     this.deviceType = PHPStrings.mobile;

                } else {
                    this.updateContent();

                    $(".download-filtered").show();
                    $("html, body").animate({
                        scrollTop: $(".download-filtered").offset().top
                    }, 1000)
                    return
                }
            },

            updateContent: function() {
                this.addSelectOptions();
                this.initSelectize();
            },

            addSelectOptions: function() {
                $.each(this.deviceType.options, function(key, value) {
                     $('.download-filtered__select')
                         .append($("<option></option>")
                                    .attr("value",key)
                                    .text(value));
                });

                this.contentHandler();
            },

            initSelectize: function() {
                var select = $(".download-filtered__select").selectize();
                    this.selectizeControl = select[0].selectize;

                this.selectizeControl.on('change', _.bind(this.test, this))
            },

            test: function(value) {
                var item = this.selectizeControl.$input[0];
                this.selectedItem = $(item.selectize.getItem(value)[0]).text();
                console.log(this.selectedItem);
                this.contentHandler();
            },

            contentHandler: function() {
                var downloadOption;

                console.log(this.selectedItem);

                if (this.selectedItem === undefined || "Zip") {
                    downloadOption = this.deviceType.zip;
                    this.addInformation(downloadOption);

                } if (this.selectedItem === "Web Installer") {
                    downloadOption = this.deviceType.web;
                    this.addInformation(downloadOption);

                } if (this.selectedItem === "Appliance") {
                    downloadOption = this.deviceType.appliance;
                    this.addInformation(downloadOption);

                } else {

                }
            },

            addInformation: function(downloadOption) {
                console.log(downloadOption);
                $(".download-filtered__downloads__OS").addClass(downloadOption.extraClass);
                $(".download-filtered__downloads__info h1").text(downloadOption.title);
                $(".download-filtered__downloads__info a").prop("href", downloadOption.link);
            }
        }
        installPage.init();
    });
});
