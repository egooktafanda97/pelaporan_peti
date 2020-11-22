// menu

$('.act').click(function() {
  $('.act').removeClass('active');
  $(this).addClass('active');
});

function stringTodatetiker(dates){
  res = dates.split("-");

} 

function alertSuccess() {
  swal("success", "Data Tersimpan", "success", {
    button: "Ok",
  }).then((value) => {
    window.location.assign(location)
  });
}
function  alertGagal() {
  swal("Ma'af!", "Seperti nya ada kesalahan", "error", {
      // button: "Ok",
    }).then((value) => {
      window.location.assign(location)
    });
  }
  function  alertError() {
    swal("Ma'af!", "Seperti nya ada kesalahan", "error", {
      // button: "Ok",
    }).then((value) => {
      window.location.assign(location)
    });
  }

// 


function alertSuccess_ses() {
  swal("success", "Data Tersimpan", "success", {
    button: "Ok",
  }).then((value) => {
    
  });
}
function  alertError_ses() {
  swal("Ma'af!", "Seperti nya ada kesalahan", "error", {
      // button: "Ok",
    }).then((value) => {
      
    });
  }



function numeric(cls) {
	$('.'+cls).keyup(function () {
   if (this.value != this.value.replace(/[^0-9\.]/g, '')) {
    this.value = this.value.replace(/[^0-9\.]/g, '');
  }
});
}

function empty(e) {
  switch (e) {
    case "":
    case 0:
    case "0":
    case null:
    case false:    
    case typeof(e) == "undefined":
    return true;
    default:
    return false;
  }
}
function show_xpanel(class_){
  $('.'+class_).show();
}
function hide_xpanel(class_){
  $('.'+class_).hide();
}

 
function debug(response){
  console.log('debug:');
  console.log(response);
}
function success_debug(response){ 
  console.log("success :");
  console.log(response);
}
function error_debug(response){
  console.log("error :");
  console.log(response);
}

class ajax{
  get(url, cel) {
    $.ajax({
      type: "GET",
      url: url,
      dataType: "JSON",
      success: function(response) {
        cel(response);
      }
    });
  }

  post(url, data, reponse_success, reponse_error,debug) {
    $.ajax({
      type: "POST",
      url: url,
      data: data,
      success: function(response) {
        debug(response);
        if (response) {
          reponse_success();
        } else {
          reponse_error();
        }
      }
    });
  }
  post_image(url, data, reponse_success, reponse_error,debug){
    $.ajax({
        url: url, // Upload Script
        type: 'POST',               
          processData: false,
          contentType: false,
          data: data(), 
        success: function(response) {
           debug(response);
           if (response) {
            reponse_success();
          } else {
            reponse_error();
          }
      }
    });
  }
  delete(url,data,reponse_success, reponse_error,debug){
    swal({
      title: "Yakin !!!",
      text: "Anda Akan Menghapus Data",
      icon : "warning",
      buttons: true,
      warningMode: true,  
    }).then((value) => {;
      if(value === true){
        $.ajax({
          type : "POST",
          url  : url,
          data : data,
          success: function(response){
            debug(response);
            if(response){
              reponse_success();
            }else{
              reponse_error();
            }
          }
        });
      }
    });
  }
}
