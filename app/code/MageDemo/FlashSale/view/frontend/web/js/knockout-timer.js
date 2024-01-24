define(['ko'],
    function(ko) {
        return function(config) {
            this.heading = ko.observable(config.timerMessage);
        }
});