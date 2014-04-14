'use strict';

// This controlls posting to the server
angular.module('message').controller('messagePostCtrl', ['$scope', 'messagePostingService', function($scope, messagePost) {

    $scope.msg = { data: '', type: 'text', user: 'Larry'};

    $scope.post = function()
    {
        // Ensure that the data is not changed
        var postData = _.clone($scope.msg);
    
        messagePost.post(postData, function(success) {
        });
    }
}]);


