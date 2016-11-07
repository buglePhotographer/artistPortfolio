app.service('picturesService', function($http) {
    this.getPictures = function () {
	    return $http.get("http://localhost:8080/portfolio-page/api/index.php/pictures");
    }
});