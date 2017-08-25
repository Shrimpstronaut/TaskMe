(function () {
    'use strict';

    app.controller('LayoutController', LayoutController);
    LayoutController.$inject = ['$scope', '$location'];

    function LayoutController($scope, $location) {

        var vm = this;

        $scope.isActive = function (viewLocation) {
            console.log(viewLocation, $location.path());
            return viewLocation === $location.path();
        };

    }
})();