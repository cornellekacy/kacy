'use strict';

/* Controllers */

 angular.module('myApp.controllers', [])

  .controller('homeCtrl', ['$scope', function ($scope) {
        $scope.$parent.title = "Home";
         $scope.$parent.img = "img/iconset-addictive-flavour-set/png/screen_aqua_glossy.png";
         $scope.$parent.showTopToggle = true;

    }])

    .controller('staffCtrl', ['$scope', function ($scope) {
        $scope.$parent.title = "Staff Registration";
        $scope.$parent.img = "img/iconset-addictive-flavour-set/png/button_red_add.png";
        $scope.$parent.showTopToggle = false;
    }])

    .controller('staff_listCtrl', ['$scope', function ($scope) {
        $scope.$parent.title = "Staff List";
        $scope.$parent.img = "img/iconset-addictive-flavour-set/png/document-plaid-pen.png";
        $scope.$parent.showTopToggle = false;
    }])

    .controller('studentCtrl', ['$scope', function ($scope) {
        $scope.$parent.title = "Student Registration";
        $scope.$parent.img = "img/iconset-addictive-flavour-set/png/button_blue_add.png";
        $scope.$parent.showTopToggle = false;
    }])

    .controller('student_listCtrl', ['$scope', function ($scope) {
        $scope.$parent.title = "Student List";
        $scope.$parent.img = "img/iconset-addictive-flavour-set/png/document-plaid-pen.png";
        $scope.$parent.showTopToggle = false;

    }])

     .controller('student_enrollmentCtrl', ['$scope', function ($scope) {
        $scope.$parent.title = "Student Enrollment";
         $scope.$parent.img = "img/iconset-addictive-flavour-set/png/screen_aqua_glossy.png";
         $scope.$parent.showTopToggle = true;

    }])

     .controller('staff_profileCtrl2', ['$scope', function ($scope) {
         $scope.$parent.title = "staff_profile";
         $scope.$parent.img = "img/iconset-addictive-flavour-set/png/moleskine_black.png";
         $scope.$parent.showTopToggle = false;
     }])

      .controller('staff_enrollmentCtrl', ['$scope', function ($scope) {
         $scope.$parent.title = "Staff Enrollment";
         $scope.$parent.img = "img/iconset-addictive-flavour-set/png/screen_aqua_glossy.png";
         $scope.$parent.showTopToggle = false;
     }])

       .controller('class_listCtrl', ['$scope', function ($scope) {
         $scope.$parent.title = "Generate Class List";
         $scope.$parent.img = "img/iconset-addictive-flavour-set/png/moleskine_black.png";
         $scope.$parent.showTopToggle = false;
     }])
       .controller('setup_classCtrl', ['$scope', function ($scope) {
         $scope.$parent.title = "Setup Class";
         $scope.$parent.img = "img/iconset-addictive-flavour-set/png/moleskine_black.png";
         $scope.$parent.showTopToggle = false;
     }])

       .controller('adduserCtrl', ['$scope', function ($scope) {
          $scope.$parent.title = "Add User";
          $scope.$parent.img = "img/iconset-addictive-flavour-set/png/user_add.png";
          $scope.$parent.showTopToggle = false;
      }])

       .controller('change_passwordCtrl', ['$scope', function ($scope) {
          $scope.$parent.title = "Change Password";
          $scope.$parent.img = "img/iconset-addictive-flavour-set/png/moleskine_black.png";
          $scope.$parent.showTopToggle = false;
      }])

       .controller('update_userCtrl', ['$scope', function ($scope) {
          $scope.$parent.title = "Update User";
          $scope.$parent.img = "img/iconset-addictive-flavour-set/png/moleskine_red.png";
          $scope.$parent.showTopToggle = false;
      }])

       .controller('list_of_studentCtrl', ['$scope', function ($scope) {
          $scope.$parent.title = "List of student";
          $scope.$parent.img = "img/iconset-addictive-flavour-set/png/moleskine_red.png";
          $scope.$parent.showTopToggle = false;
      }])

       .controller('general_class_listCtrl', ['$scope', function ($scope) {
          $scope.$parent.title = "Generate General Class List";
          $scope.$parent.img = "img/iconset-addictive-flavour-set/png/document-plaid-pen.png";
          $scope.$parent.showTopToggle = false;
      }])

       .controller('list_per_classCtrl', ['$scope', function ($scope) {
          $scope.$parent.title = "Generate List Per Class";
          $scope.$parent.img = "img/iconset-addictive-flavour-set/png/document_pen.png";
          $scope.$parent.showTopToggle = false;
      }])

        .controller('gen_listCtrl', ['$scope', function ($scope) {
          $scope.$parent.title = "Generate General List";
          $scope.$parent.img = "img/iconset-addictive-flavour-set/png/document_pen.png";
          $scope.$parent.showTopToggle = false;
      }])

        .controller('subject_classCtrl', ['$scope', function ($scope) {
          $scope.$parent.title = "Add subject To class";
          $scope.$parent.img = "img/iconset-addictive-flavour-set/png/document_pen.png";
          $scope.$parent.showTopToggle = false;
      }])

      .controller('exam_time_tableCtrl', ['$scope', function ($scope) {
          $scope.$parent.title = "Add Exam Time Table";
          $scope.$parent.img = "img/iconset-addictive-flavour-set/png/document_pen.png";
          $scope.$parent.showTopToggle = false;
      }]) 

      .controller('add_exam_markCtrl', ['$scope', function ($scope) {
          $scope.$parent.title = "Add Exam Mark";
          $scope.$parent.img = "img/iconset-addictive-flavour-set/png/document_pen.png";
          $scope.$parent.showTopToggle = false;
      }])  
 

    .controller('AppCtrl', ['$scope', '$location', function ($scope, $location) {
        $scope.isActive = function (viewLocation) {
            return viewLocation === $location.path();
        };

        $scope.title = "Maverix Theme";
        $scope.subNav1 = 0;
        $scope.img = "img/iconset-addictive-flavour-set/png/screen_aqua_glossy.png";
        $scope.showTopToggle = false;
    }]);
