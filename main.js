var myApp = angular.module('myApp', []);

myApp.controller('messagesController', function($scope){
	$scope.postedMessages = {
		a : 'hello'
		,b : 'hello2'
		,c : 'hello3'
		,d  : 'hello4'
		,e  : 'hello5'
		,f : 'hello6'
	};

});