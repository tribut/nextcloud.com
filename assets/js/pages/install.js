define(["jquery", "underscore", "enquire", "browserSelector", "handlebars", "selectize"],
function ($, _, enquire, browserSelector, Handlebars, selectize) {
    $(document).ready(function() {
        'use strict';
        var installPage = {
            init: function() {

                this.compileTemplate();
                $(this.variables.downloadSection).hide();
                $(this.variables.downloadFiltersSelect).selectize();

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
            },

            compileTemplate: function() {
                var handlebarsLogic = $("#handlebars-logic").html();
                var template = Handlebars.compile(handlebarsLogic);
                var html = template(PHPStrings);

                $(".handlebars-content").append(html);
            },

            showDownloadsOptions: function() {
                $(this.variables.downloadSection).show();

                $('html, body').animate({
                    scrollTop: $(this.variables.downloadSection).offset().top
                }, 1000);
            },


        }
        installPage.init();
    });
});
