app.controller('MainController', ['$scope','picturesService', function($scope, picturesService){
	picturesService.getPictures().then(function (response) {
		console.log(response.data);
		gus = $scope;
	    $scope.pictures = response.data;
	});
}]);