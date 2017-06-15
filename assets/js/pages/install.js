define(["jquery", "underscore", "enquire", "browserSelector", "handlebars", "selectize"],
function ($, _, enquire, browserSelector, Handlebars, selectize) {
    $(document).ready(function() {
        'use strict';
        var installPage = {
            init: function() {

                var self = this;

                this.compileTemplateSkeleton();
                $(this.variables.downloadSection).hide();
                $(this.variables.downloadFiltersSelect).selectize({
                  onChange: function(value) {
                      var currentValue = this.getValue();
                      self.reRenderTemplate(currentValue);
                  }
                });

                $(this.variables.downloadButton).click(_.bind(this.showDownloadsOptions, this));

                console.log(PHPStrings);

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

            reRenderTemplate: function(currentValue) {
                console.log(currentValue);
                if (currentValue === "Zip") {
                    console.log(PHPStrings.options);
                }
            },

            compileTemplateSkeleton: function() {
                var handlebarsLogic = $("#handlebars-logic").html();
                var template = Handlebars.compile(handlebarsLogic);
                var html = template(PHPStrings);

                $(".handlebars-content").append(html);
            },
            compileTemplateDownloads: function() {
                var handlebarsDownloads = $("#handlebars-download-logic").html();
                var template = Handlebars.compile(handlebarsDownloads);
                var html = template(PHPStrings);

                $(".download-filtered__downloads").append(html);
            },

            showDownloadsOptions: function() {
                $(this.variables.downloadSection).show();
                this.compileTemplateDownloads();
                //this.reRenderTemplate();

                $('html, body').animate({
                    scrollTop: $(this.variables.downloadSection).offset().top
                }, 1000);
            },

            changeDownloadOptionsContent: function(event) {
            },

        }
        installPage.init();
    });
});
