angular.module('app').controller('MainController', function($scope, $http) {
    var vm = this;
    vm.title = "Get in touch!";
    vm.details = "Please feel free to contact me with any comments, questions, or opportunities!";
    vm.nameFromForm = '';
    vm.emailFromForm = '';
    vm.subjectFromForm = '';
    vm.messageFromForm = '';
    vm.sent = false;

    vm.submitForm = function(isValid) {
    	if (isValid) {
    		vm.formData = [vm.nameFromForm, vm.emailFromForm, vm.subjectFromForm, vm.messageFromForm];
            vm.postData = 'myData='+JSON.stringify(vm.formData);
    		$http({
    			method  : 'POST',
    			url     : 'PHP/contact-form.php',
    			data    : vm.postData,
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
			}).success(function(data) {
    			vm.sent = true;
                vm.resultMessage = "Thanks! I will reply as soon as possible.";
                vm.result = 'bg-success';
    		});
    	} else {
            vm.resultMessage = "Looks like something went wrong! Make sure the form is filled out correctly.";
        }
    }
});