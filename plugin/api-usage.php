<?php
require 'nivisco-email-api-v2.0/autoload.php';
// Create an instance of the NiviscoEmailAPIClient class
$client = new NiviscoEmailAPIClient();

$emailData = array(
    // SMTP data to send the email
    "smtp" => [
        "SMTPAuth" => true,
        "Mailer" => "smtp",
        "From" => "your-email@example.com",
        "AddReplyTo" => "reply-to@example.com",
        // "Username" => "glamourqllc@gmail.com", // Your email account's username for SMTP authentication
        // "Password" => "lmelghbcegmirphn", // Your email account's password for SMTP authentication
        "Username" => "automated@nivisco.com", // Your email account's username for SMTP authentication
        "Password" => "majxbkzbpwebzexy",
        "FromName" => "https://executivenailsspawestuniversity.com", // Name to be displayed as the sender (you can use your own static name)
        "Host" => "smtp.gmail.com", // SMTP server host name (e.g., "smtp.example.com")
        "SMTPSecure" => "tls",
        "Port" => 587,
        "Subject" => "Test Subject",
        "AltBody" => "This is the alternative text body",
        "Body" => "This is the HTML body",
        "addAddress" => ["glamourqllc@gmail.com"], // in array, you can add upto 5 email addresses
    ],
    "filter" => [
        "display_filter_report" => true, // For developer use only = true | false
        "emailForFilter" => "user@gmail.com", // User's email address for spam check testing
        "messageForFilter" => "user message here", // User's message without any template, checking for spam
    ]
);

// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

 
    $errors = [];


    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $staff = htmlspecialchars($_POST['staff']);
    $message = htmlspecialchars($_POST['message']);
    $service = htmlspecialchars($_POST['service']);
    $time = htmlspecialchars($_POST['time']);
    $date = htmlspecialchars($_POST['date']);



    // Validate username
    if (empty($name)) {
        $errors['name'] = "name is required";
    }

    if (empty($email)) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    // Validate phone
    if (empty($phone)) {
        $errors['phone'] = "Phone number is required.";
    } elseif (!preg_match("/^\+?[0-9]{10,}$/", $phone)) {
        $errors['phone'] = "Invalid phone number format.";
    }

    // Validate staff
    if (empty($staff)) {
        $errors['staff'] = "Staff name is required.";
    }

    // Validate message
    if (empty($message)) {
        $errors['message'] = "Message is required.";
    }

    // Validate service
    if (empty($service)) {
        $errors['service'] = "Service selection is required.";
    }

    // Validate time
    if (empty($time)) {
        $errors['time'] = "Time selection is required.";
    }

    // Validate date
    if (empty($date)) {
        $errors['date'] = "Date selection is required.";
    }
    //check array has erros
    if (!empty($errors)) {
        http_response_code(400); // Bad Request
        echo json_encode($errors);
        exit;
    }



    $pre_message = '<h4>Contact Details:</h4>
        <p><strong>Name:</strong> ' . $name . '</p>
        <p><strong>Email:</strong> ' . $email . '</p>
        <p><strong>Phone:</strong> ' . $phone . '</p>
        <p><strong>staff:</strong> ' . $staff . '</p>
        <p><strong>message:</strong> ' . $message . '</p>
        <p><strong>Service:</strong> ' . $service . '</p>
        <p><strong>time:</strong> ' . $time . '</p>
        <p><strong>data:</strong> ' . $date . '</p>';

    $emailData["filter"]['emailForFilter'] = $email;
    $emailData["filter"]['messageForFilter'] = $message;
    $emailData["smtp"]['From'] = $email;
    $emailData["smtp"]['AddReplyTo'] = $email;
    $emailData["smtp"]['FromName'] = $name;
    $emailData["smtp"]['Subject'] = "From the customer";
    $emailData["smtp"]['Name'] = $email;
    $emailData["smtp"]['AltBody'] = $name . " has been sent you a message";
    $emailData["smtp"]['Body'] = $pre_message;
    // Send the email using the sendEmail method
    $response = $client->sendEmail($emailData);
    
    if ($response["success"]) {
        echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully!']);
        exit;
    } else {
        echo json_encode(['status' => 'error', 'message' => 'There was an error sending your message. Please try again later.']);
        exit;
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
    exit;
}
