var myApp = angular.module('myApp', []);

myApp.controller('messagesController', function($scope){
	$scope.postedMessages = {
		messageOne : 'hello'
		,messageTwo : 'hello2'
		,messageThree : 'hello3'
	};

});