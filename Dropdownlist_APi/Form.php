<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown List</title>
    <style>
        body {
            text-align: center;
        }
        select {
            width: 200px;
            padding: 5px;
            margin: 10px;
        }
    </style>
</head>
<body>
    
<h3>City, State, Country Demo</h3><br><br>

<label for="country">Country</label>
<select name="country" id="country" onchange="getState()">
    <option value="">Select Country</option>
</select><br><br>

<label for="state">State</label>
<select name="state" id="state" onchange="getCity()">
    <option value="">Select State</option>
</select><br><br>

<label for="city">City</label>
<select name="city" id="city">
    <option value="">Select City</option>
</select><br><br>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        // Call PHP to fetch country list on page load
        $.ajax({
            url: 'http://localhost/PHP/Dropdownlist_APi/Form.php',
            method: 'GET',
            dataType: 'JSON',
            success: function(res) {
                const countryDropdown = $('#country');
                res.forEach(function(country) {
                    countryDropdown.append('<option value="' + country.country_name + '">' + country.country_name + '</option>');
                });
            },
            error: function(err) {
                console.log('Error fetching countries:', err);
            }
        });
    });

    function getState() {
        let countryName = $('#country').val();
        if (countryName) {
            $.ajax({
                url: 'https://www.universal-tutorial.com/api/states/' + countryName,
                method: 'GET',
                dataType: 'JSON',
                headers: {
                    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7InVzZXJfZW1haWwiOiJQZnN1dGhhcjMzQGdtYWlsLmNvbSIsImFwaV90b2tlbiI6IkNlT05aNnlwV0VSWGJfMWFnRlM1OE9MNnVFVXRWc3c4ZE9TZ1h6d0ZEekZVdXhTVElUdFQ2YjhUN3dKdmtWVmhtcmMifSwiZXhwIjoxNzI3Njk3ODk1fQ._4hozCyRLwhhhsfr-l2On9Urv8eXJ2pCOLfvkk9j6gw",
                    "Accept": "application/json"
                },
                success: function(res) {
                    const stateDropdown = $('#state');
                    stateDropdown.empty().append('<option value="">Select State</option>');
                    res.forEach(function(state) {
                        stateDropdown.append('<option value="' + state.state_name + '">' + state.state_name + '</option>');
                    });
                },
                error: function(err) {
                    console.log('Error fetching states:', err);
                }
            });
        }
    }

    function getCity() {
        let stateName = $('#state').val();
        if (stateName) {
            $.ajax({
                url: 'https://www.universal-tutorial.com/api/cities/' + stateName,
                method: 'GET',
                dataType: 'JSON',
                headers: {
                    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7InVzZXJfZW1haWwiOiJQZnN1dGhhcjMzQGdtYWlsLmNvbSIsImFwaV90b2tlbiI6IkNlT05aNnlwV0VSWGJfMWFnRlM1OE9MNnVFVXRWc3c4ZE9TZ1h6d0ZEekZVdXhTVElUdFQ2YjhUN3dKdmtWVmhtcmMifSwiZXhwIjoxNzI3Njk3ODk1fQ._4hozCyRLwhhhsfr-l2On9Urv8eXJ2pCOLfvkk9j6gw",
                    "Accept": "application/json"
                },
                success: function(res) {
                    const cityDropdown = $('#city');
                    cityDropdown.empty().append('<option value="">Select City</option>');
                    res.forEach(function(city) {
                        cityDropdown.append('<option value="' + city.city_name + '">' + city.city_name + '</option>');
                    });
                },
                error: function(err) {
                    console.log('Error fetching cities:', err);
                }
            });
        }
    }
</script>
</body>
</html>
