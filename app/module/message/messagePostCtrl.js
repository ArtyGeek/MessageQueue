'use strict';

// This controlls posting to the server
angular.module('message').controller('messagePostCtrl', ['$scope', 'messagePostingService', function($scope, messagePost) {

    $scope.data = { msg: ''};

    $scope.post = function()
    {
        messagePost.post(this.data.msg, function(success) {
        });
    }
}]);


