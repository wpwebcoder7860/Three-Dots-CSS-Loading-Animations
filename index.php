<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tab Example</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <style>
            .loader-container {
                  position: fixed;
                  top: 50%;
                  left: 50%;
                  transform: translate(-50%, -50%);
                  width: 100%;
                  height: 100%;
                  background: rgba(255, 255, 255, 0.8);
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  z-index: 9999;
                  display: none;
            }

            .dot-pulse {
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  position: relative;
                  top: 50%;
            }

            .loader-container .dot-pulse div {
                  height: 20px;
                  width: 20px;
                  border-radius: 50%;
                  background: black;
                  float: left;
                  margin: 0 3px;
                  background: #6859a3;
                  transform: scale(0);
            }

            .loader-container .ball1 {
                  z-index: 1;
                  -moz-animation: grow 3.1s infinite ease-in-out;
                  -webkit-animation: grow 3.1s infinite ease-in-out;
            }

            .loader-container .ball2 {
                  -moz-animation: grow 3.1s infinite ease-in-out;
                  -webkit-animation: grow 3.1s infinite ease-in-out;
                  -webkit-animation-delay: 0.3s;
                  animation-delay: 0.3s;
            }

            .loader-container .ball3 {
                  -moz-animation: grow 3.1s infinite ease-in-out;
                  -webkit-animation: grow 3.1s infinite ease-in-out;
                  -webkit-animation-delay: 0.6s;
                  animation-delay: 0.6s;
            }

            .loader-container .ball4 {
                  -moz-animation: grow 3.1s infinite ease-in-out;
                  -webkit-animation: grow 3.1s infinite ease-in-out;
                  -webkit-animation-delay: 0.9s;
                  animation-delay: 0.9s;
            }

            @-moz-keyframes grow {
                  0% {
                        -moz-transform: scale(0);
                  }

                  25% {
                        -moz-transform: scale(1);
                  }

                  50% {
                        -moz-transform: scale(0);
                  }

                  75% {
                        -moz-transform: scale(1);
                        background: #72c2c2;
                  }

                  100% {
                        -moz-transform: scale(0);
                        background: #72c2c2;
                  }
            }

            @-webkit-keyframes grow {
                  0% {
                        -webkit-transform: scale(0);
                  }

                  25% {
                        -webkit-transform: scale(1);
                  }

                  50% {
                        -webkit-transform: scale(0);
                  }

                  75% {
                        -webkit-transform: scale(1);
                        background: #72c2c2;
                  }

                  100% {
                        -webkit-transform: scale(0);
                        background: #72c2c2;
                  }
            }

            @-moz-keyframes grow {
                  0% {
                        -moz-transform: scale(0);
                  }

                  25% {
                        -moz-transform: scale(1);
                  }

                  50% {
                        -moz-transform: scale(0);
                  }

                  75% {
                        -moz-transform: scale(1);
                        background: #72c2c2;
                  }

                  100% {
                        -moz-transform: scale(0);
                        background: #72c2c2;
                  }
            }

            @-webkit-keyframes grow {
                  0% {
                        -webkit-transform: scale(0);
                  }

                  25% {
                        -webkit-transform: scale(1);
                  }

                  50% {
                        -webkit-transform: scale(0);
                  }

                  75% {
                        -webkit-transform: scale(1);
                        background: #72c2c2;
                  }

                  100% {
                        -webkit-transform: scale(0);
                        background: #72c2c2;
                  }
            }
      </style>

</head>

<body>

      <div class="loader-container" id="loader">
            <div class="dot-pulse">
                  <div class="dot ball1"></div>
                  <div class="dot ball2"></div>
                  <div class="dot ball3"></div>
                  <div class="dot ball4"></div>
            </div>
      </div>
      <div class="container mt-5">
            <ul class="nav nav-tabs" id="myTabs">
                  <li class="nav-item">
                        <a class="nav-link active" id="tab1" data-toggle="tab" href="#content1">Tab 1</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" id="tab2" data-toggle="tab" href="#content2">Tab 2</a>
                  </li>
            </ul>

            <div class="tab-content mt-2">
                  <div class="tab-pane fade show active" id="content1">
                        <form id="form1">
                              <div class="form-group">
                                    <label for="email1">Email address:</label>
                                    <input type="email" class="form-control" id="email1" name="email" required>
                              </div>
                              <div class="form-group">
                                    <label for="otp1">OTP:</label>
                                    <input type="text" class="form-control" id="otp1" name="otp" required>
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                  </div>
                  <div class="tab-pane fade" id="content2">
                        <!-- Content for Tab 2 -->
                        
                  </div>
            </div>
      </div>

      <script>
            $(document).ready(function() {
                  $("#form1").submit(function(e) {
                        e.preventDefault();
                        // Show loader
                        $("#loader").show();
                        $.ajax({
                              type: "POST",
                              url: "submit_form.php",
                              data: $(this).serialize(),
                              success: function(response) {
                                    var response = $.parseJSON(response);
                                    // Hide loader on success
                                    $("#loader").hide();
                                    // Handle the response
                                    if (response.success) {
                                          // Switch to the next tab with animation
                                          $('#myTabs a[href="#content2"]').tab('show');
                                    } else {
                                          alert("Verification failed. Please try again.");
                                    }
                              },
                              error: function(error) {
                                    console.error("Error submitting form: ", error);
                                    // Hide loader on error
                                    $("#loader").hide();
                                    alert("An error occurred. Please try again later.");
                              },
                        });
                  });
            });
      </script>

</body>

</html>