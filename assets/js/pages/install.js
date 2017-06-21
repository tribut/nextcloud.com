define(["jquery", "underscore", "enquire", "browserSelector", "selectize"],
function ($, _, enquire, browserSelector, selectize) {
    $(document).ready(function() {
        'use strict';
        var installPage = {
            init: function() {

                const self = this;
                var jsonObject = PHPStrings;
                this.selectedItem;


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
                var deviceType;

                if (currentCategory === "server") {
                    deviceType = PHPStrings.server;

                } if (currentCategory === "desktop") {
                     deviceType = PHPStrings.desktop;

                } if (currentCategory === "mobile") {
                     deviceType = PHPStrings.mobile;

                } else {
                    this.updateContent(deviceType);

                    $(".download-filtered").show();
                    $("html, body").animate({
                        scrollTop: $(".download-filtered").offset().top
                    }, 1000)
                    return
                }
            },

            updateContent: function(deviceType) {
                this.addSelectOptions(deviceType);
                this.initSelectize();
            },

            addSelectOptions: function(deviceType) {
                $.each(deviceType.options, function(key, value) {
                     $('.download-filtered__select')
                         .append($("<option></option>")
                                    .attr("value",key)
                                    .text(value));
                });

                this.contentHandler(deviceType);
            },

            initSelectize: function() {
                var select = $(".download-filtered__select").selectize(),
                    selectizeControl = select[0].selectize;

                selectizeControl.on('change', function(value) {
                    var item = this.$input[0];
                    this.selectedItem = $(item.selectize.getItem(value)[0]).text();
                });
            },

            contentHandler: function(deviceType) {
                var downloadOption;

                if (this.selectedItem === undefined || "Zip") {
                    downloadOption = deviceType.zip;

                    this.addInformation(downloadOption);

                } if (true) {

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
