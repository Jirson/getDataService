<!DOCTYPE html>
<html>
<head>
    <title>Angularjs getting Datas</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
</head>
<body>
    <div ng-app="miApp">
        <div ng-controller="miController">
            <input type="text" name="search" ng-model="search" autofocus>
            <input type="button" value="Get Datas!" ng-click="getDatas()">
            <p>Busco por termino: <span> {{search}}</span></p>
            <div>Datas results
            <span>{{details.Title}}</span>, {{details.Year}}
            </div>
        </div>
    </div>
</body>
</html>