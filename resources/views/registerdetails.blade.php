<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Registration</title>
</head>
<body>
    <h1 style="text-align: center;">A New Registration Recieved</h1>

    <div>
        <p>
            <strong>Full Name: </strong> {{ $full_name }}
        </p>
        <p>
            <strong>Phone Number: </strong> {{ $phone }}
        </p>
        <p>
            <strong>Email: </strong> {{ $email }}
        </p>
        <p>
            <strong>NIC Number: </strong> {{ $nic }}
        </p>
        <p>
            <strong>Permanent Address: </strong> {{ $address }}
        </p>
        <p>
            <strong>Gender: </strong> {{ $gender }}
        </p>
        <p>
            <strong>Date Of Birth: </strong> {{ $dob }}
        </p>
        <p>
            <strong>Country: </strong> {{ $country }}
        </p>
        <p>
            <strong>Marital Status: </strong> {{ $status }}
        </p>
    </div>
</body>
</html>