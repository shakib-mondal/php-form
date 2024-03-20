<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Registration Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-4">
    <h2>User Registration Form</h2>
    <form id="registrationForm" novalidate>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="firstName">First Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="firstName" name="firstName" required>
          <div class="invalid-feedback">Please provide your first name.</div>
        </div>
        <div class="form-group col-md-6">
          <label for="lastName">Last Name</label>
          <input type="text" class="form-control" id="lastName" name="lastName" required>
          <div class="invalid-feedback">Please provide your last name.</div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="countryCode">Country Code <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="countryCode" name="countryCode" required>
          <div class="invalid-feedback">Please provide your country code.</div>
        </div>
        <div class="form-group col-md-6">
          <label for="contactNumber">Contact Number <span class="text-danger">*</span></label>
          <input type="number" class="form-control" id="contactNumber" name="contactNumber" required>
          <div class="invalid-feedback">Please provide your contact number.</div>
        </div>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" required>
        <div class="invalid-feedback">Please provide your address.</div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="gender">Gender</label>
          <select class="form-control" id="gender" name="gender" required>
            <option value="">Choose...</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
          <div class="invalid-feedback">Please select your gender.</div>
        </div>
        <div class="form-group col-md-6">
          <label for="email">Email Address <span class="text-danger">*</span></label>
          <input type="email" class="form-control" id="email" name="email" required>
          <div class="invalid-feedback">Please provide a valid email address.</div>
        </div>
      </div>
      <div class="form-group">
        <label for="birthdate">Birthdate <span class="text-danger">*</span></label>
        <input type="date" class="form-control" id="birthdate" name="birthdate" required>
        <div class="invalid-feedback">Please provide your birthdate.</div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>
