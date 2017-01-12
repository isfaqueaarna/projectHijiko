var app = angular.module('hijiko', ['toastr','ngFileUpload']);

var gLat = '20.268455824834792', gLong= '85.84099235520011';
/*
      app.config(function (ngIntlTelInputProvider) {
        ngIntlTelInputProvider.set({defaultCountry: 'us'});
      });*/

//**************** Angular Toast directive ******************//
app.config(function(toastrConfig) {
  angular.extend(toastrConfig, {
    allowHtml: true,
    closeButton: true,
    closeHtml: '<button>&times;</button>',
    extendedTimeOut: 1000,
    iconClasses: {
      error: 'toast-error',
      info: 'toast-info',
      success: 'toast-success',
      warning: 'toast-warning'
    },  
    messageClass: 'toast-message',
    onHidden: null,
    onShown: null,
    onTap: null,
    progressBar: false,
    tapToDismiss: true,
    templates: {
      toast: 'directives/toast/toast.html',
      progressbar: 'directives/progressbar/progressbar.html'
    },
    timeOut: 1000,
    titleClass: 'toast-title',
    toastClass: 'toast'
  });
});


//******************** For Google Place ***************************//

app.directive('googleplace', function() {
    return {
        require: 'ngModel',
        link: function(scope, element, attrs, model) {
            var options = {
                types: []
                //componentRestrictions: {country: 'in'}
            };
            scope.gPlace = new google.maps.places.Autocomplete(element[0], options);

            google.maps.event.addListener(scope.gPlace, 'place_changed', function() {

                var place = scope.gPlace.getPlace();

                gLat = place.geometry.location.lat();
                gLong = place.geometry.location.lng();

                scope.$apply(function() {
                    model.$setViewValue(element.val());                
                });
            });
        }
    };
});

