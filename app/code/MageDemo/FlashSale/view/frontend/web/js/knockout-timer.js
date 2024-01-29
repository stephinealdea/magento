define(['ko', 'uiComponent'],
    function(ko, Component) {
    'use strict';

    return Component.extend({
        defaults: {
            template: 'MageDemo_FlashSale/timer'
        },

        initialize: function(config) {
            this._super();
            this.heading = ko.observable(config.timerMessage);
        }
    });
});