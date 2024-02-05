# Tab Example with Loader

This is a simple HTML file demonstrating the use of tabs with a loader for form submission.

## Technologies Used

- HTML
- Bootstrap
- jQuery

## Dependencies

- [Bootstrap](https://getbootstrap.com/)
- [jQuery](https://jquery.com/)

## Usage

1. Include the necessary dependencies using CDN links in the `<head>` section.
2. Customize the loader animation and form content as needed.
3. Update the form submission URL in the JavaScript section (`submit_form.php` is a placeholder).

## Loader Animation

The loader uses a pulsating dot animation while submitting the form. You can customize the loader styles in the CSS section.

## Tabs

Tabs are implemented using Bootstrap's `nav` and `tab-content` components. Modify the tab names, content, and form fields based on your requirements.

## Form Submission

The form submission is handled asynchronously using jQuery AJAX. Update the form submission URL and adjust the success/error handling as needed.
Copy and paste this into your GitHub README.md file, and adjust the content as needed.
## Folder Structure

- css/: Contains external stylesheets.
- js/: Includes external JavaScript files.
- submit_form.php: Placeholder PHP file for handling form submissions. Update this based on your server-side logic.

## Customization

Feel free to customize the code to fit your project requirements. Here are a few areas you might want to modify:

- Update the form fields and validation in `content1` tab as per your application needs.
- Adjust the loader animation styles in the CSS section to match your project's design.
- Customize the form submission URL and handling in the JavaScript section (`submit_form.php`).

## Contributing

If you'd like to contribute to this project, feel free to fork the repository and submit a pull request. We welcome any improvements or bug fixes!

## License

This project is licensed under the [wpwebcoder7860](LICENSE).

## Acknowledgments

- [Bootstrap](https://getbootstrap.com/)
- [jQuery](https://jquery.com/)

## Contact

If you have any questions or suggestions, feel free to reach out:

- Email: wpwebcoder@gmail.com

Happy coding!
```html
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