//************************ Signup Controller *********************//
app.controller('homeCtrl', function($scope, $http, toastr) {

  $scope.submitSignup = function(){

    var data = $.param({
      userTypeId: 2,
      userTypeName: 'user',
      userEmail: $scope.userEmail,
      userFirstName: $scope.userFirstName,
      userLastName: $scope.userLastName,
      userPassword: $scope.userPassword,
      userBirthDate: $scope.userBirthDate,
      userBirthMonth: $scope.userBirthMonth,
      userBirthYear: $scope.userBirthYear,
      userSubscribe: $scope.userSubscribe
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'home/user_signup',data,config)
        .then(function(response){

            if(response.data.status == "success"){
              
              toastr.success(response.data.message, 'Success!');

              $('#signupModal').modal('hide');
              $('#loginModal').modal('show');

            }else{
              toastr.error(response.data.message, 'Warning!');
            }

        });

  }

  $scope.submitLogin = function(){

    var data = $.param({
      userTypeId: 2,
      userEmail: $scope.userEmail,
      userPassword: $scope.userPassword
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'home/user_login',data,config)
    .then(function(response){

      if(response.data.status == "success"){


        toastr.success(response.data.message,'Success!');
        window.location = main_url;

        }else{
          toastr.error(response.data.message, 'Warning!');
        }


    });

  }


  $scope.goToLogin = function(){
    $('#signupModal').modal('hide');
    $('#loginModal').modal('show');
  }

  $scope.goToSignup = function(){
    $('#loginModal').modal('hide');
    $('#signupModal').modal('show');
  }


});



//************************ Vendor Registration Controller *********************//
app.controller('registrationStep1Ctrl', function($scope, $http, toastr) {

  getAllLanguages();
  getAllCategories();
  getAllCountries();
  $scope.vendorSLanguages = [];
  $scope.vendorPCategories = [];

  $scope.gPlace;

  $scope.goToStep1Box1 = function(){
    $('#step1box1').css("display", "");
    $('#step1box2').css("display", "none");
    $('#step1box3').css("display", "none");
    $('#step1box4').css("display", "none");
    $('#step1box5').css("display", "none");
    $('#step1box6').css("display", "none");
  }

  $scope.goToStep1Box2 = function(){
    $('#step1box1').css("display", "none");
    $('#step1box2').css("display", "");
    $('#step1box3').css("display", "none");
    $('#step1box4').css("display", "none");
    $('#step1box5').css("display", "none");
    $('#step1box6').css("display", "none");
  }

  $scope.goToStep1Box3 = function(){
    $('#step1box1').css("display", "none");
    $('#step1box2').css("display", "none");
    $('#step1box3').css("display", "");
    $('#step1box4').css("display", "none");
    $('#step1box5').css("display", "none");
    $('#step1box6').css("display", "none");
  }

  $scope.goToStep1Box4 = function(){
    $('#step1box1').css("display", "none");
    $('#step1box2').css("display", "none");
    $('#step1box3').css("display", "none");
    $('#step1box4').css("display", "");
    $('#step1box5').css("display", "none");
    $('#step1box6').css("display", "none");
  }

  $scope.goToStep1Box5 = function(){
    initialize();
    $('#step1box1').css("display", "none");
    $('#step1box2').css("display", "none");
    $('#step1box3').css("display", "none");
    $('#step1box4').css("display", "none");
    $('#step1box5').css("display", "");
    $('#step1box6').css("display", "none");
  }

  $scope.goToStep1Box6 = function(){
    $('#step1box1').css("display", "none");
    $('#step1box2').css("display", "none");
    $('#step1box3').css("display", "none");
    $('#step1box4').css("display", "none");
    $('#step1box5').css("display", "none");
    $('#step1box6').css("display", "");
  }


  $scope.addSLang = function(){
    var langDuplicate = false;
    for(var j=0; j<$scope.languages.length; j++){
      if($scope.languages[j].langFName == $scope.vendorSLang){

        if($scope.vendorSLanguages.length>0){
          for(var k=0; k<$scope.vendorSLanguages.length; k++){
            if($scope.vendorSLanguages[k].langFName == $scope.vendorSLang){
              langDuplicate = true;
              break;
            }
          }
          if(langDuplicate == true){
            toastr.error('Languages Already added', 'Warning!');
          }else{
            $scope.vendorSLanguages.push({'langId': $scope.languages[j].langId, 'langFName': $scope.languages[j].langFName});
          }
        }else{
          $scope.vendorSLanguages.push({'langId': $scope.languages[j].langId, 'langFName': $scope.languages[j].langFName});
          break;
        }
      }
    }
  }


  $scope.removeSLang = function(item){
    for(var i=0; i<$scope.vendorSLanguages.length; i++){
      if($scope.vendorSLanguages[i].langFName == item.langFName){
        $scope.vendorSLanguages.splice(i, 1);
      }
    }
  }




  $scope.addPcat = function(){
    var pcatDuplicate = false;
    for(var j=0; j<$scope.categories.length; j++){
      if($scope.categories[j].pcatName == $scope.vendorPCategory){

        if($scope.vendorPCategories.length>0 && $scope.vendorPCategories.length<=4){
          for(var k=0; k<$scope.vendorPCategories.length; k++){
            if($scope.vendorPCategories[k].pcatName == $scope.vendorPCategory){
              pcatDuplicate = true;
              break;
            }
          }
          if(pcatDuplicate == true){
            toastr.error('Product Category Already added', 'Warning!');
          }else{
            $scope.vendorPCategories.push({'pcatId': $scope.categories[j].pcatId, 'pcatName': $scope.categories[j].pcatName, 'pcatImageLink': $scope.categories[j].pcatImageLink});
          }
        }else if($scope.vendorPCategories.length>4){
          toastr.error('Cannot add more than 5 categories', 'Warning!');
          break;
        }else{
          $scope.vendorPCategories.push({'pcatId': $scope.categories[j].pcatId, 'pcatName': $scope.categories[j].pcatName, 'pcatImageLink': $scope.categories[j].pcatImageLink});
          break;
        }
      }
    }
  }


  $scope.removePcat = function(item){
    for(var i=0; i<$scope.vendorPCategories.length; i++){
      if($scope.vendorPCategories[i].pcatName == item.pcatName){
        $scope.vendorPCategories.splice(i, 1);
      }
    }
  }


  $scope.goToStep1Finish = function(){
    $scope.vendorSLangAll = null;
    $scope.vendorPCatAll = null;

    for(var i=0; i<$scope.vendorSLanguages.length; i++){
      if($scope.vendorSLangAll == null){
        $scope.vendorSLangAll = $scope.vendorSLanguages[i].langId;
      }else{
        $scope.vendorSLangAll = $scope.vendorSLangAll+","+$scope.vendorSLanguages[i].langId;
      } 
    }

    for(var j=0; j<$scope.vendorPCategories.length; j++){
      if($scope.vendorPCatAll == null){
        $scope.vendorPCatAll = $scope.vendorPCategories[j].pcatId;
      }else{
        $scope.vendorPCatAll = $scope.vendorPCatAll+","+$scope.vendorPCategories[j].pcatId;
      }
    }

    var data = $.param({
      vdLocation: $scope.vendorLocationFinal,
      vdLocationLat: $scope.vendorLocationLat,
      vdLocationLong: $scope.vendorLocationLong,
      vdPLanguage: $scope.vendorPLang,
      vdSLanguages: $scope.vendorSLangAll,
      vdPCategories: $scope.vendorPCatAll,
      vdCountry: $scope.vendorCountry,
      vdState: $scope.vendorState,
      vdCity: $scope.vendorCity,
      vdStreetAddress: $scope.vendorStreetAddress,
      vdWebsite: $scope.vendorWebsite,
      vdZIPCode: $scope.vendorZipCode
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'registration/add_step1',data,config)
    .then(function(response){

      if(response.data.status == "success"){

        toastr.success(response.data.message,'Success!');
        window.location = main_url+'registration/step2';

        }else{
          toastr.error(response.data.message, 'Warning!');
        }


    });

  }



  function getAllLanguages(){

    $http.get(main_url+'registration/get_all_languages')
        .then(function(response){
          $scope.languages = response.data;
        });
  }

  function getAllCategories(){

    $http.get(main_url+'registration/get_all_categories')
        .then(function(response){
          $scope.categories = response.data;
        });
  }


  function getAllCountries(){

    $http.get(main_url+'registration/get_all_countries')
        .then(function(response){
          $scope.countries = response.data;
        });
  }






///////for drag and drop marker location in google map//////////
  var map;
  var marker;
  var geocoder = new google.maps.Geocoder();
  var infowindow = new google.maps.InfoWindow();

  function initialize(){
    var myLatlng = new google.maps.LatLng(parseFloat(gLat),parseFloat(gLong));
    var mapOptions = {
      zoom: 18,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("myMap"), mapOptions);

    marker = new google.maps.Marker({
      map: map,
      position: myLatlng,
      draggable: true 
    }); 

    // Add circle overlay and bind to marker
    var circle = new google.maps.Circle({
      map: map,
      radius: 30,  
      fillColor: '#00A69A',
      strokeColor: '#00A69A',
      strokeWeight: 2
    });
    circle.bindTo('center', marker, 'position');

    geocoder.geocode({'latLng': myLatlng }, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        if (results[0]) {
          $scope.vendorLocationFinal = results[0].formatted_address;
          $scope.vendorLocationLat = marker.getPosition().lat();
          $scope.vendorLocationLong = marker.getPosition().lng();
          infowindow.setContent(results[0].formatted_address);
          infowindow.open(map, marker);
        }
      }
    });

    google.maps.event.addListener(marker, 'dragend', function() {

      geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (results[0]) {
            $scope.vendorLocationFinal = results[0].formatted_address;
            infowindow.setContent(results[0].formatted_address);
            infowindow.open(map, marker);
          }
        }
      });
    });

  }



});


