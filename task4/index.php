<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculate Days Difference</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body>
     <div class="container mt-5">
    <form method="post">
         <div class="col-md-6">
                <label for="name" class="form-label">Date1:</label>
                <input type="date" class="form-control" id="date1" name="date1" required>
            </div>
             <div class="col-md-6">
                <label for="name" class="form-label">Date2:</label>
                <input type="date" class="form-control" id="date2" name="date2" required>
            </div>
       
         <div class="col-12">
             <input  type="submit" class="btn btn-primary" value="Calculate">
            </div>
    </form>
</div>

    <?php
    // Function to calculate the number of days between two dates
    function calculateDaysBetweenDates($date1, $date2) {
        $datetime1 = new DateTime($date1);
        $datetime2 = new DateTime($date2);
        $interval = $datetime1->diff($datetime2);
        return $interval->days;
    }

    // Function to convert a number to words
    function numberToWords($number) {
        $words = [
            '', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine',
            'Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'
        ];
        $tens = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];

        if ($number < 20) {
            return $words[$number];
        } elseif ($number < 100) {
            return $tens[intval($number / 10)] . ($number % 10 !== 0 ? ' ' . $words[$number % 10] : '');
        } elseif ($number < 1000) {
            return $words[intval($number / 100)] . ' Hundred' . ($number % 100 !== 0 ? ' ' . numberToWords($number % 100) : '');
        } else {
            return 'Number is too large';
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $date1 = $_POST['date1'];
        $date2 = $_POST['date2'];

        // Calculate the number of days between the dates
        $daysDifference = calculateDaysBetweenDates($date1, $date2);

        // Print the number of days in both number and word format
        echo "$daysDifference Days\n"."<br/>";
        echo numberToWords($daysDifference) . " Days\n";
    }
    ?>
</body>
</html>
