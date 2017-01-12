var app = angular.module('hijikoadmin', ['toastr', 'angularUtils.directives.dirPagination', 'ngFileUpload']);

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


//************************ Signup Controller *********************//
app.controller('signupCtrl', function($scope, $http, toastr) {

  $scope.submitSignup = function(){

    if($scope.userPassword == $scope.userPasswordC){

      var data = $.param({
        userTypeId: 1,
        userTypeName: 'admin',
        userFullName: $scope.userFullName,
        userEmail: $scope.userEmail,
        userPassword: $scope.userPassword
      });

      var config = {
          headers : {
              'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
          }
      }

      $http.post(main_url+'signup/user_signup',data,config)
          .then(function(response){

              if(response.data.status == "success"){
                
                toastr.success(response.data.message, 'Success!');
                window.location = main_url+"login";

              }else{
                toastr.error(response.data.message, 'Warning!');
              }

          });


    }else{

      toastr.error("Password doesn't Match", 'Warning!');
      
    }


  };

});





//************************ Login Controller *********************//
app.controller('loginCtrl', function($scope, $http, toastr) {

  $scope.submitLogin = function(){

    var data = $.param({
      userTypeId: 1,
      userEmail: $scope.userEmail,
      userPassword: $scope.userPassword
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'login/user_login',data,config)
    .then(function(response){

      if(response.data.status == "success"){


        toastr.success(response.data.message,'Success!');
        window.location = main_url;

        }else{
          toastr.error('Email or Password is wrong', 'Warning!');
        }


    });

  }

});


//************************ Language Controller *********************//
app.controller('languagesCtrl', function($scope, $http, toastr) {

  $scope.dataloading = true;

  getAllLanguages();

  $scope.sort = function(keyname){
    $scope.sortKey = keyname; 
    $scope.reverse = !$scope.reverse; 
  }

  $scope.whatClassIsIt= function(someValue){
    if(someValue=="active"){
      return "label label-success";
    }else{
      return "label label-danger";
    }
  };

  $scope.refreshTable = function(){
    getAllLanguages();
    toastr.success("Table Refreshed",'Success!');
  }

  $scope.addLanguage = function(){

    var data = $.param({
      mnlangSName: $scope.mnlangSName,
      mnlangFName: $scope.mnlangFName
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'languages/add_language',data,config)
    .then(function(response){

      if(response.data.status == "success"){


        toastr.success(response.data.message,'Success!');
        $('.modal-add-language').modal('hide');
        getAllLanguages();

        }else{
          toastr.error(response.data.message, 'Warning!');
        }

    });

  }


  $scope.updateLanguage = function(){

    var data = $.param({
      mnlangId: $scope.editingItem.mnlangId,
      mnlangSName: $scope.editingItem.mnlangSName,
      mnlangFName: $scope.editingItem.mnlangFName
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'languages/update_language',data,config)
    .then(function(response){

      if(response.data.status == "success"){


        toastr.success(response.data.message,'Success!');
        $('.modal-update-language').modal('hide');
        getAllLanguages();

        }else{
          toastr.error(response.data.message, 'Warning!');
        }


    });

  }


  $scope.changeStatus = function(item){

    if(item.mnlangStatus == "active"){
      $scope.changeStatusName = "deactive";
    }else{
      $scope.changeStatusName = "active";
    }

    var data = $.param({
      mnlangId: item.mnlangId,
      mnlangStatus: $scope.changeStatusName
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'languages/change_status',data,config)
    .then(function(response){

      if(response.data.status == "success"){
        toastr.success(response.data.message,'Success!');
        getAllLanguages();
      }else{
        toastr.error(response.data.message, 'Warning!');
      }


    });

  }

  $scope.editRow = function(item){

    $scope.editingItem =
      {
        mnlangId: item.mnlangId,
        mnlangSName: item.mnlangSName,
        mnlangFName: item.mnlangFName
      };

  };

  function getAllLanguages(){

    $http.get(main_url+'languages/get_all_languages')
        .then(function(response){

          $scope.languages = response.data;
          $scope.dataloading = false;

        });
  }

});



//************************ Currency Controller *********************//
app.controller('currenciesCtrl', function($scope, $http, toastr) {

  $scope.dataloading = true;

  getAllCurrencies();

  $scope.sort = function(keyname){
    $scope.sortKey = keyname;  
    $scope.reverse = !$scope.reverse; 
  }

  $scope.whatClassIsIt= function(someValue){
    if(someValue=="active"){
      return "label label-success";
    }else{
      return "label label-danger";
    }
  };

  $scope.refreshTable = function(){
    getAllCurrencies();
    toastr.success("Table Refreshed",'Success!');
  }

  $scope.addCurrency = function(){

    var data = $.param({
      mncuSName: $scope.mncuSName,
      mncuFName: $scope.mncuFName,
      mncuRate: $scope.mncuRate
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'currencies/add_currency',data,config)
    .then(function(response){

      if(response.data.status == "success"){


        toastr.success(response.data.message,'Success!');
        $('.modal-add-currency').modal('hide');
        getAllCurrencies();

        }else{
          toastr.error(response.data.message, 'Warning!');
        }

    });

  }


  $scope.updateCurrency = function(){

    var data = $.param({
      mncuId: $scope.editingItem.mncuId,
      mncuSName: $scope.editingItem.mncuSName,
      mncuFName: $scope.editingItem.mncuFName,
      mncuRate: $scope.editingItem.mncuRate
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'currencies/update_currency',data,config)
    .then(function(response){

      if(response.data.status == "success"){


        toastr.success(response.data.message,'Success!');
        $('.modal-update-currency').modal('hide');
        getAllCurrencies();

        }else{
          toastr.error(response.data.message, 'Warning!');
        }
    });
  }


  $scope.changeStatus = function(item){

    if(item.mncuStatus == "active"){
      $scope.changeStatusName = "deactive";
    }else{
      $scope.changeStatusName = "active";
    }

    var data = $.param({
      mncuId: item.mncuId,
      mncuStatus: $scope.changeStatusName
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'currencies/change_status',data,config)
    .then(function(response){

      if(response.data.status == "success"){
        toastr.success(response.data.message,'Success!');
        getAllCurrencies();
      }else{
        toastr.error(response.data.message, 'Warning!');
      }


    });

  }

  $scope.editRow = function(item){

    $scope.editingItem =
      {
        mncuId: item.mncuId,
        mncuSName: item.mncuSName,
        mncuFName: item.mncuFName,
        mncuRate: parseFloat(item.mncuRate)
      };

  };

  function getAllCurrencies(){

    $http.get(main_url+'currencies/get_all_currencies')
        .then(function(response){

          $scope.currencies = response.data;
          $scope.dataloading = false;

        });
  }

});



//************************ Location Controller *********************//
app.controller('locationsCtrl', function($scope, $http, toastr) {

  $scope.dataloading = true;

  getAllCountries();

  $scope.sort = function(keyname){
    $scope.sortKey = keyname; 
    $scope.reverse = !$scope.reverse; 
  }

  $scope.whatClassIsIt= function(someValue){
    if(someValue=="active"){
      return "label label-success";
    }else{
      return "label label-danger";
    }
  };

  $scope.refreshTable = function(){
    getAllCountries();
    toastr.success("Table Refreshed",'Success!');
  }

  $scope.addCountry = function(){

    var data = $.param({
      mncoSName: $scope.mncoSName,
      mncoFName: $scope.mncoFName
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'locations/add_country',data,config)
    .then(function(response){

      if(response.data.status == "success"){


        toastr.success(response.data.message,'Success!');
        $('.modal-add-country').modal('hide');
        getAllCountries();

        }else{
          toastr.error(response.data.message, 'Warning!');
        }

    });

  }


  $scope.updateCountry = function(){

    var data = $.param({
      mncoId: $scope.editingItem.mncoId,
      mncoSName: $scope.editingItem.mncoSName,
      mncoFName: $scope.editingItem.mncoFName
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'locations/update_country',data,config)
    .then(function(response){

      if(response.data.status == "success"){


        toastr.success(response.data.message,'Success!');
        $('.modal-update-country').modal('hide');
        getAllCountries();

        }else{
          toastr.error(response.data.message, 'Warning!');
        }


    });

  }


  $scope.changeStatus = function(item){

    if(item.mncoStatus == "active"){
      $scope.changeStatusName = "deactive";
    }else{
      $scope.changeStatusName = "active";
    }

    var data = $.param({
      mncoId: item.mncoId,
      mncoStatus: $scope.changeStatusName
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'locations/change_status',data,config)
    .then(function(response){

      if(response.data.status == "success"){
        toastr.success(response.data.message,'Success!');
        getAllCountries();
      }else{
        toastr.error(response.data.message, 'Warning!');
      }


    });

  }

  $scope.editRow = function(item){

    $scope.editingItem =
      {
        mncoId: item.mncoId,
        mncoSName: item.mncoSName,
        mncoFName: item.mncoFName
      };

  };

  function getAllCountries(){

    $http.get(main_url+'locations/get_all_countries')
        .then(function(response){

          $scope.countries = response.data;
          $scope.dataloading = false;

        });
  }

});


//************************ Commission Controller *********************//
app.controller('commissionCtrl', function($scope, $http, toastr) {

  getHijikoCommission();

  function getHijikoCommission(){

    $http.get(main_url+'commission/get_hijiko_commission')
        .then(function(response){

          $scope.commission = response.data;

          $scope.comId = $scope.commission.comId;
          $scope.comName = $scope.commission.comName;
          $scope.comPercentage = parseInt($scope.commission.comPercentage);
          $scope.comDescription = $scope.commission.comDescription;

        });
  }

  $scope.updateCommission = function(){

    var data = $.param({
      comId: $scope.comId,
      comName: $scope.comName,
      comPercentage: $scope.comPercentage,
      comDescription: $scope.comDescription
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'commission/update_commission',data,config)
    .then(function(response){

      if(response.data.status == "success"){

        toastr.success(response.data.message,'Success!');
        $('.modal-update-hijiko-commission').modal('hide');
        getHijikoCommission();

        }else{
          toastr.error(response.data.message, 'Warning!');
        }


    });

  }


});



//************************ Coupons Controller *********************//
app.controller('couponsCtrl', function($scope, $http, toastr) {

  $scope.dataloading = true;

  $('#coupEndDate').datepicker({
    autoclose: true,
    startDate: "-0d"
  });

  $('#coupEndDate2').datepicker({
    autoclose: true,
    startDate: "-0d"
  });
/*
  $(".timepicker").timepicker({
    showInputs: false
  });*/

  getAllCoupons();

  $scope.whatClassIsIt= function(someValue){
    if(someValue=="active"){
      return "label label-success";
    }else{
      return "label label-danger";
    }
  };

  $scope.refreshTable = function(){
    getAllCoupons();
    toastr.success("Table Refreshed",'Success!');
  }

  $scope.addCoupon = function(){
    if($("#coupEndDate").val()==""){
      toastr.error('Please Enter Coupon End Date', 'Warning!');
    }else{

      var data = $.param({
        coupName: $scope.coupName,
        coupCode: $scope.coupCode,
        coupDiscount: $scope.coupDiscount,
        coupEndDate: $("#coupEndDate").val(),
        coupEndTime: $("#coupEndTime").val(),
      });

      var config = {
          headers : {
              'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
          }
      }

      $http.post(main_url+'coupons/add_coupon',data,config)
      .then(function(response){

        if(response.data.status == "success"){


          toastr.success(response.data.message,'Success!');
          $('.modal-add-coupon').modal('hide');
          getAllCoupons();

          }else{
            toastr.error(response.data.message, 'Warning!');
          }

      });

    }
  }


  $scope.updateCoupon = function(){

    if($("#coupEndDate2").val()==""){
      toastr.error('Please Enter Coupon End Date', 'Warning!');
    }else if($("#coupEndTime2").val()==""){
      toastr.error('Please Enter Coupon End Time', 'Warning!');
    }else{
      var data = $.param({
        coupId: $scope.editingItem.coupId,
        coupName: $scope.editingItem.coupName,
        coupCode: $scope.editingItem.coupCode,
        coupDiscount: $scope.editingItem.coupDiscount,
        coupEndDate: $("#coupEndDate2").val(),
        coupEndTime: $("#coupEndTime2").val()
      });

      var config = {
          headers : {
              'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
          }
      }

      $http.post(main_url+'coupons/update_coupon',data,config)
      .then(function(response){

        if(response.data.status == "success"){


          toastr.success(response.data.message,'Success!');
          $('.modal-update-coupon').modal('hide');
          getAllCoupons();

          }else{
            toastr.error(response.data.message, 'Warning!');
          }
      });

    }


  }

  $scope.editRow = function(item){

     document.getElementById('coupEndTime2').value=item.coupEndTime;

    $scope.editingItem =
      {
        coupId: item.coupId,
        coupName: item.coupName,
        coupCode: item.coupCode,
        coupDiscount: parseInt(item.coupDiscount),
        coupEndDate: item.coupEndDate,
        coupEndTime: item.coupEndTime
      };

  };

  $scope.changeStatus = function(item){

    if(item.coupStatus == "active"){
      $scope.changeStatusName = "deactive";
    }else{
      $scope.changeStatusName = "active";
    }

    var data = $.param({
      coupId: item.coupId,
      coupStatus: $scope.changeStatusName
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'coupons/change_status',data,config)
    .then(function(response){

      if(response.data.status == "success"){
        toastr.success(response.data.message,'Success!');
        getAllCoupons();
      }else{
        toastr.error(response.data.message, 'Warning!');
      }


    });

  }

  function getAllCoupons(){

    $http.get(main_url+'coupons/get_all_coupons')
        .then(function(response){

          $scope.coupons = response.data;
          $scope.dataloading = false;

        });
  }

});




//************************ Frontpage Controller *********************//
app.controller('frontpageCtrl', function($scope, $http, toastr, $timeout, Upload) {

  getAllWebContents();

  $scope.uploadPicSIOne = function(file) {
      file.upload = Upload.upload({
        url: main_url+'frontpage/update_slider_image',
        data: {
          webcId: $scope.siOneId,
          webcName: $scope.siOneName, 
          file: file
        },
      });

      file.upload.then(function (response) {
        $timeout(function () {
          file.result = response.data;
          $scope.picFileSI1 = null;
          toastr.success('Slider Image 1 Updated Successfully','Success!');
          getAllWebContents();
        });
      }, function (response) {
        if (response.status > 0)
          $scope.errorMsg = response.status + ': ' + response.data;
      }, function (evt) {
        // Math.min is to fix IE which reports 200% sometimes
        file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
      });
  }


  $scope.uploadPicSITwo = function(file) {
      file.upload = Upload.upload({
        url: main_url+'frontpage/update_slider_image',
        data: {
          webcId: $scope.siTwoId,
          webcName: $scope.siTwoName, 
          file: file
        },
      });

      file.upload.then(function (response) {
        $timeout(function () {
          file.result = response.data;
          $scope.picFileSI2 = null;
          toastr.success('Slider Image 2 Updated Successfully','Success!');
          getAllWebContents();
        });
      }, function (response) {
        if (response.status > 0)
          $scope.errorMsg = response.status + ': ' + response.data;
      }, function (evt) {
        // Math.min is to fix IE which reports 200% sometimes
        file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
      });
  }


  $scope.uploadPicSIThree = function(file) {
      file.upload = Upload.upload({
        url: main_url+'frontpage/update_slider_image',
        data: {
          webcId: $scope.siThreeId,
          webcName: $scope.siThreeName, 
          file: file
        },
      });

      file.upload.then(function (response) {
        $timeout(function () {
          file.result = response.data;
          $scope.picFileSI3 = null;
          toastr.success('Slider Image 3 Updated Successfully','Success!');
          getAllWebContents();
        });
      }, function (response) {
        if (response.status > 0)
          $scope.errorMsg = response.status + ': ' + response.data;
      }, function (evt) {
        // Math.min is to fix IE which reports 200% sometimes
        file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
      });
  }


  $scope.uploadPicTIOne = function(file) {
      file.upload = Upload.upload({
        url: main_url+'frontpage/update_slider_image',
        data: {
          webcId: $scope.tiOneId,
          webcName: $scope.tiOneName, 
          file: file
        },
      });

      file.upload.then(function (response) {
        $timeout(function () {
          file.result = response.data;
          $scope.picFileTI1 = null;
          toastr.success('Top Image 1 Updated Successfully','Success!');
          getAllWebContents();
        });
      }, function (response) {
        if (response.status > 0)
          $scope.errorMsg = response.status + ': ' + response.data;
      }, function (evt) {
        // Math.min is to fix IE which reports 200% sometimes
        file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
      });
  }


  $scope.uploadPicTITwo = function(file) {
      file.upload = Upload.upload({
        url: main_url+'frontpage/update_slider_image',
        data: {
          webcId: $scope.tiTwoId,
          webcName: $scope.tiTwoName, 
          file: file
        },
      });

      file.upload.then(function (response) {
        $timeout(function () {
          file.result = response.data;
          $scope.picFileTI2 = null;
          toastr.success('Top Image 2 Updated Successfully','Success!');
          getAllWebContents();
        });
      }, function (response) {
        if (response.status > 0)
          $scope.errorMsg = response.status + ': ' + response.data;
      }, function (evt) {
        // Math.min is to fix IE which reports 200% sometimes
        file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
      });
  }


  $scope.uploadPicTIThree = function(file) {
      file.upload = Upload.upload({
        url: main_url+'frontpage/update_slider_image',
        data: {
          webcId: $scope.tiThreeId,
          webcName: $scope.tiThreeName, 
          file: file
        },
      });

      file.upload.then(function (response) {
        $timeout(function () {
          file.result = response.data;
          $scope.picFileTI3 = null;
          toastr.success('Top Image 3 Updated Successfully','Success!');
          getAllWebContents();
        });
      }, function (response) {
        if (response.status > 0)
          $scope.errorMsg = response.status + ': ' + response.data;
      }, function (evt) {
        // Math.min is to fix IE which reports 200% sometimes
        file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
      });
  }


  $scope.uploadPicTIFour = function(file) {
      file.upload = Upload.upload({
        url: main_url+'frontpage/update_slider_image',
        data: {
          webcId: $scope.tiFourId,
          webcName: $scope.tiFourName, 
          file: file
        },
      });

      file.upload.then(function (response) {
        $timeout(function () {
          file.result = response.data;
          $scope.picFileTI4 = null;
          toastr.success('Top Image 4 Updated Successfully','Success!');
          getAllWebContents();
        });
      }, function (response) {
        if (response.status > 0)
          $scope.errorMsg = response.status + ': ' + response.data;
      }, function (evt) {
        // Math.min is to fix IE which reports 200% sometimes
        file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
      });
  }

  function getAllWebContents(){

    $http.get(main_url+'frontpage/get_all_web_contents')
        .then(function(response){

          $scope.webcontents = response.data;
          
          $scope.siOneName = $scope.webcontents[0].webcName;
          $scope.siOneId = $scope.webcontents[0].webcId;
          $scope.siOneImageName = main_url+'uploads/webcontents/'+$scope.webcontents[0].webcImageName;

          $scope.siTwoName = $scope.webcontents[1].webcName;
          $scope.siTwoId = $scope.webcontents[1].webcId;
          $scope.siTwoImageName = main_url+'uploads/webcontents/'+$scope.webcontents[1].webcImageName;

          $scope.siThreeName = $scope.webcontents[2].webcName;
          $scope.siThreeId = $scope.webcontents[2].webcId;
          $scope.siThreeImageName = main_url+'uploads/webcontents/'+$scope.webcontents[2].webcImageName;

          $scope.tiOneName = $scope.webcontents[3].webcName;
          $scope.tiOneId = $scope.webcontents[3].webcId;
          $scope.tiOneImageName = main_url+'uploads/webcontents/'+$scope.webcontents[3].webcImageName;

          $scope.tiTwoName = $scope.webcontents[4].webcName;
          $scope.tiTwoId = $scope.webcontents[4].webcId;
          $scope.tiTwoImageName = main_url+'uploads/webcontents/'+$scope.webcontents[4].webcImageName;

          $scope.tiThreeName = $scope.webcontents[5].webcName;
          $scope.tiThreeId = $scope.webcontents[5].webcId;
          $scope.tiThreeImageName = main_url+'uploads/webcontents/'+$scope.webcontents[5].webcImageName;

          $scope.tiFourName = $scope.webcontents[6].webcName;
          $scope.tiFourId = $scope.webcontents[6].webcId;
          $scope.tiFourImageName = main_url+'uploads/webcontents/'+$scope.webcontents[6].webcImageName;


        });
  }


});


//************************ Product Category Controller *********************//
app.controller('productcategoryCtrl', function($scope, $http, toastr, $timeout, Upload) {

  $scope.dataloading = true;

  getAllCategories();

  $scope.sort = function(keyname){
    $scope.sortKey = keyname; 
    $scope.reverse = !$scope.reverse; 
  }

  $scope.whatClassIsIt= function(someValue){
    if(someValue=="active"){
      return "label label-success";
    }else{
      return "label label-danger";
    }
  };

  $scope.refreshTable = function(){
    getAllCategories();
    toastr.success("Table Refreshed",'Success!');
  }


  $scope.addCategory = function(file) {
      file.upload = Upload.upload({
        url: main_url+'product_category/add_category',
        data: {
          pcatName: $scope.pcatName,
          pcatDescription: $scope.pcatDescription,
          file: file
        },
      });

      file.upload.then(function (response) {
        $timeout(function () {
          file.result = response.data;

          $scope.picFile = null;
          toastr.success(response.data.message,'Success!');
          $('.modal-add-category').modal('hide');
          getAllCategories();
        });
      }, function (response) {
        if (response.status > 0)
          $scope.errorMsg = response.status + ': ' + response.data;


      }, function (evt) {
        // Math.min is to fix IE which reports 200% sometimes
        file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
      });
  }


  $scope.updateIcon = function(file) {
      file.upload = Upload.upload({
        url: main_url+'product_category/update_icon',
        data: {
          pcatId: $scope.editingItem.pcatId,
          file: file
        },
      });

      file.upload.then(function (response) {
        $timeout(function () {
          file.result = response.data;

          $scope.picFile2 = null;
          toastr.success(response.data.message,'Success!');
          $('.modal-update-icon').modal('hide');
          getAllCategories();
        });
      }, function (response) {
        if (response.status > 0)
          $scope.errorMsg = response.status + ': ' + response.data;


      }, function (evt) {
        // Math.min is to fix IE which reports 200% sometimes
        file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
      });
  }


  $scope.updateCategory = function(){

    var data = $.param({
      pcatId: $scope.editingItem.pcatId,
      pcatName: $scope.editingItem.pcatName,
      pcatDescription: $scope.editingItem.pcatDescription
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'product_category/update_category',data,config)
    .then(function(response){

      if(response.data.status == "success"){


        toastr.success(response.data.message,'Success!');
        $('.modal-update-category').modal('hide');
        getAllCategories();

        }else{
          toastr.error(response.data.message, 'Warning!');
        }


    });

  }


  $scope.changeStatus = function(item){

    if(item.pcatStatus == "active"){
      $scope.changeStatusName = "deactive";
    }else{
      $scope.changeStatusName = "active";
    }

    var data = $.param({
      pcatId: item.pcatId,
      pcatStatus: $scope.changeStatusName
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'product_category/change_status',data,config)
    .then(function(response){
      if(response.data.status == "success"){
        toastr.success(response.data.message,'Success!');
        getAllCategories();
      }else{
        toastr.error(response.data.message, 'Warning!');
      }


    });

  }

  $scope.editRow = function(item){

    $scope.editingItem =
      {
        pcatId: item.pcatId,
        pcatName: item.pcatName,
        pcatDescription: item.pcatDescription
      };

  };

  function getAllCategories(){

    $http.get(main_url+'product_category/get_all_categories')
        .then(function(response){

          $scope.categories = response.data;
          $scope.dataloading = false;

        });
  }

});



//************************ Users Controller *********************//
app.controller('usersCtrl', function($scope, $http, toastr) {

  $scope.dataloading = true;

  getAllUsers();

  $scope.sort = function(keyname){
    $scope.sortKey = keyname; 
    $scope.reverse = !$scope.reverse; 
  }

  $scope.whatClassIsIt= function(someValue){
    if(someValue=="active"){
      return "label label-success";
    }else{
      return "label label-danger";
    }
  }


  $scope.refreshTable = function(){
    getAllUsers();
    toastr.success("Table Refreshed",'Success!');
  }


  $scope.changeStatus = function(item){

    if(item.userStatus == "active"){
      $scope.changeStatusName = "deactive";
    }else{
      $scope.changeStatusName = "active";
    }

    var data = $.param({
      userId: item.userId,
      userStatus: $scope.changeStatusName
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'users/change_status',data,config)
    .then(function(response){
      if(response.data.status == "success"){
        toastr.success(response.data.message,'Success!');
        getAllUsers();
      }else{
        toastr.error(response.data.message, 'Warning!');
      }


    });

  }


  function getAllUsers(){

    $http.get(main_url+'users/get_all_users')
        .then(function(response){

          $scope.users = response.data;
          $scope.dataloading = false;

        });
  }

});



//************************ Vendor Request Controller *********************//
app.controller('vendorsCtrl', function($scope, $http, toastr) {

  $scope.dataloading = true;

  getAllVendors();
  getAllLanguages();
  getAllCategories();

  $scope.sort = function(keyname){
    $scope.sortKey = keyname; 
    $scope.reverse = !$scope.reverse; 
  }

  $scope.whatClassIsIt= function(someValue){
    if(someValue=="active" || someValue == "yes"){
      return "label label-success";
    }else{
      return "label label-danger";
    }
  }

  $scope.refreshTable = function(){
    getAllVendors();
    toastr.success("Table Refreshed",'Success!');
  }


  $scope.activeRow = function(item){

    $scope.activeItem =
      {
        vendorId: item.vendorId,
        vendorVerified: item.vendorVerified,
        vendorStatus: item.vendorStatus,
        vendorFirstName: item.vendorFirstName,
        vendorLastName: item.vendorLastName,
        vendorEmail: item.vendorEmail,
        vendorLocation: item.vendorLocation,
        vendorPLanguage: item.vendorPLanguage,
        vendorSLanguages: item.vendorSLanguages,
        vdSLanguages: null,
        vendorPCategories: item.vendorPCategories,
        vdPCategories: null,
        vendorCountry: item.vendorCountry,
        vendorState: item.vendorState,
        vendorCity: item.vendorCity,
        vendorStreetAddress: item.vendorStreetAddress,
        vendorWebsites: item.vendorWebsites,
        vendorZIPCode: item.vendorZIPCode,
        vendorEmail: item.vendorEmail,
        vendorPhotoIdImageLink: item.vendorPhotoIdImageLink,
        vendorVerifiedEmail: item.vendorVerifiedEmail,
        vendorVerifiedMobile: item.vendorVerifiedMobile,
        vendorProfileImageLink: item.vendorProfileImageLink,
        vendorAboutYourself: item.vendorAboutYourself
      };

    $scope.arrStringLang = new Array();
    $scope.arrStringLang = $scope.activeItem.vendorSLanguages.split(",");

    for(var i=0; i<$scope.arrStringLang.length; i++){
      if($scope.activeItem.vdSLanguages == null){
        $scope.activeItem.vdSLanguages = $scope.languages[parseInt($scope.arrStringLang[i])-1].langFName;
      }else{
        $scope.activeItem.vdSLanguages = $scope.activeItem.vdSLanguages+", "+$scope.languages[parseInt($scope.arrStringLang[i])-1].langFName;
      }
    }

    $scope.arrStringPCat = new Array();
    $scope.arrStringPCat = $scope.activeItem.vendorPCategories.split(",");

    for(var i=0; i<$scope.arrStringPCat.length; i++){
      if($scope.activeItem.vdPCategories == null){
        $scope.activeItem.vdPCategories = $scope.categories[parseInt($scope.arrStringPCat[i])-1].pcatName;
      }else{
        $scope.activeItem.vdPCategories = $scope.activeItem.vdPCategories+", "+$scope.categories[parseInt($scope.arrStringPCat[i])-1].pcatName;
      }
    }

  }


  $scope.activeRowVerification = function(item){

    if(item.vendorVerified == "yes"){
      toastr.info('Vendor Already Verified','Info!');
    }else{
       $scope.activeVerificationItem =
        {
          vendorId: item.vendorId
        };

        $('.modal-status-confirmation').modal('show');
    }

  }

  $scope.submitVerification = function(item){

    var data = $.param({
      userId: $scope.activeVerificationItem.vendorId,
      userIsVendor: 'yes',
      userVendorStatus: 'active'
    });

    var config = {
        headers : {
            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
        }
    }

    $http.post(main_url+'vendors/vendor_verification',data,config)
    .then(function(response){
      if(response.data.status == "success"){
        $('.modal-status-confirmation').modal('hide');
        toastr.success(response.data.message,'Success!');
        getAllVendors();
      }else{
        toastr.error(response.data.message, 'Warning!');
      }


    });

  }



  function getAllVendors(){

    $http.get(main_url+'vendors/get_all_vendors')
        .then(function(response){

          $scope.vendors = response.data;
          $scope.dataloading = false;

        });
  }


  function getAllLanguages(){

    $http.get(main_url+'vendors/get_all_active_languages')
        .then(function(response){
          $scope.languages = response.data;
        });
  }

  function getAllCategories(){

    $http.get(main_url+'vendors/get_all_active_categories')
        .then(function(response){
          $scope.categories = response.data;
        });
  }

});
