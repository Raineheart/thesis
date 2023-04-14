<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <title>Register</title>
  </head>
  <body>
    <form action="registration.php" method="post">
      <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div
                class="card shadow-2-strong card-registration"
                style="border-radius: 15px"
              >
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                  <form>
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input
                            type="text"
                            id="firstName"
                            class="form-control form-control-lg"
                            name="firstname"
                          />
                          <label class="form-label" for="firstName"
                            >First Name</label
                          >
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input
                            type="text"
                            id="lastName"
                            class="form-control form-control-lg"
                            name="lastname"
                          />
                          <label class="form-label" for="lastName"
                            >Last Name</label
                          >
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline datepicker w-100">
                          <input
                            type="datetime-local"
                            class="form-control form-control-lg"
                            id="birthdayDate"
                            placeholder="Select Birthdate"
                            name="birth"
                          />
                          <label for="birthdayDate" class="form-label"
                            >Birthdate</label
                          >
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <h6 class="mb-2 pb-1">Gender:</h6>
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Other">Other
                      </div>  
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                          <input
                            type="text"
                            id="emailAddress"
                            class="form-control form-control-lg"
                            name="id"
                          />
                          <label class="form-label" for="emailAddress"
                            >Student ID</label
                          >
                        </div>
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                          <input
                            type="text"
                            id="phoneNumber"
                            class="form-control form-control-lg"
                            name="email"
                          />
                          <label class="form-label" for="phoneNumber"
                            >Email Address</label
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input
                            type="tel"
                            id="firstName"
                            class="form-control form-control-lg"
                            name="num"
                          />
                          <label class="form-label" for="firstName"
                            >Contact Number</label
                          >
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input
                            type="text"
                            id="lastName"
                            class="form-control form-control-lg"
                            name="address"
                          />
                          <label class="form-label" for="lastName"
                            >Address</label
                          >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input
                            type="text"
                            id="firstName"
                            class="form-control form-control-lg"
                            name="course"
                          />
                          <label class="form-label" for="firstName"
                            >Course</label
                          >
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="col-12">
                          <select class="select form-control-lg" name="year">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="4">5</option>
                          </select>
                          <label class="form-label select-label"
                            >Year Level</label
                          >
                        </div>
                      </div>
  
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
                        <div class="form-outline datepicker w-100">
                          <input
                            type="datetime-local"
                            class="form-control form-control-lg"
                            id="birthdayDate"
                            placeholder="Select Date"
                            name="dor"
                          />
                          <label for="birthdayDate" class="form-label"
                            >Date of Registration</label
                          >
                        </div>
                      </div>    
                      <button
                    class="btn btn-primary btn-lg btn-block"
                    type="submit"
                  >
                    Submit
                  </button>               
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
      flatpickr("input[type=datetime-local]");
    </script>


  </body>
</html>
