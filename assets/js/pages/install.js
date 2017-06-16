define(["jquery", "underscore", "enquire", "browserSelector", "handlebars", "selectize"],
function ($, _, enquire, browserSelector, Handlebars, selectize) {
    $(document).ready(function() {
        'use strict';
        var installPage = {
            init: function() {

                const self = this;
                var data = PHPStrings;


                this.compileTemplateSkeleton();
                $(this.variables.downloadSection).hide();
                $(this.variables.downloadFiltersSelect).selectize({
                  onChange: function(value) {
                      var currentValue = this.getValue();
                      self.reRenderTemplate(currentValue);
                  }
                });

                $(this.variables.downloadButton).click(_.bind(this.ßœ, this));

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

            templateDownloadsHandler: function(currentValue) {
                console.log(currentValue);
                if (currentValue === "Zip") {
                    var data = PHPStrings.server.zip;
                    console.log(data);

                    this.compileTemplateDownloads(data);
                    return
                }

                if (currentValue === "Web installer") {
                    var data = PHPStrings.server.web;

                    this.compileTemplateDownloads(data);
                    return
                }
            },

            compileTemplateSkeleton: function() {
                var handlebarsLogic = $("#handlebars-logic").html();
                var template = Handlebars.compile(handlebarsLogic);
                var html = template(PHPStrings);

                $(".handlebars-content").append(html);
            },

            compileTemplateDownloads: function(data) {
              console.log(data);
                var handlebarsDownloads = $("#handlebars-download-logic").html();
                var template = Handlebars.compile(handlebarsDownloads);
                var html = template(data);

                $(".download-filtered__downloads").append(html);
            },

            showDownloadsOptions: function() {
                $(this.variables.downloadSection).show();
                this.compileTemplateSkeleton();
                this.templateDownloadsHandler();

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
