/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define(["container","config"],

  function(container,config){
   var jkula = angular.module('jkula',
            ['ngRoute']);
            jkula.config(config);  
            jkula.controller('contactCtrl', function(){
               });
          
           jkula.controller('homePageCtrl',function(){
                     var hom = this;
                     hom.name ="J_kula";
                 });
           jkula.controller('aboutMeCtrl',function(){
                     var abt = this;
                    abt.hist ='hist';
                 });
            jkula.directive('wrapper',container);
                   
                      
            
});
        

