'use strict';


// This service posts messages to the server
angular.module('message').factory('messagePostingService', ['$http', function($http) {

    return {
        post: function(msg, callback) {

            // The service will handle status codes and error messages
            $http({
                method: 'POST',
                url: '/Service.php',
                data: msg
            }).then(function(result) {
                callback(true);
            });
        }
    }
}]);
