'use strict';

angular.module('Client')

.controller('IndexNoteCtrl', function () {

})

.controller('CreateNoteCtrl', function ($scope, NoteResource) {

  $scope.title = "Create Note";
  $scope.button = "Save";

  $scope.note = {};

  $scope.saveNote = function () {
    console.log($scope.note);
    NoteResource.save($scope.note);
  }


});
