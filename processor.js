$(function () {
  // alert('hi there');
  $("#socl").click(function () {
    swal({
      title: "Done!",
      text: "Record Deleted Successfully",
      timer: 1000,
      type: "success",
      padding: "2em",
      // target: document.querySelector("html")
    });
  });

  //  var re = /\S+@\S+\.\S+/;

  $(document).on("click", "#ddo", function () {
    swal({
      title: "Done!",
      text: "Record Deleted Successfully",
      timer: 1000,
      type: "success",
      padding: "2em",
      target: document.querySelector("html"),
    });
  });

  function resp(response) {
    response = response.trim();

    if (response == "success") {
      swal.close();
      swal({
        title: "Success",
        text: "Record added Successfully",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location.reload();
      });
    } else if (response == "deleted") {
      swal({
        title: "Done!",
        text: "Record Deleted Successfully",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location.reload();
      });
    } else if (response == "removedfromcart") {
      swal({
        title: "Done!",
        text: "Item removed successfusly",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        // window.location.reload();
        $("#cartcount").load("processor/processor.php?action=countcart");
        $("#minicart").load("processor/processor.php?action=viewcart");
        $("#cartot").load("processor/processor.php?action=carttotal");
        $("#vcart").load("processor/processor.php?action=viewmaincart");
        $("#checkcart").load("processor/processor.php?action=checkoutcart");
        $("#mku").load("processor/processor.php?action=cartsubtotal");
        $("#ordtt").load("processor/processor.php?action=carttotal");
        swal.close();
      });
    } else if (response == "couponapplied") {
      swal({
        title: "Done!",
        text: "Coupon applied Successfuly",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        // window.location.reload();
        $("#cartcount").load("processor/processor.php?action=countcart");
        $("#minicart").load("processor/processor.php?action=viewcart");
        $("#cartot").load("processor/processor.php?action=carttotal");
        $("#vcart").load("processor/processor.php?action=viewmaincart");
        $("#checkcart").load("processor/processor.php?action=checkoutcart");
        // $("#swee").load('processor/processor.php?action=carttotal1');
        $("#diskc").load("processor/processor.php?action=discount");

        $("#mku").load("processor/processor.php?action=cartsubtotal");

        $("#ordtt").load("processor/processor.php?action=carttotal");
        swal.close();
      });
    } else if (response == "addedtocart") {
      swal({
        title: "Done!",
        text: "Item Added",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        // window.location.reload();
        $("#cartcount").load("processor/processor.php?action=countcart");
        $("#minicart").load("processor/processor.php?action=viewcart");
        $("#cartot").load("processor/processor.php?action=carttotal");
        swal.close();
      });
    } else if (response == "loginsuccess") {
      swal({
        title: "Login Successfull!",
        text: "will be redirected soon",
        timer: 2000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location = "dashboard.php";
      });
    } else if (response == "changepasssuccess") {
      swal({
        title: "Success",
        text: "Password updated successfuly",
        timer: 2000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location = "dashboard.php";
      });
    } else if (response == "Updated Successfully") {
      swal({
        title: "Congratulations!",
        html: "You are duly registered for the Counselling training. <br><b>Proceed to make Payment to Confirm Participation. Call 0541 369 429 / 0208 496 496</b><br> An email has been sent to your mail.",
        timer: 3000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location.reload();
      });
    } else if (response == "confirmed") {
      swal({
        title: "Congratulations!",
        html: "Your Participation has been confirmed. <br><b>Proceed to make Payment.</b>",
        timer: 3000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location.reload();
      });
    } else if (response == "yes") {
      swal({
        title: "Congratulations!",
        html: "Thank you for your Participation. <br><b>You can enroll in our certificate in counselling programme. Enroll now to get discount</b>",
        timer: 4000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location.reload();
      });
    } else if (response == "no") {
      swal({
        title: "Thank You!",
        html: " <b>for your response. Our team is working on it. <br><b>Check again in 24 hours.</b>",
        timer: 4000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location.reload();
      });
    } else if (response == "enrolled") {
      swal({
        title: "Congratulations!",
        html: "Thank you for enrolling in our Certification in Counseling Program.",
        timer: 3000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location.reload();
      });
    } else if (response.trim() == "updatesuccess") {
      swal({
        title: "Congratulations",
        text: "You are duly registered for the Counselling training. Proceed to make payment  to confirm your participation  Call 0541 369 429 / 0208 496 496 for any assistance. Thanks",
        timer: 5000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location.replace("payment.php");
      });
    } else if (response == "registered") {
      swal({
        title: "Success",
        text: "Registration Successful",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location = "ntcreg.php";
      });
    } else if (response == "loginfailed") {
      swal({
        title: "Oops!",
        text: "Record not found in database! ",
        type: "error",
        padding: "2em",
      });
    } else {
      swal({
        title: "Attention!",
        text: response,
        type: "warning",
        padding: "2em",
      });
    }
  }

  function before() {
    swal({
      title: "Please Wait !",
      html: "request in progress...", // add html attribute if you want or remove
      allowOutsideClick: false,
      // onBeforeOpen: () => {
      //     Swal.showLoading()
      // },
    });
  }

  $(".welcome").submit(function (e) {
    e.preventDefault();
    // before();
    var staff = {
      url: "processor/processor.php?action=welcome",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  // update user
  $(".updateuser").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=update",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  // login

  $(".login").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=login",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  // register

  $(".register").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=register",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  // $(".enrolluser").submit(function (e) {
  //   e.preventDefault();
  //   // before();
  //   // var id = $(this).attr('id');
  //   var staff = {
  //     url: "processor.php?action=enrolluser",
  //     type: "post",
  //     data: new FormData(this),
  //     cache: false,
  //     contentType: false,
  //     processData: false,
  //     beforeSend: before,
  //     success: resp,
  //   };
  //   $.ajax(staff);
  // });

  $(document).on("click", ".enrolluser", function (e) {
    e.preventDefault();

    Swal.fire({
      title: "Are you sure?",
      text: "You want to Register Now",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Register Now!",
    }).then((result) => {
      if (result.isConfirmed) {
        var staff = {
          url: "processor.php?action=enrolluser",
          type: "post",
          // data: { id: $(this).attr("id") },
          data: new FormData(this),
          cache: false,
          contentType: false,
          processData: false,
          // cache: false,
          // contentType: false,
          // processData: false,
          beforeSend: before,
          success: resp,
        };
        $.ajax(staff);
        // Swal.fire(
        //   'Deleted!',
        //   'Your file has been deleted.',
        //   'success'
        // )
      }
    });
  });

  // change password

  $(".changepass").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=changepass",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  //confirm

  $(".cfuser").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=cfuser",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });
});
