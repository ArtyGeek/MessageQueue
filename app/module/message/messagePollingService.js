'use strict';


// This polls for new messages on the server
angular.module('message').factory('messagePollingService', ['$http', function($http) {
    var poll = {};

    return {
        // Start command
        start: function(url, pollingTime, callback) {
            var poller = function() {
                // The service will handle status codes and error messages
                $http.get(url).then(function(result) {
                    callback(result.data, true);
                });;
            }
            poller();
            poll = setInterval(poller, pollingTime);
        },

        // Stop command
        stop: function() {
            clearInterval(poll);
            poll = {};
        }
    }
}]);