//************************ Registration Step1 edit Controller *********************//
app.controller('registrationStep1editCtrl', function($scope, $http, toastr) {

  getAllLanguages();
  getAllCategories();
  getAllCountries();

  $scope.vdSLanguages = [];
  $scope.vdPCategories = [];

  getStep1();

  $scope.goToStep1editBox1 = function(){
    $('#step1editbox1').css("display", "");
    $('#step1editbox2').css("display", "none");
    $('#step1editbox3').css("display", "none");
    $('#step1editbox4').css("display", "none");
    $('#step1editbox5').css("display", "none");
    $('#step1editbox6').css("display", "none");
  }

  $scope.goToStep1editBox2 = function(){
    $('#step1editbox1').css("display", "none");
    $('#step1editbox2').css("display", "");
    $('#step1editbox3').css("display", "none");
    $('#step1editbox4').css("display", "none");
    $('#step1editbox5').css("display", "none");
    $('#step1editbox6').css("display", "none");
  }

  $scope.goToStep1editBox3 = function(){
    $('#step1editbox1').css("display", "none");
    $('#step1editbox2').css("display", "none");
    $('#step1editbox3').css("display", "");
    $('#step1editbox4').css("display", "none");
    $('#step1editbox5').css("display", "none");
    $('#step1editbox6').css("display", "none");
  }

  $scope.goToStep1editBox4 = function(){
    $('#step1editbox1').css("display", "none");
    $('#step1editbox2').css("display", "none");
    $('#step1editbox3').css("display", "none");
    $('#step1editbox4').css("display", "");
    $('#step1editbox5').css("display", "none");
    $('#step1editbox6').css("display", "none");
  }

  $scope.goToStep1editBox5 = function(){
    initialize();
    $('#step1editbox1').css("display", "none");
    $('#step1editbox2').css("display", "none");
    $('#step1editbox3').css("display", "none");
    $('#step1editbox4').css("display", "none");
    $('#step1editbox5').css("display", "");
    $('#step1editbox6').css("display", "none");
  }

  function getStep1(){

    $http.get(main_url+'registration/get_step1')
        .then(function(response){

      $scope.editingItem =
        {
          vdId: response.data.vdId,
          vdUserId: response.data.vdUserId,
          vdLocation: response.data.vdLocation,
          vdLocationLat: response.data.vdLocationLat,
          vdLocationLong: response.data.vdLocationLong,
          vdPLanguage: response.data.vdPLanguage,
          vdSLanguages: response.data.vdSLanguages,
          vdPCategories: response.data.vdPCategories,
          vdCountry: response.data.vdCountry,
          vdState: response.data.vdState,
          vdCity: response.data.vdCity,
          vdStreetAddress: response.data.vdStreetAddress,
          vdWebsites: response.data.vdWebsites,
          vdZIPCode: parseInt(response.data.vdZIPCode),
        };

      gLat = $scope.editingItem.vdLocationLat;
      gLong = $scope.editingItem.vdLocationLong;

      $scope.arrStringLang = new Array();
      $scope.arrStringLang = $scope.editingItem.vdSLanguages.split(",");

      $scope.arrStringPCat = new Array();
      $scope.arrStringPCat = $scope.editingItem.vdPCategories.split(",");

      for(var i=0; i<$scope.arrStringLang.length; i++){
        $scope.vdSLanguages.push({'langId': $scope.languages[parseInt($scope.arrStringLang[i])-1].langId, 'langFName': $scope.languages[parseInt($scope.arrStringLang[i])-1].langFName});
      }

      for(var j=0; j<$scope.arrStringPCat.length; j++){
        $scope.vdPCategories.push({'pcatId': $scope.categories[parseInt($scope.arrStringPCat[j])-1].pcatId, 'pcatName': $scope.categories[parseInt($scope.arrStringPCat[j])-1].pcatName, 'pcatImageLink': $scope.categories[parseInt($scope.arrStringPCat[j])-1].pcatImageLink});
      }

    });
  }


  $scope.addSLang = function(){
    var langDuplicate = false;
    for(var j=0; j<$scope.languages.length; j++){
      if($scope.languages[j].langFName == $scope.vdSLang){

        if($scope.vdSLanguages.length>0){
          for(var k=0; k<$scope.vdSLanguages.length; k++){
            if($scope.vdSLanguages[k].langFName == $scope.vdSLang){
              langDuplicate = true;
              break;
            }
          }
          if(langDuplicate == true){
            toastr.error('Languages Already added', 'Warning!');
          }else{
            $scope.vdSLanguages.push({'langId': $scope.languages[j].langId, 'langFName': $scope.languages[j].langFName});
          }
        }else{
          $scope.vdSLanguages.push({'langId': $scope.languages[j].langId, 'langFName': $scope.languages[j].langFName});
          break;
        }
      }
    }
  }


  $scope.removeSLang = function(item){
    for(var i=0; i<$scope.vdSLanguages.length; i++){
      if($scope.vdSLanguages[i].langFName == item.langFName){
        $scope.vdSLanguages.splice(i, 1);
      }
    }
  }


  $scope.addPcat = function(){
    var pcatDuplicate = false;
    for(var j=0; j<$scope.categories.length; j++){
      if($scope.categories[j].pcatName == $scope.vdPCategory){

        if($scope.vdPCategories.length>0 && $scope.vdPCategories.length<=4){
          for(var k=0; k<$scope.vdPCategories.length; k++){
            if($scope.vdPCategories[k].pcatName == $scope.vdPCategory){
              pcatDuplicate = true;
              break;
            }
          }
          if(pcatDuplicate == true){
            toastr.error('Product Category Already added', 'Warning!');
          }else{
            $scope.vdPCategories.push({'pcatId': $scope.categories[j].pcatId, 'pcatName': $scope.categories[j].pcatName, 'pcatImageLink': $scope.categories[j].pcatImageLink});
          }
        }else if($scope.vdPCategories.length>4){
          toastr.error('Cannot add more than 5 categories', 'Warning!');
          break;
        }else{
          $scope.vdPCategories.push({'pcatId': $scope.categories[j].pcatId, 'pcatName': $scope.categories[j].pcatName, 'pcatImageLink': $scope.categories[j].pcatImageLink});
          break;
        }
      }
    }
  }


  $scope.removePcat = function(item){
    for(var i=0; i<$scope.vdPCategories.length; i++){
      if($scope.vdPCategories[i].pcatName == item.pcatName){
        $scope.vdPCategories.splice(i, 1);
      }
    }
  }


  $scope.goToStep1editFinish = function(){
    $scope.vdSLangAll = null;
    $scope.vdPCatAll = null;

    for(var i=0; i<$scope.vdSLanguages.length; i++){
      if($scope.vdSLangAll == null){
        $scope.vdSLangAll = $scope.vdSLanguages[i].langId;
      }else{
        $scope.vdSLangAll = $scope.vdSLangAll+","+$scope.vdSLanguages[i].langId;
      } 
    }

    for(var j=0; j<$scope.vdPCategories.length; j++){
      if($scope.vdPCatAll == null){
        $scope.vdPCatAll = $scope.vdPCategories[j].pcatId;
      }else{
        $scope.vdPCatAll = $scope.vdPCatAll+","+$scope.vdPCategories[j].pcatId;
      }
    }

    var data = $.param({
      vdUserId: $scope.editingItem.vdUserId,
      vdLocation: $scope.vdLocationFinal,
      vdLocationLat: $scope.vdLocationLat,
      vdLocationLong: $scope.vdLocationLong,
      vdPLanguage: $scope.editingItem.vdPLanguage,
      vdSLanguages: $scope.editingItem.vdSLanguages,
      vdPCategories: $scope.editingItem.vdPCategories,
      vdCountry: $scope.editingItem.vdCountry,
      vdState: $scope.editingItem.vdState,
      vdCity: $scope.editingItem.vdCity,
      vdStreetAddress: $scope.editingItem.vdStreetAddress,
      vdWebsites: $scope.editingItem.vdWebsites,
      vdZIPCode: $scope.editingItem.vdZIPCode
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }


    $http.post(main_url+'registration/update_step1',data,config)
    .then(function(response){

      if(response.data.status == "success"){

        toastr.success(response.data.message,'Success!');
        window.location = main_url+'registration/step2';

        }else{
          toastr.error(response.data.message, 'Warning!');
        }


    });

  }



  function getAllLanguages(){

    $http.get(main_url+'registration/get_all_languages')
        .then(function(response){
          $scope.languages = response.data;
        });
  }

  function getAllCategories(){

    $http.get(main_url+'registration/get_all_categories')
        .then(function(response){
          $scope.categories = response.data;
        });
  }


  function getAllCountries(){

    $http.get(main_url+'registration/get_all_countries')
        .then(function(response){
          $scope.countries = response.data;
        });
  }


///////for drag and drop marker location in google map//////////
  var map;
  var marker;
  var geocoder = new google.maps.Geocoder();
  var infowindow = new google.maps.InfoWindow();

  function initialize(){
    var myLatlng = new google.maps.LatLng(parseFloat(gLat),parseFloat(gLong));
    var mapOptions = {
      zoom: 18,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("myMapedit"), mapOptions);

    marker = new google.maps.Marker({
      map: map,
      position: myLatlng,
      draggable: true 
    }); 

    // Add circle overlay and bind to marker
    var circle = new google.maps.Circle({
      map: map,
      radius: 30,   
      fillColor: '#00A69A',
      strokeColor: '#00A69A',
      strokeWeight: 2
    });
    circle.bindTo('center', marker, 'position');

    geocoder.geocode({'latLng': myLatlng }, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        if (results[0]) {
          $scope.vdLocationFinal = results[0].formatted_address;
          $scope.vdLocationLat = marker.getPosition().lat();
          $scope.vdLocationLong = marker.getPosition().lng();
          infowindow.setContent(results[0].formatted_address);
          infowindow.open(map, marker);
        }
      }
    });

    google.maps.event.addListener(marker, 'dragend', function() {
      geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (results[0]) {
            $scope.vdLocationFinal = results[0].formatted_address;
            infowindow.setContent(results[0].formatted_address);
            infowindow.open(map, marker);
          }
        }
      });
    });

  }


});





