'use strict';


angular.module('message').controller('messageReadCtrl', ['$scope', '$timeout', 'messagePollingService', function($scope, $timeout, poll) {

    var pollTime = 2000;
    var url = '/Service.php';
    // var url = '/message.json';
    $scope.msgArr = [];

    poll.start(url, pollTime, function(result, success) {
        console.log(result);
        var now = new Date();
        // If the poll was successful 
        if (success)
        {
            _.each(result.msgArr, function(msg) {
                var msgStruct = {
                    user: msg.user,
                    data: msg.data,
                    time: now
                };
                
                $scope.msgArr.push(msgStruct);
            });
        }

        // Anything older than removeTime seconds will be deleted
        var removeTime = (new Date(now.getTime()))
            .setSeconds(now.getSeconds() - 10);

        var removeIndexArr = [];
        _.each($scope.msgArr, function(msg, index) {
            var msgTime = msg.time;
            var difference = msgTime - removeTime;
            
            // Record the indexes to be removed
            if (difference < 0)
                removeIndexArr.push(index);
        });
        
        // The indexes will be reversed so that the order is preserved when they removed
        removeIndexArr = removeIndexArr.reverse();
        // Now the array items can be removed one at a time
        _.each(removeIndexArr, function(valIndex) {
            $scope.msgArr.splice(valIndex, 1);
        });
    });


}]);


