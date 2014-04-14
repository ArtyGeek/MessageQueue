

// This displays each posting
angular.module('message').directive('messageList', function() {
    return {
        templateUrl: '/module/message/messageList.html',
        restrict: 'AE'
    }
});
