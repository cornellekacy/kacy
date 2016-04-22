'use strict';


// Declare app level module which depends on filters, and services
angular.module('myApp', [
    'ngRoute',
    'myApp.filters',
    'myApp.services',
    'myApp.directives',
    'myApp.controllers'
]).
    config(['$routeProvider', function ($routeProvider) {
        $routeProvider.when('/home', {templateUrl: 'content/home.php', controller: 'homeCtrl'});
        $routeProvider.when('/student_enrollment', {templateUrl: 'content/student_enrollment.php', controller: 'student_enrollmentCtrl'});
        $routeProvider.when('/change_pass', {templateUrl: 'admin/change_pass.php', controller: 'change_passCtrl'});
        $routeProvider.when('/staff', {templateUrl: 'content/staff.php', controller: 'staffCtrl'});
        $routeProvider.when('/staff_list', {templateUrl: 'content/staff_list.php', controller: 'staff_listCtrl'});
        $routeProvider.when('/staff_profile', {templateUrl: 'admin/staff_profile', controller: 'staff_profileCtrl'});
        $routeProvider.when('/student', {templateUrl: 'content/student.php', controller: 'studentCtrl'});
        $routeProvider.when('/student_list', {templateUrl: 'content/student_list', controller: 'student_listCtrl'});
        $routeProvider.when('/staff_profile', {templateUrl: 'content/staff_profile.php', controller: 'staff_profileCtrl'});
        $routeProvider.when('/staff_enrollment', {templateUrl: 'content/staff_enrollment.php', controller: 'staff_enrollmentCtrl'});
        $routeProvider.when('/class_list', {templateUrl: 'content/class_list.php', controller: 'class_listCtrl'});
        $routeProvider.when('/setup_class', {templateUrl: 'content/setup_class.php', controller: 'setup_classCtrl'});
        $routeProvider.when('/adduser', {templateUrl: 'content/adduser.php', controller: 'adduserCtrl'});
        $routeProvider.when('/change_password', {templateUrl: 'content/change_password.php', controller: 'change_passwordCtrl'});
        $routeProvider.when('/update_user', {templateUrl: 'content/update_user.php', controller: 'update_userCtrl'});


        $routeProvider.otherwise({redirectTo: '/home'});
    }]);
