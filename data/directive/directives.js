testApp.directive('navBar', function () {
  return {
    restrict: 'EA',
    templateUrl: 'data/directive/header.html'
  };
});
testApp.directive('appFooter', function () {
  return {
    restrict: 'EA',
    templateUrl: 'data/directive/footer.html'
  };
});

function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

testApp.directive('ngEnter', function () {
    return function (scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if(event.which === 13) {
                scope.$apply(function (){
                    scope.$eval(attrs.ngEnter);
                });

                event.preventDefault();
            }
        });
    };
});
