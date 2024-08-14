<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collage Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
<body>
    <form action="insert.php" method="post"> 
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div  class="form-outline">
                    <input type="text" id="firstName" name="First_Name" class="form-control form-control-lg"  />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div  class="form-outline">
                    <input type="text" id="lastName" name="Last_Name" class="form-control form-control-lg"  />
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div  class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" name="Age" id="Age"  />
                    <label for="Age" class="form-label">Age</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="Male" checked />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="Female" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                      value="Other" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div  class="form-outline">
                    <input type="email" id="emailAddress" name="emailAddress" class="form-control form-control-lg"  />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div  class="form-outline">
                    <input type="tel" id="phoneNumber" name="Phone_Number" class="form-control form-control-lg"   />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">

                  <select name="course" class="select form-control-lg" >
                    <option value="1">Choose option</option>
                    <option value="Full Stack">Full Stack</option>
                    <option value="Web Design">Web Design</option>
                    <option value="Network and Security">Network and Security</option>
                    <option value="Hardware Networking">Hardware Networking</option>
                    <option value="Data Science">Data Science</option>
                    <option value="Data Analytics">Data Analytics</option>
                    <option value="Front end Devlopment">Front end Devlopment</option>
                    <option value="Backend Devlopment">Backend Devlopment</option>
                  </select>
                  

                </div>
              </div>

              <div class="mt-4 pt-2">
                <input  class="btn btn-primary btn-lg" type="submit" name="Submit" value="Submit" />
                <input  class="btn btn-primary btn-lg" type="Reset" name="Cancle" value="Cancle" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>