//************************ Registration Step2 Controller *********************//
app.controller('registrationStep2Ctrl', function($scope, $http, toastr, $timeout, Upload) {

  $scope.goToStep2Box1 = function(){
    $('#step2box1').css("display", "");
    $('#step2box2').css("display", "none");
    $('#step2box3').css("display", "none");
    $('#step2box4').css("display", "none");
  }

  $scope.goToStep2Box2 = function(){
    $('#step2box1').css("display", "none");
    $('#step2box2').css("display", "");
    $('#step2box3').css("display", "none");
    $('#step2box4').css("display", "none");
  }

  $scope.goToStep2Box3 = function(){
    $('#step2box1').css("display", "none");
    $('#step2box2').css("display", "none");
    $('#step2box3').css("display", "");
    $('#step2box4').css("display", "none");
  }

  $scope.goToStep2Box3File = function(file){

    file.upload = Upload.upload({
      url: main_url+'registration/update_photoid',
      data: {
        file: file
      },
    });

    file.upload.then(function (response) {
      $timeout(function () {
        file.result = response.data;
        $scope.picFileId = null;

      $('#step2box1').css("display", "none");
      $('#step2box2').css("display", "none");
      $('#step2box3').css("display", "");
      $('#step2box4').css("display", "none");

      });
    }, function (response) {
      if (response.status > 0)
        $scope.errorMsg = response.status + ': ' + response.data;
    }, function (evt) {
      // Math.min is to fix IE which reports 200% sometimes
      file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
    });

  }


  $scope.$watch('vdEmailOTP.length', function(newValue, oldValue){
        if(newValue == 4){

          var data = $.param({
            vdEmailOTP: $scope.vdEmailOTP,
          });

          var config = {
              headers : {
                  'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
              }
          }

          $http.post(main_url+'registration/verify_email',data,config)
          .then(function(response){

            if(response.data.status == "success"){

              toastr.success(response.data.message,'Success!');

              $('#step2box3_1').css("display", "");
              $('#step2box3_2').css("display", "");
              $('#step2box3_3').css("display", "");
              $('#step2box3_4').css("display", "");

              $('#step2box3_1').css("pointer-events", "none");
              $('#step2box3_2').css("pointer-events", "none");
              $('#step2box3_1').css("opacity", "0.5");
              $('#step2box3_2').css("opacity", "0.5");

            }else{
              toastr.error(response.data.message, 'Warning!');
            }


          });
        }
    });

  $scope.goToStep2Box4 = function(){
    $('#step2box1').css("display", "none");
    $('#step2box2').css("display", "none");
    $('#step2box3').css("display", "none");
    $('#step2box4').css("display", "");
  }



  $scope.emailVerify = function(){

    var data = $.param({
      vdEmail: $scope.vdEmail,
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'registration/update_email',data,config)
    .then(function(response){

      if(response.data.status == "success"){

        toastr.success(response.data.message,'Success!');

      }else{
        toastr.error(response.data.message, 'Warning!');
      }

    });

    $('#step2box3_1').css("display", "");
    $('#step2box3_2').css("display", "");

    $('#step2box3_1').css("pointer-events", "none");
    $('#step2box3_1').css("opacity", "0.5");
  }

  $scope.changeEmail = function(){
    $('#step2box3_1').css("display", "");
    $('#step2box3_2').css("display", "none");

    $('#step2box3_1').css("pointer-events", "");
    $('#step2box3_1').css("opacity", "");
  }


  $scope.mobileVerify = function(){

    var data = $.param({
      vdMobile: $scope.vdMobile,
    });


    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'registration/update_mobile',data,config)
    .then(function(response){

      if(response.data.status == "success"){

        toastr.success(response.data.message,'Success!');

      }else{
        toastr.error(response.data.message, 'Warning!');
      }


    });

    $('#step2box4_1').css("display", "");
    $('#step2box4_2').css("display", "");

    $('#step2box4_1').css("pointer-events", "none");
    $('#step2box4_1').css("opacity", "0.5");
    
  }


  $scope.$watch('vdMobileOTP.length', function(newValue, oldValue){
      if(newValue == 4){
        
        var data = $.param({
          vdMobileOTP: $scope.vdMobileOTP,
        });

        var config = {
            headers : {
                'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
            }
        }

        $http.post(main_url+'registration/verify_mobile',data,config)
        .then(function(response){

          if(response.data.status == "success"){

            toastr.success(response.data.message,'Success!');

            $('#step2box4_1').css("display", "");
            $('#step2box4_2').css("display", "");
            $('#step2box4_4').css("display", "");
            $('#step2box4_5').css("display", "");

            $('#step2box4_1').css("pointer-events", "none");
            $('#step2box4_2').css("pointer-events", "none");
            $('#step2box4_1').css("opacity", "0.5");
            $('#step2box4_2').css("opacity", "0.5");

          }else{
            toastr.error(response.data.message, 'Warning!');
          }


        });
      }
  });


  $scope.$watch('vdMobileOTP2.length', function(newValue, oldValue){
      if(newValue == 4){
        
        var data = $.param({
          vdMobileOTP: $scope.vdMobileOTP2,
        });

        var config = {
            headers : {
                'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
            }
        }

        $http.post(main_url+'registration/verify_mobile',data,config)
        .then(function(response){

          if(response.data.status == "success"){

            toastr.success(response.data.message,'Success!');

            $('#step2box4_1').css("display", "");
            $('#step2box4_2').css("display", "none");
            $('#step2box4_4').css("display", "");
            $('#step2box4_5').css("display", "");

            $('#step2box4_1').css("pointer-events", "none");
            $('#step2box4_3').css("pointer-events", "none");
            $('#step2box4_1').css("opacity", "0.5");
            $('#step2box4_3').css("opacity", "0.5");

          }else{
            toastr.error(response.data.message, 'Warning!');
          }


        });
      }
  });


  $scope.callmeInstead = function(){

    $('#step2box4_1').css("display", "");
    $('#step2box4_2').css("display", "none");
    $('#step2box4_3').css("display", "");

    $('#step2box4_1').css("pointer-events", "none");
    $('#step2box4_1').css("opacity", "0.5");

  }

  $scope.textmeInstead = function(){

    $('#step2box4_1').css("display", "");
    $('#step2box4_2').css("display", "");
    $('#step2box4_3').css("display", "none");

    $('#step2box4_1').css("pointer-events", "none");
    $('#step2box4_1').css("opacity", "0.5");

  }

  $scope.goToStep2Finish = function(){

    var data = $.param({
      userVendorStep: 'step2',
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'registration/add_step2',data,config)
    .then(function(response){

      if(response.data.status == "success"){

        toastr.success(response.data.message,'Success!');
        window.location = main_url+'registration/step3';

        }else{
          toastr.error(response.data.message, 'Warning!');
        }


    });

  }


});



//************************ Registration Step2 Controller *********************//
app.controller('registrationStep2editCtrl', function($scope, $http, toastr, $timeout, Upload) {

  getStep2();

  $scope.goToStep2Box1 = function(){
    $('#step2editbox1').css("display", "");
    $('#step2editbox2').css("display", "none");
    $('#step2editbox3').css("display", "none");
    $('#step2editbox4').css("display", "none");
  }

  $scope.goToStep2Box2 = function(){
    $('#step2editbox1').css("display", "none");
    $('#step2editbox2').css("display", "");
    $('#step2editbox3').css("display", "none");
    $('#step2editbox4').css("display", "none");
  }

  $scope.goToStep2Box3 = function(){
    $('#step2editbox1').css("display", "none");
    $('#step2editbox2').css("display", "none");
    $('#step2editbox3').css("display", "");
    $('#step2editbox4').css("display", "none");
  }

  function getStep2(){

    $http.get(main_url+'registration/get_step1')
        .then(function(response){

      $scope.editingItem =
        {
          vdId: response.data.vdId,
          vdUserId: response.data.vdUserId,
          vdPhotoIdImage: response.data.vdPhotoIdImage,
          vdPhotoIdImageLink: response.data.vdPhotoIdImageLink,
          vdEmail: response.data.vdEmail,
          vdMobile: response.data.vdMobile
        };

      $scope.picPhotoId = $scope.editingItem.vdPhotoIdImageLink;

    });
  }

  $scope.goToStep2Box3File = function(file){

    if(file == null || file == ""){
      $('#step2editbox1').css("display", "none");
      $('#step2editbox2').css("display", "none");
      $('#step2editbox3').css("display", "");
      $('#step2editbox4').css("display", "none");
    }else{


      file.upload = Upload.upload({
        url: main_url+'registration/update_photoid',
        data: {
          file: file
        },
      });

      file.upload.then(function (response) {
        $timeout(function () {
          file.result = response.data;
          $scope.picPhotoId = null;

        $('#step2editbox1').css("display", "none");
        $('#step2editbox2').css("display", "none");
        $('#step2editbox3').css("display", "");
        $('#step2editbox4').css("display", "none");

        });
      }, function (response) {
        if (response.status > 0)
          $scope.errorMsg = response.status + ': ' + response.data;
      }, function (evt) {
        // Math.min is to fix IE which reports 200% sometimes
        file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
      });




    }

  }


  $scope.$watch('vdEmailOTP.length', function(newValue, oldValue){
        if(newValue == 4){

          var data = $.param({
            vdEmailOTP: $scope.vdEmailOTP,
          });

          var config = {
              headers : {
                  'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
              }
          }

          $http.post(main_url+'registration/verify_email',data,config)
          .then(function(response){

            if(response.data.status == "success"){

              toastr.success(response.data.message,'Success!');

              $('#step2editbox3_1').css("display", "");
              $('#step2editbox3_2').css("display", "");
              $('#step2editbox3_3').css("display", "");
              $('#step2editbox3_4').css("display", "");

              $('#step2editbox3_1').css("pointer-events", "none");
              $('#step2editbox3_2').css("pointer-events", "none");
              $('#step2editbox3_1').css("opacity", "0.5");
              $('#step2editbox3_2').css("opacity", "0.5");

            }else{
              toastr.error(response.data.message, 'Warning!');
            }


          });
        }
    });

  $scope.goToStep2Box4 = function(){
    $('#step2editbox1').css("display", "none");
    $('#step2editbox2').css("display", "none");
    $('#step2editbox3').css("display", "none");
    $('#step2editbox4').css("display", "");
  }



  $scope.emailVerify = function(){

    var data = $.param({
      vdEmail: $scope.vdEmail,
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'registration/update_email',data,config)
    .then(function(response){

      if(response.data.status == "success"){

        toastr.success(response.data.message,'Success!');

      }else{
        toastr.error(response.data.message, 'Warning!');
      }

    });

    $('#step2editbox3_1').css("display", "");
    $('#step2editbox3_2').css("display", "");

    $('#step2editbox3_1').css("pointer-events", "none");
    $('#step2editbox3_1').css("opacity", "0.5");
  }

  $scope.changeEmail = function(){
    $('#step2editbox3_1').css("display", "");
    $('#step2editbox3_2').css("display", "none");

    $('#step2editbox3_1').css("pointer-events", "");
    $('#step2editbox3_1').css("opacity", "");
  }


  $scope.mobileVerify = function(){

    var data = $.param({
      vdMobile: $scope.vdMobile,
    });


    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'registration/update_mobile',data,config)
    .then(function(response){

      if(response.data.status == "success"){

        toastr.success(response.data.message,'Success!');

      }else{
        toastr.error(response.data.message, 'Warning!');
      }


    });

    $('#step2editbox4_1').css("display", "");
    $('#step2editbox4_2').css("display", "");

    $('#step2editbox4_1').css("pointer-events", "none");
    $('#step2editbox4_1').css("opacity", "0.5");
    
  }


  $scope.$watch('vdMobileOTP.length', function(newValue, oldValue){
      if(newValue == 4){
        
        var data = $.param({
          vdMobileOTP: $scope.vdMobileOTP,
        });

        var config = {
            headers : {
                'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
            }
        }

        $http.post(main_url+'registration/verify_mobile',data,config)
        .then(function(response){

          if(response.data.status == "success"){

            toastr.success(response.data.message,'Success!');

            $('#step2editbox4_1').css("display", "");
            $('#step2editbox4_2').css("display", "");
            $('#step2editbox4_4').css("display", "");
            $('#step2editbox4_5').css("display", "");

            $('#step2editbox4_1').css("pointer-events", "none");
            $('#step2editbox4_2').css("pointer-events", "none");
            $('#step2editbox4_1').css("opacity", "0.5");
            $('#step2editbox4_2').css("opacity", "0.5");

          }else{
            toastr.error(response.data.message, 'Warning!');
          }


        });
      }
  });


  $scope.$watch('vdMobileOTP2.length', function(newValue, oldValue){
      if(newValue == 4){
        
        var data = $.param({
          vdMobileOTP: $scope.vdMobileOTP2,
        });

        var config = {
            headers : {
                'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
            }
        }

        $http.post(main_url+'registration/verify_mobile',data,config)
        .then(function(response){

          if(response.data.status == "success"){

            toastr.success(response.data.message,'Success!');

            $('#step2editbox4_1').css("display", "");
            $('#step2editbox4_2').css("display", "none");
            $('#step2editbox4_4').css("display", "");
            $('#step2editbox4_5').css("display", "");

            $('#step2editbox4_1').css("pointer-events", "none");
            $('#step2editbox4_3').css("pointer-events", "none");
            $('#step2editbox4_1').css("opacity", "0.5");
            $('#step2editbox4_3').css("opacity", "0.5");

          }else{
            toastr.error(response.data.message, 'Warning!');
          }


        });
      }
  });


  $scope.callmeInstead = function(){

    $('#step2editbox4_1').css("display", "");
    $('#step2editbox4_2').css("display", "none");
    $('#step2editbox4_3').css("display", "");

    $('#step2editbox4_1').css("pointer-events", "none");
    $('#step2editbox4_1').css("opacity", "0.5");

  }

  $scope.textmeInstead = function(){

    $('#step2editbox4_1').css("display", "");
    $('#step2editbox4_2').css("display", "");
    $('#step2editbox4_3').css("display", "none");

    $('#step2editbox4_1').css("pointer-events", "none");
    $('#step2editbox4_1').css("opacity", "0.5");

  }

  $scope.goToStep2Finish = function(){

    var data = $.param({
      userVendorStep: 'step2',
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'registration/add_step2',data,config)
    .then(function(response){

      if(response.data.status == "success"){

        toastr.success(response.data.message,'Success!');
        window.location = main_url+'registration/step3';

        }else{
          toastr.error(response.data.message, 'Warning!');
        }


    });

  }


});



//************************ Registration Step3 Controller *********************//
app.controller('registrationStep3Ctrl', function($scope, $http, toastr, $timeout, Upload) {



  $scope.goToStep3Box1 = function(){
    $('#step3box1').css("display", "");
    $('#step3box2').css("display", "none");
    $('#step3box3').css("display", "none");
    $('#step3box4').css("display", "none");
    $('#step3box5').css("display", "none");
  }

  $scope.goToStep3Box2 = function(){
    $('#step3box1').css("display", "none");
    $('#step3box2').css("display", "");
    $('#step3box3').css("display", "none");
    $('#step3box4').css("display", "none");
    $('#step3box5').css("display", "none");
  }

  $scope.goToStep3Box3 = function(file){

    file.upload = Upload.upload({
      url: main_url+'registration/update_profilephoto',
      data: {
        file: file
      },
    });

    file.upload.then(function (response) {
      $timeout(function () {
        file.result = response.data;
        $scope.picFileId = null;

      $('#step3box1').css("display", "none");
      $('#step3box2').css("display", "none");
      $('#step3box3').css("display", "");
      $('#step3box4').css("display", "none");
      $('#step3box5').css("display", "none");

      });
    }, function (response) {
      if (response.status > 0)
        $scope.errorMsg = response.status + ': ' + response.data;
    }, function (evt) {
      // Math.min is to fix IE which reports 200% sometimes
      file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
    });

  }

  $scope.goToStep3Box4 = function(){

    var data = $.param({
      vdAboutYourself: $scope.vdAboutYourself,
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'registration/update_aboutyourself',data,config)
    .then(function(response){

      if(response.data.status == "success"){

        toastr.success(response.data.message,'Success!');

        $('#step3box1').css("display", "none");
        $('#step3box2').css("display", "none");
        $('#step3box3').css("display", "none");
        $('#step3box4').css("display", "");
        $('#step3box5').css("display", "none");

      }else{
        toastr.error(response.data.message, 'Warning!');
      }

      });

  }


  $scope.goToStep3Finish = function(){

    var data = $.param({
      userVendorStep: 'submitted',
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'registration/add_step3',data,config)
    .then(function(response){

      if(response.data.status == "success"){

        toastr.success(response.data.message,'Success!');
        window.location = main_url+'registration/pending';

        }else{
          toastr.error(response.data.message, 'Warning!');
        }


    });

  }


});



//************************ Registration Step3 Controller *********************//
app.controller('registrationPendingCtrl', function($scope, $http, toastr, $timeout, Upload) {


  $scope.goToHome = function(){
    window.location = main_url;
  }


});

