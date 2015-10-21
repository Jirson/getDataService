var app = angular.module('miApp',[]);

app.controller('miController', function ($scope,$http) {
    $scope.search = "Titanic";
    $scope.getDatas = function (){
        var url = "http://www.omdbapi.com/?t=" + $scope.search + "&tomatoes=true&plot=full";
        $http.get(url).success(function (datas) {
            $scope.details = datas;
            console.info($scope.details);
        });
    }
});