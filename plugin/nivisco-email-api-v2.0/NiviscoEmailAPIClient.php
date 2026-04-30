<?php
class NiviscoEmailAPIClient
{
    private $api_url;
    private $client;
    private $apiKey;
    private $website;

    public function __construct()
    {
        $this->api_url = 'https://api.amp.nivisco.com/v2';
        $this->client = "N-Client-7366adb5fd005c6";
        $this->apiKey = "N-Key-566797bb938033d80a4510b7f610bc01";
        $this->website = "https://executivenailsspawestuniversity.com"; // Client registered website
    }

    public function validateSmtpTable($smtp_table)
    {
        if (!is_array($smtp_table)) {
            return array(
                "success" => false,
                "action" => "Retry again",
                "message" => "Mailer array not found"
            );
        }
        // Define an array of required keys
        $requiredKeys = array(
            "SMTPAuth", "Mailer", "From", "AddReplyTo", "Username",
            "Password", "FromName", "Host", "SMTPSecure", "Port",
            "Subject", "AltBody", "Body", "addAddress"
        );

        foreach ($requiredKeys as $key) {
            if (!array_key_exists($key, $smtp_table) || empty($smtp_table[$key])) {
                return array(
                    "success" => false,
                    "action" => "Retry again",
                    "message" => "Invalid or missing data for key: $key"
                );
            }
        }

        // If all checks pass, return a success response
        return array(
            "success" => true,
            "message" => "SMTP configuration is valid"
        );
    }

    public function sendEmail($data)
    {
        $response = $this->validateSmtpTable($data["smtp"]);
        if ($response["success"]) {
            return $this->makeRequest($data);
        } else {
            return $response;
        }
    }

    private function makeRequest($endpoint)
    {
        $url = $this->api_url . "/email/";
        $ch = curl_init();
        // Get the client's IP address
        $clientIp = $_SERVER['REMOTE_ADDR'];

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Add IP address to the endpoint array
        $endpoint["Nivisco"] = [
            'client' => $this->client,
            'key' => $this->apiKey,
            'url' => $this->website,
            'ip' => $clientIp,
        ];

        // Convert the array to a query string
        $post_data = http_build_query($endpoint);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        // Set some common cURL options for enhanced security and robustness
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);  // Verify SSL certificates
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);     // Verify the hostname
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);  // Follow redirects
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);         // Limit the number of redirects
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);            // Set a timeout

        $response = curl_exec($ch);
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($http_status === 200) {
            // Process the GET request
            return json_decode($response, true);
        } else {
            return ['success' => false, 'content' => 'Authentication failed : HTTP/1.1 401 Unauthorized'];
        }
    }
}
