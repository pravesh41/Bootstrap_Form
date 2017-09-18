  $(document).ready(function () {
      $('#registration_form').bootstrapValidator({
              // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
              feedbackIcons: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
              fields: {
                  first_name: {
                      validators: {
                          stringLength: {
                              min: 2,
                          },
                          notEmpty: {
                              message: 'Please enter your first name'
                          }
                      }
                  },
                  last_name: {
                      validators: {
                          stringLength: {
                              min: 2,
                          },
                          notEmpty: {
                              message: 'Please enter your last name'
                          }
                      }
                  },
                  email: {
                      validators: {
                          notEmpty: {
                              message: 'Please enter your email address'
                          },
                          emailAddress: {
                              message: 'Please enter a valid email address'
                          }
                      }
                  },
                  phone: {
                      validators: {
                          notEmpty: {
                              message: 'Please enter your phone number'
                          },
                          phone: {
                              country: 'IN',
                              message: 'Please supply a vaild phone number'
                          }
                      }
                  },

                  gender: {
                      validators: {
                          notEmpty: {
                              message: 'Please select your gender'
                          }
                      }
                  },

                  branch: {
                      validators: {
                          notEmpty: {
                              message: 'Please select your branch'
                          }
                      }
                  },

                  year: {
                      validators: {
                          notEmpty: {
                              message: 'Please select your year'
                          }
                      }
                  },

                  stdno: {
                      validators: {
                          stringLength: {
                              min: 7,
                              max: 7,
                          },
                          notEmpty: {
                              message: 'Please enter your Student Number'
                          },

                      }
                  },

                  rollno: {
                      validators: {
                          stringLength: {
                              min: 10,
                              max: 10,
                          },
                          notEmpty: {
                              message: 'Please enter your Roll Number'
                          },

                      }
                  },

              }
          })
          .on('success.form.bv', function (e) {
              $('#success_message').slideDown({
                  opacity: "show"
              }, "slow") // Do something ...
              $('#contact_form').data('bootstrapValidator').resetForm();

              // Prevent form submission
              e.preventDefault();

              // Get the form instance
              var $form = $(e.target);

              // Get the BootstrapValidator instance
              var bv = $form.data('bootstrapValidator');

              // Use Ajax to submit form data
              $.post($form.attr('action'), $form.serialize(), function (result) {
                  console.log(result);
              }, 'json');
          });
  });
