angular.module('PortfolioApp', ['ngMaterial']).controller('MainController', 

function($scope) {
    $scope.title = "My Name Here";
    $scope.buttons = 
    [
        {title:'About', subtext:'Learn more about me'},
        {title:'Projects', subtext:'See what I\'m working on'},
        {title:'Contact', subtext:'Get in touch'}
    ];


    $scope.actionButton = function() {
        console.log("test");
    }
});